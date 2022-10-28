<?php

namespace App\Http\Controllers;

use App\Models\Solution;
// use App\Models\Blogs;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SolutionController extends Controller
{   
    // public function index(){
    //     return view(('frontend.index'),[
    //         'blogs' => Blog::latest()->paginate(4)
    //     ]); 
    // }

    public function view_solution(){
        return view ('backend.solutions.view',[
            'solutions' => Solution::all()
        ]);
    }

    public function create_solution(){
        return view ('backend.solutions.create');
    }
    
    //Show Edit Form
    public function edit_solution($id){
        $solution = Solution::find($id);
    return view('backend.solutions.edit', ['solution' => $solution]);
    }

    
    //Store  Data
    public function store_solution(Request $request)
    {
        $formFields = $request->validate([
            'title' => ['required', Rule::unique('solutions', 'title')],
        ]);
        
        
        Solution::create($formFields);
        
        return redirect()->route('view_solution');
    }

    //Update Data
    public function update_solution(Request $request, $id)
    {

        Solution::find($id)->update([
            'title' => $request->title,
            ]);
            return redirect()->route('view_solution');
        
        
    }


    public function delete($id){
       Solution::find($id)->delete();
        return back();
    }


    // Delete Blog
    // public function delete_solution(Solution $solution){
    //     $solution->delete();
    //     return redirect('/')->with('message', 'Listing Deleted Successfully');
    // }

    //Show Single Blog
    public function single_solution()
    {
        return view ('backend.solutions.view',[
            'solutions' => Solution::all()
        ]);
    }

}
