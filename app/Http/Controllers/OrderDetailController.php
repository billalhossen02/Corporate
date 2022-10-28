<?php

namespace App\Http\Controllers;

use PDO;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
   public function index(){
    $products = Order::with('orderDetails')->orderBy('id','desc')->paginate(5);
    return view('backend.order_details.view',compact('products'));
   }

   public function update(Request $request, $id){


    if($request->payment_status){
    OrderDetail::find($id)->update([
        'payment_status' => $request->payment_status
    ]);
    }
    if($request->delivery_status){
    OrderDetail::find($id)->update([
        'delivery_status' => $request->delivery_status
    ]);
    }
    return back();

   }
}
