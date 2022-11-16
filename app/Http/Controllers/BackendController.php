<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Brand;
use App\Models\Product;
use App\Mail\newProduct;
use App\Models\Category;
use App\Models\Industry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Console\Scheduling\Schedule;

class BackendController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index', 'addProduct']]);
        $this->middleware('permission:product-create', ['only' => ['addProductT', 'addProduct']]);
        $this->middleware('permission:product-edit', ['only' => ['editProduct', 'updateProduct']]);
        $this->middleware('permission:product-delete', ['only' => ['deleteProduct']]);
    }

    public function index()
    {
        return view('backend.index');
    }

    public function products()
    {
        $products = Product::orderBy('id', 'desc')->paginate(5);
        return view('backend.products.product_view', compact('products'));
    }

    public function addProductT()
    {
        $brands = Brand::all();
        $industries = Industry::all();
        $categories = DB::table('categories')
            ->groupBy('category')
            ->get();
        return view('backend.products.product_create', compact('categories', 'brands', 'industries'));
    }
    public function addProduct(Request $request, Schedule $schedule)
    {
        $data = new Product();
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        $image = $request->image;
        $imageName = time() . '.' . $image->extension();
        $image->storeAs('Product', $imageName);
        $data->image = $imageName;
        $data->product_type = $request->product_type;
        $data->category = $request->category;
        $data->sub_category = $request->sub_category;
        $data->sub_sub_category = $request->sub_sub_category;
        $data->sub_sub_sub_category = $request->sub_sub_sub_category;
        $data->brand = $request->brand;
        $data->industry = $request->industry;

        $data->save();

        $users = User::all();
        // foreach ($users as $user) {
        Mail::to('dev1.ngenit@gmail.com')->send(new newProduct());
        // }

        return redirect()->route('products');
    }
    public function editProduct($id)
    {
        $data = Product::find($id);
        $brands = Brand::all();
        $categories = Category::all();
        $industries = Industry::all();
        return view('backend.products.product_edit', compact('data', 'categories', 'brands', 'industries'));
    }
    public function updateProduct(Request $request, $id)
    {

        $image = $request->image;
        $imageName = time() . '.' . $image->extension();
        $image->storeAs('Product', $imageName);

        Product::find($id)->update([
            'title' => $request->title,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $imageName,
            'product_type' => $request->product_type,
            'category' => $request->category,
            'sub_category' => $request->sub_category,
            'brand' => $request->brand,
            'industry' => $request->industry
        ]);
        return redirect()->route('products');
    }
    public function deleteProduct($id)
    {
        Product::find($id)->delete();
        return redirect()->back();
    }
}
