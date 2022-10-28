<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Order;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
  public function index(){
   $data = DB::table('widget1')->get();
   return view('backend.widget1.widget1_view',['data' => $data]);
  }
  public function add(){
    $data = Client::all();
    $data1 = DB::table('widget1')->get();
    return view('backend.widget1.widget1_create',['data' => $data,'data1' => $data1]);
  }
  public function addWidget(Request $request){
    $id = $request->id;
    $data = Client::where('title',$request->title)->get();
    $data1 = DB::table('widget1')->where('id',$id)->get();
    if(!$data1 == null )
      DB::table('widget1')->where('id',$id)->update([
        'title' => $data[0]->title,
        'image' => $data[0]->image,
        'description' => $data[0]->description,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
      ]);
    else
    DB::table('widget1')->insert([
      'id' => $id,
      'title' => $data[0]->title,
      'image' => $data[0]->image,
      'description' => $data[0]->description,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
    ]);

    return redirect()->back();
  }
  public function clientT(){
  return view('backend.client_experience.create');
  }
  public function clientE(Request $request){
    $image = $request->image; 
    $imageName = time() . '.' . $image->extension(); 
    $image->storeAs('Client', $imageName);
    DB::table('clients')->insert([
      'title' => $request->title,
      'image' => $imageName,
      'description' => $request->description,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
    ]);
   return redirect()->route('admin');
  }
  public function dashboard(){
    return view('frontend.client.dashboard');
  }
  public function track(){
    $orders = Order::with('orderDetails')->where('user_id',Auth::user()->id)->get();
    return view('frontend.client.track',compact('orders'));
  }
}
