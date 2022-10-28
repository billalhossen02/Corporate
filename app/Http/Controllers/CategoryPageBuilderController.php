<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\CategoryPageBuilder;

class CategoryPageBuilderController extends Controller
{
    public function category()
    {
        $displayCables = Category::where('sub_sub_category','Display cables')->get();
        $networkCables = Category::where('sub_sub_category','Network cables')->get();
        $adapters = Category::where('sub_sub_category','Adapters')->get();
        $storageCables = Category::where('sub_sub_category','Storage cables')->get();
        $powerCables = Category::where('sub_sub_category','Power cables')->get();
        $categories = Category::groupBy('sub_category')->get();
       
        return view('backend.pagebuilder.category', compact('categories','displayCables','networkCables','adapters','storageCables','powerCables'));
    }
    public function addPageCategory(Request $request){
        // dd($request->all());

        $data = $request->all();

        $dat = new CategoryPageBuilder();

        $dat->category = $request->category;

        $banner = $data['banner'];
        $bannerName = time() . '.' . $banner->extension();
        $banner->storeAs('Banner', $bannerName);
        $dat->banner = $bannerName;
        $dat->h1 = $request->h1;
        $dat->h2 = $request->h2;


        $category1 = Category::where('sub_sub_sub_category', $request->category1)->first();
        $dat->category1 = $category1->id;
        $category2 = Category::where('sub_sub_sub_category', $request->category2)->first();
        $dat->category2 = $category2->id;
        $category3 = Category::where('sub_sub_sub_category', $request->category3)->first();
        $dat->category3 = $category3->id;
        $category4 = Category::where('sub_sub_sub_category', $request->category4)->first();
        $dat->category4 = $category4->id;

        $category5 = Category::where('sub_sub_sub_category', $request->category5)->first();
        $dat->category5 = $category5->id;
        $category6 = Category::where('sub_sub_sub_category', $request->category6)->first();
        $dat->category6 = $category6->id;
        $category7 = Category::where('sub_sub_sub_category', $request->category7)->first();
        $dat->category7 = $category7->id;
        $category8 = Category::where('sub_sub_sub_category', $request->category8)->first();
        $dat->category8 = $category8->id;

        $category9 = Category::where('sub_sub_sub_category', $request->category9)->first();
        $dat->category9 = $category9->id;
        $category10 = Category::where('sub_sub_sub_category', $request->category10)->first();
        $dat->category10 = $category10->id;
        $category11 = Category::where('sub_sub_sub_category', $request->category11)->first();
        $dat->category11 = $category11->id;
        $category12 = Category::where('sub_sub_sub_category', $request->category12)->first();
        $dat->category12 = $category12->id;

        $category13 = Category::where('sub_sub_sub_category', $request->category13)->first();
        $dat->category13 = $category13->id;
        $category14 = Category::where('sub_sub_sub_category', $request->category14)->first();
        $dat->category14 = $category14->id;
        $category15 = Category::where('sub_sub_sub_category', $request->category15)->first();
        $dat->category15 = $category15->id;
        $category16 = Category::where('sub_sub_sub_category', $request->category16)->first();
        $dat->category16 = $category16->id;


        $category17 = Category::where('sub_sub_sub_category', $request->category17)->first();
        $dat->category17 = $category17->id;
        $category18 = Category::where('sub_sub_sub_category', $request->category18)->first();
        $dat->category18 = $category18->id;
        $category19 = Category::where('sub_sub_sub_category', $request->category19)->first();
        $dat->category19 = $category19->id;
        $category20 = Category::where('sub_sub_sub_category', $request->category20)->first();
        $dat->category20 = $category20->id;

        $dat->save();

        return redirect()->route('allpage');
    }
}
