<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Story;
use App\Models\Industry;

// use App\Models\Blogs;
use App\Models\Solution;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    // public function index(){
    //     return view(('frontend.index'),[
    //         'blogs' => Blog::latest()->paginate(4)
    //     ]);
    // }

    public function blogs_backend(){
        return view ('backend.blogs.view',[
            'blogs' => Blog::all(),
            'solutions' => Solution::all(),
            'industries' => Industry::all()
        ]);
    }
    // public function blogs_create_backend(){
    //     return view ('backend.blogs.create');
    // }

    //Show Edit Form
    public function edit(Blog $blog){
    return view('backend.blogs.edit',
        [
            'blog' => $blog,
            'solutions' => Solution::all(),
            'industries' => Industry::all()

        ]);

    }

    // Show All Listing
    public function blogs(Request $request)
    {
        $per_page = 5;
        if($request ->per_page) {
            $per_page = $request->per_page;
	    }

        if($request->keyword && $request->get('filterindustry') && $request->get('filtersolution')) {
            if($request->keyword){ $keyword = $request->keyword;}
            if($request->get('filterindustry') ){$checked = $_GET['filterindustry'];}
            if($request->get('filtersolution')){$checked1 = $_GET['filtersolution'];}

            $blogs = Blog::where('title','like','%'.$keyword.'%' )
                                   ->whereIn('industries',$checked)
                                   ->whereIn('solutions',$checked1)
                                    ->paginate($per_page);

            $solutions = Solution::all();
            $industries = Industry::all();
            return view(
                'frontend.blogs.blogs', [
                    // 'heading' => 'Latest Blogs',
                    'blogs' => $blogs,
                    'solutions' => $solutions,
                    'industries' => $industries,
                    'request' => $request
                ]);
	    }

        if($request->get('filterindustry') && $request->get('filtersolution')) {
            if($request->get('filterindustry') ){$checked = $_GET['filterindustry'];}
            if($request->get('filtersolution')){$checked1 = $_GET['filtersolution'];}

            $blogs = Blog::whereIn('industries',$checked)
                                   ->whereIn('solutions',$checked1)
                                    ->paginate($per_page);

            $solutions = Solution::all();
            $industries = Industry::all();
            return view(
                'frontend.blogs.blogs', [
                    // 'heading' => 'Latest Blogs',
                    'blogs' => $blogs,
                    'solutions' => $solutions,
                    'industries' => $industries,
                    'request' => $request
                ]);
	    }

        if($request->keyword && $request->get('filterindustry')) {
            if($request->keyword){ $keyword = $request->keyword;}
            if($request->get('filterindustry') ){$checked = $_GET['filterindustry'];}

            $blogs = Blog::where('title','like','%'.$keyword.'%' )
                                   ->whereIn('industries',$checked)
                                    ->paginate($per_page);

            $solutions = Solution::all();
            $industries = Industry::all();
            return view(
                'frontend.blogs.blogs', [
                    // 'heading' => 'Latest Blogs',
                    'blogs' => $blogs,
                    'solutions' => $solutions,
                    'industries' => $industries,
                    'request' => $request
                ]);
	    }

        if($request->keyword && $request->get('filtersolution')) {
            if($request->keyword){ $keyword = $request->keyword;}
            if($request->get('filtersolution')){$checked1 = $_GET['filtersolution'];}

            $blogs = Blog::where('title','like','%'.$keyword.'%' )
                                   ->whereIn('solutions',$checked1)
                                    ->paginate($per_page);

            $solutions = Solution::all();
            $industries = Industry::all();
            return view(
                'frontend.blogs.blogs', [
                    // 'heading' => 'Latest Blogs',
                    'blogs' => $blogs,
                    'solutions' => $solutions,
                    'industries' => $industries,
                    'request' => $request
                ]);
	    }

        if($request->get('filterindustry')) {
            if($request->get('filterindustry') ){$checked = $_GET['filterindustry'];}

            $blogs = Blog::whereIn('industries',$checked)
                                    ->paginate($per_page);

            $solutions = Solution::all();
            $industries = Industry::all();
            return view(
                'frontend.blogs.blogs', [
                    // 'heading' => 'Latest Blogs',
                    'blogs' => $blogs,
                    'solutions' => $solutions,
                    'industries' => $industries,
                    'request' => $request
                ]);
	    }

        if($request->get('filtersolution')) {
            if($request->get('filtersolution')){$checked1 = $_GET['filtersolution'];}

            $blogs = Blog::whereIn('solutions',$checked1)
                                    ->paginate($per_page);

            $solutions = Solution::all();
            $industries = Industry::all();
            return view(
                'frontend.blogs.blogs', [
                    // 'heading' => 'Latest Blogs',
                    'blogs' => $blogs,
                    'solutions' => $solutions,
                    'industries' => $industries,
                    'request' => $request
                ]);
	    }

        if($request->keyword) {
            if($request->keyword){ $keyword = $request->keyword;}

            $blogs = Blog::where('title','like','%'.$keyword.'%' )
                                    ->paginate($per_page);

            $solutions = Solution::all();
            $industries = Industry::all();
            return view(
                'frontend.blogs.blogs', [
                    // 'heading' => 'Latest Blogs',
                    'blogs' => $blogs,
                    'solutions' => $solutions,
                    'industries' => $industries,
                    'request' => $request
                ]);
	    }


        $blogs = Blog::all();
        $solutions = Solution::all();
        $industries = Industry::all();
        return view(
            'frontend.blogs.blogs', [
                // 'heading' => 'Latest Blogs',
                'blogs' => $blogs,
                'solutions' => $solutions,
                'industries' => $industries,
                'request' => $request
            ]);
    }

    public function blogs_all()
    {
        return view(
            'frontend.blogs.blogs_all'
        );
    }


    //Show Create
    public function blogs_create_backend()
    {
        $blogs = Blog::all();
        $solutions = Solution::all();
        $industries = Industry::all();
        return View('backend.blogs.create',compact('industries','solutions','blogs'));
            // return View::make('backend.blogs.create')->with(compact('industries','solutions','blogs'));
        // return view('backend.blogs.create',[
        //     'industries' => Industry::all(),
        //     'solutions' => Solution::all()
        // ]);
    }


    //Store Blog Data
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => ['required', Rule::unique('blogs', 'title')],
            // 'header1' => 'required',
            // 'header2' => 'required',
            'tags' => 'required',
            'description' => 'required',
            'industries' => 'required',
            'solutions' => 'required'
        ]);


        if ($request->hasFile('logo')) {
            $image = $request->logo;
            $imageName = time() . '.' . $image->extension();
            $image->storeAs('Blog', $imageName);
        }
        $data = new Blog();

        $data->title = $request->title;
        $data->description = $request->description;
        $data->header1 = $request->header1;
        // $data->header2 = $request->header2;
        $data->industries = $request->industries;
        $data->solutions = $request->solutions;
        $data->logo = $imageName;
        $data->tags = $request->tags;
        $data->save();


        return redirect()->route('blogs');
    }

    //Update Blog Data
    public function update(Request $request, Blog $blog)
    {
        $formFields = $request->validate([
            'title' => ['required' ],
            // 'header1' => 'required',
            // 'header2' => 'required',
            'tags' => 'required',
            'description' => 'required',
            'industries' => 'required',
            'solutions' => 'required'
        ]);


        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $blog->update($formFields);

        return redirect()->route('single',['blog' => $blog->id]);
        // return back()->with('message', 'Listing updated succesfully!');
        // ->with('message', 'Listing updated succesfully!');
    }


    // Delete Blog
    public function destroy(Blog $blog){
        $blog->delete();
        return back();
    }


    //Show Single Blog
    public function show($id)
    {
        $blog = Blog::find($id);
        return view('frontend/blogs/show', [
            'blog' => $blog
        ]);
    }

    public function storyShow($id)
    {
        $story = DB::table('clients')->where('id',$id)->get();
        return view('frontend/blogs/client', [
            'story' => $story
        ]);
    }
}
