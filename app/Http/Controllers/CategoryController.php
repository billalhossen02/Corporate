<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{

    public function categories()
    {
        $categories = Category::groupBy('sub_category')->orderBy('id', 'desc')->paginate(5);
        return view('backend.category.category_view', compact('categories'));
    }
    public function fetch2(Request $request)
    {
        $select = $request->get('select');
        $value = $request->get('value');
        $dependent = $request->get('dependent');
        $data = DB::table('categories')
            ->where($select, $value)
            ->groupBy($dependent)
            ->get();
        $output = '<option value="">Select ' . ucfirst($dependent) . '</option>';
        foreach ($data as $row) {
            $output .= '<option value="' . $row->$dependent . '">' . $row->$dependent . '</option>';
        }
        echo $output;
    }
    public function addCategoryT()
    {
        return view('backend.category.category_create');
    }
    public function addCategory(Request $request)
    {
        $data = new Category();
        $data->category = $request->category;
        $data->sub_category = $request->sub_category;

        if ($request->sub_image) {
            $image = $request->sub_image;
            $subImage = time() . '.' . $image->extension();
            $image->storeAs('Category', $subImage);
            $data->sub_img = $subImage;
        }
        $data->sub_sub_category = $request->sub_sub_category;

        if ($request->sub_sub_image) {
            $image2 = $request->sub_sub_image;
            $subsubImage = time() . '.' . $image2->extension();
            $image2->storeAs('Category', $subsubImage);
            $data->sub_sub_img = $subsubImage;
        }

        $data->sub_sub_sub_category = $request->sub_sub_sub_category;

        if ($request->sub_sub_sub_image) {
            $image3 = $request->sub_sub_sub_image;
            $subsubsubImage = time() . '.' . $image3->extension();
            $image3->storeAs('Category', $subsubsubImage);
            $data->sub_sub_sub_img = $subsubsubImage;
        }

        $data->save();

        return redirect()->route('categories');
    }
    public function editCategory($id)
    {
        $data = Category::find($id);
        return view('backend.category.category_edit', compact('data'));
    }
    public function updateCategory(Request $request, $id)
    {

        $image = $request->image;
        $imageName = time() . '.' . $image->extension();
        $image->storeAs('Category', $imageName);

        Category::find($id)->update([
            'title' => $request->title,
            'image' => $imageName,
        ]);
        return redirect()->route('categories');
    }
    public function deleteCategory($id)
    {
        Category::find($id)->delete();
        return redirect()->back();
    }
}
