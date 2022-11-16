<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Brand;
use App\Models\Story;
use App\Models\Product;
use App\Models\Success;
use App\Models\Category;
use App\Models\ContactUs;
use App\Models\PageBuilder;
use Illuminate\Http\Request;
use App\Models\HomePageBuilder;
use Illuminate\Support\Facades\DB;
use App\Models\CategoryPageBuilder;
use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $products_h = Product::where('Category', 'Hardware')->get();
        $products_s = Product::where('Category', 'Software')->get();
        return view('frontend.index', compact('products_h', 'products_s'));
    }
    public function login()
    {
        return view('frontend.auth.login');
    }
    public function register()
    {
        return view('frontend.auth.register');
    }
    public function contact()
    {
        $countries = DB::table('countries')
            ->groupBy('country')
            ->get();
        return view('frontend.contact.contactus')->with('countries', $countries);
    }
    public function location()
    {
        return view('frontend.contact.location');
    }
    public function fetch(Request $request)
    {
        $select = $request->get('select');
        $value = $request->get('value');
        $dependent = $request->get('dependent');
        $data = DB::table('countries')
            ->where($select, $value)
            ->groupBy($dependent)
            ->get();
        $output = '<option value="">Select ' . ucfirst($dependent) . '</option>';
        foreach ($data as $row) {
            $output .= '<option value="' . $row->$dependent . '">' . $row->$dependent . '</option>';
        }
        echo $output;
    }
    public function customLogout()
    {
        Auth::logout();
        return redirect()->route('home')->withSuccess('You have Successfully Logout');
    }
    public function contactUs(Request $request)
    {
        ContactUs::create($request->all());
        return redirect()->back()->withSuccess('Thank You for Your Interest');
    }
    public function addStory(Request $request)
    {
        $data = new Story();
        $data->title = $request->title;
        $data->tag = $request->tag;
        $image = $request->image;
        $imageName = time() . '.' . $image->extension();
        $image->storeAs('images', $imageName);
        $data->image = $imageName;
        $data->description = $request->description;
        $data->save();
    }
    public function search(Request $request)
    {
        if ($request->keyword != '') {
            $sproducts = Product::where('title', 'LIKE', '%' . $request->keyword . '%')->get();
        }
        return response()->json([
            'sproducts' => $sproducts
        ]);
    }
    public function product($id)
    {
        $sproduct = Product::find($id);
        $products = Product::where('category', $sproduct->category)->get();
        return view('frontend.product.show', ['products' => $products, 'sproduct' => $sproduct]);
    }
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password',);
        if (Auth::attempt($credentials)) {
            if (Auth::user()->email_verified_at == null) {
                Auth::logout();
                return redirect("login")->withWarning('Oppes! You have To Verified Your Email');
            }
            return redirect()->intended('/')
                ->withSuccess('You have Successfully loggedin');
        }
        return redirect("login")->withWarning('Oppes! You have entered invalid credentials');
    }
    public function forgot()
    {
        return view('frontend.auth.forgot');
    }
    public function reset($request)
    {
        return view('frontend.auth.reset', ['request' => $request]);
    }
    public function allSoftware()
    {
        return view('frontend.product.allsoftware');
    }
    public function software()
    {
        return view('frontend.product.software');
    }
    public function hardware($brand)
    {
        $solution = PageBuilder::where('brand', $brand)->with('section1', 'section2', 'section3', 'section4', 'sec1', 'sec2', 'sec3', 'sec4')->firstOrFail();
        $products = Product::where('brand', $brand)->inRandomOrder()->get();
        $brand = Brand::where('title', $brand)->firstOrFail();
        return view('frontend.product.hardware', ['solution' => $solution, 'brand' => $brand, 'products' => $products]);
    }
    public function modal($id)
    {
        $data = Product::find($id);
        return view('frontend.product.modal', compact('data'));
    }
    public function filter(Request $request)
    {
        $per_page = 5;
        if ($request->per_page) {
            $per_page = $request->per_page;
        }

        if ($request->low && $request->high && $request->keyword && $request->get('filterbrand') && $request->get('filtercategory')) {
            if ($request->low && $request->high) {
                $low = $request->low;
                $high = $request->high;
            }
            if ($request->keyword) {
                $keyword = $request->keyword;
            }
            if ($request->get('filterbrand')) {
                $checked = $_GET['filterbrand'];
            }
            if ($request->get('filtercategory')) {
                $checked1 = $_GET['filtercategory'];
            }
            $products = Product::where('price', '>=', $low)
                ->where('price', '<=', $high)
                ->where('title', 'like', '%' . $keyword . '%')
                ->whereIn('brand', $checked)
                ->whereIn('product_type', $checked1)
                ->paginate($per_page);
            $brands = Brand::all();
            $categories = Category::groupBy('category')->all();
            return view('frontend.product.filert')
                ->with('products', $products)
                ->with('brands', $brands)
                ->with('request', $request)
                ->with('categories', $categories);
        }

        if ($request->low && $request->high && $request->keyword && $request->get('filterbrand')) {
            if ($request->low && $request->high) {
                $low = $request->low;
                $high = $request->high;
            }
            if ($request->keyword) {
                $keyword = $request->keyword;
            }
            if ($request->get('filterbrand')) {
                $checked = $_GET['filterbrand'];
            }
            $products = Product::where('price', '>=', $low)
                ->where('price', '<=', $high)
                ->where('title', 'like', '%' . $keyword . '%')
                ->whereIn('brand', $checked)
                ->paginate($per_page);
            $brands = Brand::all();
            $categories = Category::groupBy('category')->get();
            return view('frontend.product.filert')
                ->with('products', $products)
                ->with('brands', $brands)
                ->with('request', $request)
                ->with('categories', $categories);
        }

        if ($request->low != null && $request->high != null && $request->get('filterbrand') && $request->get('filtercategory')) {
            $low = $request->low;
            $high = $request->high;
            $checked = $_GET['filterbrand'];
            $checked1 = $_GET['filtercategory'];


            $products = Product::where('price', '>=', $low)
                ->where('price', '<=', $high)
                ->whereIn('brand', $checked)
                ->whereIn('product_type', $checked1)
                ->paginate($per_page);
            $brands = Brand::all();
            $categories = Category::groupBy('category')->all();
            return view('frontend.product.filert')
                ->with('products', $products)
                ->with('brands', $brands)
                ->with('request', $request)
                ->with('categories', $categories);
        }

        if ($request->keyword && $request->get('filterbrand') && $request->get('filtercategory')) {
            $keyword = $request->keyword;
            $checked = $_GET['filterbrand'];
            $checked1 = $_GET['filtercategory'];


            $products = Product::where('title', 'like', '%' . $keyword . '%')
                ->whereIn('brand', $checked)
                ->whereIn('product_type', $checked1)
                ->paginate($per_page);
            $brands = Brand::get();
            $categories = Category::groupBy('category')->all();
            return view('frontend.product.filert')
                ->with('products', $products)
                ->with('brands', $brands)
                ->with('request', $request)
                ->with('categories', $categories);
        }

        if ($request->get('filterbrand') && $request->get('filtercategory')) {

            $checked = $_GET['filterbrand'];
            $checked1 = $_GET['filtercategory'];
            $products = Product::whereIn('brand', $checked)
                ->whereIn('category', $checked1)->paginate($per_page);
            $brands = Brand::all();
            $categories = Category::groupBy('category')->all();

            return view('frontend.product.filert')
                ->with('products', $products)
                ->with('brands', $brands)
                ->with('request', $request)
                ->with('categories', $categories);
        }

        if ($request->low && $request->high && $request->keyword) {

            if ($request->low && $request->high) {
                $low = $request->low;
                $high = $request->high;
            }
            if ($request->keyword) {
                $keyword = $request->keyword;
            }

            $products = Product::where('price', '>=', $low)
                ->where('price', '<=', $high)
                ->where('title', 'like', '%' . $keyword . '%')
                ->paginate($per_page);
            $brands = Brand::all();
            $categories = Category::groupBy('category')->get();

            return view('frontend.product.filert')
                ->with('products', $products)
                ->with('brands', $brands)
                ->with('request', $request)
                ->with('categories', $categories);
        }

        if ($request->keyword && $request->get('filterbrand')) {

            if ($request->keyword) {
                $keyword = $request->keyword;
            }
            $checked = $_GET['filterbrand'];


            $products = Product::where('title', 'like', '%' . $keyword . '%')
                ->whereIn('brand', $checked)
                ->paginate($per_page);
            $brands = Brand::all();
            $categories = Category::groupBy('category')->all();

            return view('frontend.product.filert')
                ->with('products', $products)
                ->with('brands', $brands)
                ->with('request', $request)
                ->with('categories', $categories);
        }

        if ($request->keyword && $request->get('filtercategory')) {

            if ($request->keyword) {
                $keyword = $request->keyword;
            }
            $checked = $_GET['filtercategory'];


            $products = Product::where('title', 'like', '%' . $keyword . '%')
                ->whereIn('product_type', $checked)
                ->paginate($per_page);
            $brands = Brand::all();
            $categories = Category::groupBy('category')->get();

            return view('frontend.product.filert')
                ->with('products', $products)
                ->with('brands', $brands)
                ->with('request', $request)
                ->with('categories', $categories);
        }


        if ($request->low != null && $request->high != null && $request->get('filterbrand')) {
            $low = $request->low;
            $high = $request->high;
            $checked = $_GET['filterbrand'];


            $products = Product::where('price', '>=', $low)
                ->where('price', '<=', $high)
                ->whereIn('brand', $checked)
                ->paginate($per_page);
            $brands = Brand::all();
            $categories = Category::groupBy('category')->get();

            return view('frontend.product.filert')
                ->with('products', $products)
                ->with('brands', $brands)
                ->with('request', $request)
                ->with('categories', $categories);
        }


        if ($request->low != null && $request->high != null && $request->get('filtercategory')) {
            $low = $request->low;
            $high = $request->high;
            $checked = $_GET['filtercategory'];


            $products = Product::where('price', '>=', $low)
                ->where('price', '<=', $high)
                ->whereIn('product_type', $checked)
                ->paginate($per_page);
            $brands = Brand::all();
            $categories = Category::groupBy('category')->get();

            return view('frontend.product.filert')
                ->with('products', $products)
                ->with('brands', $brands)
                ->with('request', $request)
                ->with('categories', $categories);
        }

        if ($request->low != null && $request->high != null) {
            $low = $request->low;
            $high = $request->high;

            $products = Product::where('price', '>=', $low)
                ->where('price', '<=', $high)
                ->paginate($per_page);
            $brands = Brand::all();
            $categories = Category::groupBy('category')->get();

            return view('frontend.product.filert')
                ->with('products', $products)
                ->with('brands', $brands)
                ->with('request', $request)
                ->with('categories', $categories);
        }

        if ($request->keyword) {
            $keyword = $request->keyword;

            $products = Product::where('title', 'like', '%' . $keyword . '%')->paginate($per_page);
            $brands = Brand::all();
            $categories = Category::groupBy('category')->get();
            return view('frontend.product.filert')
                ->with('products', $products)
                ->with('brands', $brands)
                ->with('request', $request)
                ->with('categories', $categories);
        }

        if ($request->get('filterbrand')) {

            $checked = $_GET['filterbrand'];
            $products = Product::whereIn('brand', $checked)->paginate($per_page);
            $brands = Brand::all();
            $categories = Category::groupBy('category')->get();
            return view('frontend.product.filert')
                ->with('products', $products)
                ->with('brands', $brands)
                ->with('request', $request)
                ->with('categories', $categories);
        }

        if ($request->get('filtercategory')) {

            $checked = $_GET['filtercategory'];
            $products = Product::whereIn('product_type', $checked)->paginate($per_page);
            $brands = Brand::all();
            $categories = Category::groupBy('category')->get();
            return view('frontend.product.filert')
                ->with('products', $products)
                ->with('brands', $brands)
                ->with('request', $request)
                ->with('categories', $categories);
        }

        $brands = Brand::all();
        $categories = Category::groupBy('category')->get();
        $products = Product::paginate($per_page);
        return view('frontend.product.filert')
            ->with('products', $products)
            ->with('brands', $brands)
            ->with('request', $request)
            ->with('categories', $categories);
    }
    public function shop_html()
    {
        $products = Product::inRandomOrder()->get();
        $categories = Category::groupBy('sub_category')->get();
        $brands = Brand::all();
        return view('frontend.product.shop_html', compact('products', 'categories', 'brands'));
    }
    public function partner()
    {
        $topBrands = Brand::where('category', 'Top')->get();
        $featuredBrands = Brand::where('category', 'Featured')->get();
        $othersBrands = Brand::where('category', 'Others')->get();
        return view('frontend.brand.brand', compact('topBrands', 'featuredBrands', 'othersBrands'));
    }
    public function category($category)
    {
        $featuredCables = Product::where('sub_category', 'Cables')->get();
        $brands = Brand::all();
        $data = CategoryPageBuilder::where('category', $category)->with('cat1', 'cat2', 'cat3', 'cat4', 'cat5', 'cat6', 'cat7', 'cat8', 'cat9', 'cat10', 'cat11', 'cat12', 'cat13', 'cat14', 'cat15', 'cat16', 'cat17', 'cat18', 'cat19', 'cat20')->firstOrFail();
        return view('frontend.category.category', ['data' => $data, 'brands' => $brands, 'featuredCables' => $featuredCables]);
    }
    public function about()
    {
        return view('frontend.about.about');
    }
    public function tech()
    {
        $techDeal = Product::where('product_type', 'deal')->get();
        $refurbished = Product::where('product_type', 'refurbished')->get();
        $categories = Category::groupBy('sub_category')->get();
        return view('frontend.tech.deal', compact('techDeal', 'categories', 'refurbished'));
    }
    public function accountBenefits()
    {
        return view('frontend.client.account_benefits');
    }
}
