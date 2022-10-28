<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function brands(){
        $brands = Brand::all();
        return view ('backend.brands.brands_view',compact('brands'));
    }
    public function addBrandT(){
        return view ('backend.brands.brands_create');
    }
    public function addBrand(Request $request){
    $data = new Brand();
    $data->title = $request->title;
    $image = $request->image; 
    $imageName = time() . '.' . $image->extension(); 
    $image->storeAs('Brand', $imageName);
    $data->image = $imageName;
    $data->category = $request->category;
    $data->save();

    return redirect()->route('brands');

    }
    public function editBrand($id){
        $data = Brand::find($id);
        return view('backend.brands.brands_edit',compact('data'));
    }
    public function updateBrand(Request $request, $id){
        
        $image = $request->image; 
        $imageName = time() . '.' . $image->extension(); 
        $image->storeAs('Brand', $imageName);

        Brand::find($id)->update([
        'title' => $request->title,
        'image' => $imageName,
        'category' => $request->category

        ]);
        return redirect()->route('brands');
    }
    public function deleteBrand($id){
        Brand::find($id)->delete();
        return redirect()->back();
    }

}
