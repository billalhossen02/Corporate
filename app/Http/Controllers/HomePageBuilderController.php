<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Client;
use App\Models\Success;
use Illuminate\Http\Request;
use App\Models\HomePageBuilder;
use Illuminate\Support\Facades\DB;

class HomePageBuilderController extends Controller
{
    public function home()
    {
        $data = Client::all();
        $data1 = DB::table('widget1')->get();
        $blogs = Blog::all();
        $successes = Success::all();
        return view('backend.pagebuilder.home',compact('data','data1','blogs','successes'));
    }

    public function addPageHome(Request $request){

        $data = $request->all();

        $dat = new HomePageBuilder();

        $banner1 = $data['banner1'];
        $banner1Name = time() . '.' . $banner1->extension();
        $banner1->storeAs('Banner/Banner1', $banner1Name);
        $dat->branner1 = $banner1Name;

        $banner2 = $data['banner2'];
        $banner2Name = time() . '.' . $banner2->extension();
        $banner2->storeAs('Banner/Banner2', $banner2Name);
        $dat->branner2 = $banner2Name;

        $banner3 = $data['banner3'];
        $banner3Name = time() . '.' . $banner3->extension();
        $banner3->storeAs('Banner/Banner3', $banner3Name);
        $dat->branner3 = $banner3Name;

        $story1 = Client::where('title', $request->story1)->first();
        $dat->story1_id = $story1->id;

        $story2 = Client::where('title', $request->story2)->first();
        $dat->story2_id = $story2->id;

        $story3 = Client::where('title', $request->story3)->first();
        $dat->story3_id = $story3->id;

        $story4 = Client::where('title', $request->story4)->first();
        $dat->story4_id = $story4->id;

        $story5 = Client::where('title', $request->story5)->first();
        $dat->story5_id = $story5->id;

        $solution1 = Blog::where('title', $request->solution1)->first();
        $dat->solution1_id = $solution1->id;

        $solution2 = Blog::where('title', $request->solution2)->first();
        $dat->solution2_id = $solution2->id;

        $solution3 = Blog::where('title', $request->solution3)->first();
        $dat->solution3_id = $solution3->id;

        $solution4 = Blog::where('title', $request->solution4)->first();
        $dat->solution4_id = $solution4->id;

        $success1 = Success::where('title', $request->success1)->first();
        $dat->success1_id = $success1->id;

        $success2 = Success::where('title', $request->success2)->first();
        $dat->success2_id = $success2->id;

        $success3 = Success::where('title', $request->success3)->first();
        $dat->success3_id = $success3->id;

        $dat->save();

        return redirect()->route('allpage');

        }
        public function delete($id){
            HomePageBuilder::find($id)->delete();
            return back();
        }
}
