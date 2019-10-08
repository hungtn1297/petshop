<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    public function getOrder(){
        $orders = Order::all();
        return view('admin/OrderList')->with(compact('orders'));
    }

    public function changeStatus(Request $request){
        $id = $request->id;
        $order = Order::find($id);
        if($order->status === 0){
            $order->status = 1;
        }elseif ($order->status === 1){
            $order->status = 0;
        }
        // dd($order);
        $order->save();
        return redirect()->action('OrderController@getOrder');
    }
}
