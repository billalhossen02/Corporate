<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function addOrder(Request $request){
        $cartItems = \Cart::getContent();
        if($request->work_order){
            $file = $request->work_order;
            $workOrder = time() . '.' . $file->extension();
            $file->storeAs('Work_Order', $workOrder);
        }
        else{
            $workOrder = 0;
        }
        if($request->payment_slip){
            $file = $request->payment_slip;
            $paymentSlip = time() . '.' . $file->extension();
            $file->storeAs('Payment_Slip', $paymentSlip);
        }
        else{
            $paymentSlip = 0;
        }
        foreach ($cartItems as $value) {
              $order = Order::create([
                'user_id' => Auth::user()->id,
                'product_id' => $value->id,
                'user_name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'address' => $request->address,
                'city' => $request->city,
                'state'=> $request->state,
                'zip' => $request->zip,
                'country' => $request->country,
                'work_order' => $workOrder,
                'payment_slip' => $paymentSlip,
            ]);

            if($order->payment_slip != 0){
                $payment_status = 'Checking';
            }
            else{
                $payment_status = 'Unpaid';
            }

          OrderDetail::create([
             'order_id' => $order->id,
             'product_name' => $value->name,
             'unit_price' => $value->price,
             'quantity' => $value->quantity,
             'total_amount' => $value->quantity * $value->price,
             'payment_status' => $payment_status,
             'delivery_status' => "Processing"
        ]);

        }
        \Cart::clear();
        return redirect()->route('home');
   }

   public function paymentUpdate(Request $request, $id){

    $file = $request->payment_slip;
    $paymentSlip = time() . '.' . $file->extension();
    $file->storeAs('Payment_Slip', $paymentSlip);

    Order::find($id)->update([
        'payment_slip' => $paymentSlip
    ]);

    return redirect()->back()->with('success','Payment Slip Upload Successful');
    
    }
}
