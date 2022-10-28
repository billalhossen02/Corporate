<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Brand;
use App\Models\Client;
use App\Models\Product;
use App\Models\Success;
use App\Models\Category;
use App\Models\CategoryPageBuilder;
use App\Models\Industry;
use App\Models\Solution;
use App\Models\PageBuilder;
use Illuminate\Http\Request;
use App\Models\HomePageBuilder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class PageBuilderController extends Controller
{
    public function brand()
    {
        $brands = Brand::all();
        $products = Product::all();
        $blogs = Blog::all();
        $categories = Category::all();
        $industries = Industry::all();
        $solutions  = Solution::all();
        return view('backend.pagebuilder.brand', compact('brands', 'products', 'blogs', 'categories', 'industries', 'solutions'));
    }
    public function addPage(Request $request)
    {
        // dd($request->all());
        $data = $request->all();

        $dat = new PageBuilder();

        $dat->brand = $request->brand;
        $banner = $data['banner'];
        $bannerName = time() . '.' . $banner->extension();
        $banner->storeAs('Banner', $bannerName);
        $dat->banner = $bannerName;
        $dat->h1 = $request->h1;
        $dat->h2 = $request->h2;

        $circle1 = $data['circle1'];
        $circle1Name = time() . '.' . $circle1->extension();
        $circle1->storeAs('Circle1', $circle1Name);
        $dat->circle1 = $circle1Name;
        $dat->ctitle1 = $request->ctitle1;

        $circle2 = $data['circle2'];
        $circle2Name = time() . '.' . $circle2->extension();
        $circle2->storeAs('Circle2', $circle2Name);
        $dat->circle2 = $circle2Name;
        $dat->ctitle2 = $request->ctitle2;

        $circle3 = $data['circle3'];
        $circle3Name = time() . '.' . $circle3->extension();
        $circle3->storeAs('Circle3', $circle3Name);
        $dat->circle3 = $circle3Name;
        $dat->ctitle3 = $request->ctitle3;

        if ($request->p1_image) {
            $image = $request->p1_image;
            $imageNamep1 = time() . '.' . $image->extension();
            $image->storeAs('Product', $imageNamep1);
        }

        if ($request->s1_logo) {
            $image = $request->s1_logo;
            $imageNames1 = time() . '.' . $image->extension();
            $image->storeAs('Blog', $imageNames1);
        }


        if ($request->p2_image) {
            $image = $request->p2_image;
            $imageNamep2 = time() . '.' . $image->extension();
            $image->storeAs('Product', $imageNamep2);
        }

        if ($request->s2_logo) {
            $image = $request->s2_logo;
            $imageNames2 = time() . '.' . $image->extension();
            $image->storeAs('Blog', $imageNames2);
        }


        if ($request->p3_image) {
            $image = $request->p3_image;
            $imageNamep3 = time() . '.' . $image->extension();
            $image->storeAs('Product', $imageNamep3);
        }

        if ($request->s3_logo) {
            $image = $request->s3_logo;
            $imageNames3 = time() . '.' . $image->extension();
            $image->storeAs('Blog', $imageNames3);
        }


        if ($request->p4_image) {
            $image = $request->p4_image;
            $imageNamep4 = time() . '.' . $image->extension();
            $image->storeAs('Product', $imageNamep4);
        }

        if ($request->s4_logo) {
            $image = $request->s4_logo;
            $imageNames4 = time() . '.' . $image->extension();
            $image->storeAs('Blog', $imageNames4);
        }



        if ($request->write_type1 != null) {

            if ($request->write_type1 == 'product') {
                $section1 = Product::create([
                    'title' => $request->p1_title,
                    'price' => $request->p1_price,
                    'description' => $request->p1_description,
                    'image' => $imageNamep1,
                    'product_type' => $request->p1_product_type,
                    'category' => $request->p1_category,
                    'sub_category' => $request->p1_sub_category,
                    'brand' => $request->p1_brand,
                    'industry' => $request->p1_industry
                ]);

                $dat->section1_id = $section1->id;
                $dat->sec1_id = null;
            } else {
                $sec1 = Blog::create([
                    'title' => $request->s1_title,
                    'description' => $request->s1_description,
                    'header1' => $request->s1_header1,
                    // 'header2' => $request->s1_header2,
                    'industries' => $request->s1_industries,
                    'solutions' => $request->s1_solutions,
                    'logo' => $imageNames1,
                    'tags' => $request->s1_tags
                ]);

                $dat->sec1_id = $sec1->id;
                $dat->section1_id = null;
            }
        } else {
            if ($request->select_type1 == 'product') {
                $section1 = Product::where('title', $request->title1_p)->first();
                $dat->section1_id = $section1->id;
                $dat->sec1_id = null;
            } else {
                $sec1 = Blog::where('title', '=', $request->title1_s)->first();
                $dat->sec1_id = $sec1->id;
                $dat->section1_id = null;
            }
        }

        if ($request->write_type2 != null) {

            if ($request->write_type2 == 'product') {
                $section2 = Product::create([
                    'title' => $request->p2_title,
                    'price' => $request->p2_price,
                    'description' => $request->p2_description,
                    'image' => $imageNamep2,
                    'product_type' => $request->p2_product_type,
                    'category' => $request->p2_category,
                    'sub_category' => $request->p2_sub_category,
                    'brand' => $request->p2_brand,
                    'industry' => $request->p2_industry
                ]);

                $dat->section2_id = $section2->id;
                $dat->sec2_id = null;
            } else {
                $sec2 = Blog::create([
                    'title' => $request->s2_title,
                    'description' => $request->s2_description,
                    'header1' => $request->s2_header1,
                    // 'header2' => $request->s2_header2,
                    'industries' => $request->s2_industries,
                    'solutions' => $request->s2_solutions,
                    'logo' => $imageNames2,
                    'tags' => $request->s2_tags
                ]);

                $dat->sec2_id = $sec2->id;
                $dat->section2_id = null;
            }
        } else {
            if ($request->select_type2 == 'product') {
                $section2 = Product::where('title', $request->title2_p)->first();
                $dat->section2_id = $section2->id;
                $dat->sec2_id = null;
            } else {
                $sec2 = Blog::where('title', $request->title2_s)->first();
                $dat->sec2_id = $sec2->id;
                $dat->section2_id = null;
            }
        }




        if ($request->write_type3 != null) {

            if ($request->write_type3 == 'product') {
                $section3 = Product::create([
                    'title' => $request->p3_title,
                    'price' => $request->p3_price,
                    'description' => $request->p3_description,
                    'image' => $imageNamep3,
                    'product_type' => $request->p3_product_type,
                    'category' => $request->p3_category,
                    'sub_category' => $request->p3_sub_category,
                    'brand' => $request->p3_brand,
                    'industry' => $request->p3_industry
                ]);

                $dat->section3_id = $section3->id;
                $dat->sec3_id = null;
            } else {
                $sec3 = Blog::create([
                    'title' => $request->s3_title,
                    'description' => $request->s3_description,
                    'header1' => $request->s3_header1,
                    // 'header2' => $request->s3_header2,
                    'industries' => $request->s3_industries,
                    'solutions' => $request->s3_solutions,
                    'logo' => $imageNames3,
                    'tags' => $request->s3_tags
                ]);

                $dat->sec3_id = $sec3->id;
                $dat->section3_id = null;
            }
        } else {
            if ($request->select_type3 == 'product') {
                $section3 = Product::where('title', $request->title3_p)->first();
                $dat->section3_id = $section3->id;
                $dat->sec3_id = null;
            } else {
                $sec3 = Blog::where('title', $request->title3_s)->first();
                $dat->sec3_id = $sec3->id;
                $dat->section3_id = null;
            }
        }


        if ($request->write_type4 != null) {

            if ($request->write_type4 == 'product') {
                $section4 = Product::create([
                    'title' => $request->p4_title,
                    'price' => $request->p4_price,
                    'description' => $request->p4_description,
                    'image' => $imageNamep4,
                    'product_type' => $request->p4_product_type,
                    'category' => $request->p4_category,
                    'sub_category' => $request->p4_sub_category,
                    'brand' => $request->p4_brand,
                    'industry' => $request->p4_industry
                ]);

                $dat->section4_id = $section4->id;
                $dat->sec4_id = null;
            } else {
                $sec4 = Blog::create([
                    'title' => $request->s4_title,
                    'description' => $request->s4_description,
                    'header1' => $request->s4_header1,
                    // 'header2' => $request->s4_header2,
                    'industries' => $request->s4_industries,
                    'solutions' => $request->s4_solutions,
                    'logo' => $imageNames4,
                    'tags' => $request->s4_tags
                ]);

                $dat->sec4_id = $sec4->id;
                $dat->section4_id = null;
            }
        } else {


            if ($request->select_type4 == 'product') {
                $section4 = Product::where('title', $request->title4_p)->first();
                $dat->section4_id = $section4->id;
                $dat->sec4_id = null;
            } else {
                $sec4 = Blog::where('title', $request->title4_s)->first();
                $dat->sec4_id = $sec4->id;
                $dat->section4_id = null;
            }
        }


        $dat->save();

        return redirect()->route('allpage');
    }

    public function allPage()
    {
        $brands = PageBuilder::all();
        $categories = CategoryPageBuilder::all();
        $home = HomePageBuilder::latest()->get();
        return view('backend.pagebuilder.view', compact('brands', 'home', 'categories'));
    }
    // public function edit($id)
    // {
    //     $data = PageBuilder::find($id);
    //     $routeCollection = Route::getRoutes();
    //     return view('backend.pagebuilder.edit', compact('data', 'routeCollection'));
    // }
    // public function update(Request $request, $id)
    // {


    //     if ($request->banner != null) {
    //         $banner = $request->banner;
    //         $bannerName = time() . '.' . $banner->extension();
    //         $banner->storeAs('Banner', $bannerName);
    //     } else {

    //         $bannerName = $request->previous_banner;
    //     }


    //     if ($request->circle1 != null) {
    //         $circle1 = $request->circle1;
    //         $circle1Name = time() . '.' . $circle1->extension();
    //         $circle1->storeAs('Circle1', $circle1Name);
    //     } else {
    //         $circle1Name = $request->previous_circle1;
    //     }

    //     if ($request->circle2 != null) {
    //         $circle2 = $request->circle2;
    //         $circle2Name = time() . '.' . $circle2->extension();
    //         $circle2->storeAs('Circle2', $circle2Name);
    //     } else {
    //         $circle2Name = $request->previous_circle2;
    //     }

    //     if ($request->circle3 != null) {
    //         $circle3 = $request->circle3;
    //         $circle3Name = time() . '.' . $circle3->extension();
    //         $circle3->storeAs('Circle3', $circle3Name);
    //     } else {
    //         $circle3Name = $request->previous_circle3;
    //     }

    //     if ($request->img1 != null) {
    //         $img1 = $request->img1;
    //         $img1Name = time() . '.' . $img1->extension();
    //         $img1->storeAs('Img1', $img1Name);
    //     } else {
    //         $img1Name = $request->previous_img1;
    //     }

    //     if ($request->img2 != null) {
    //         $img2 = $request->img2;
    //         $img2Name = time() . '.' . $img2->extension();
    //         $img2->storeAs('Img2', $img2Name);
    //     } else {
    //         $img2Name = $request->previous_img2;
    //     }

    //     if ($request->img3 != null) {
    //         $img3 = $request->img3;
    //         $img3Name = time() . '.' . $img3->extension();
    //         $img3->storeAs('Img3', $img3Name);
    //     } else {
    //         $img3Name = $request->previous_img3;
    //     }

    //     if ($request->img4 != null) {
    //         $img4 = $request->img4;
    //         $img4Name = time() . '.' . $img4->extension();
    //         $img4->storeAs('Img4', $img4Name);
    //     } else {
    //         $img4Name = $request->previous_img4;
    //     }

    //     PageBuilder::find($id)->update([
    //         'banner' => $bannerName,
    //         'h1' => $request->h1,
    //         'h2' => $request->h2,
    //         'circle1' => $circle1Name,
    //         'ctitle1' => $request->ctitle1,
    //         'circle2' => $circle2Name,
    //         'ctitle2' => $request->ctitle2,
    //         'circle3' => $circle3Name,
    //         'ctitle3' => $request->ctitle3,
    //         'title1' => $request->title1,
    //         'description1' => $request->description1,
    //         'btn1' => $request->btn1,
    //         'img1' => $img1Name,
    //         'img2' => $img2Name,
    //         'title2' => $request->title2,
    //         'description2' => $request->description2,
    //         'btn2' => $request->btn2,
    //         'title3' => $request->title3,
    //         'description3' => $request->description3,
    //         'btn3' => $request->btn3,
    //         'img3' => $img3Name,
    //         'img4' => $img4Name,
    //         'title4' => $request->title4,
    //         'description4' => $request->description4,
    //         'btn4' => $request->btn4,

    //     ]);

    //     return back()->with('success', 'update Succefully');
    // }

    // public function delete($id)
    // {
    //     PageBuilder::find($id)->delete();
    //     return back();
    // }
    public function choose()
    {
        $brands = Brand::all();
        return view('backend.pagebuilder.choose', compact('brands'));
    }
}
