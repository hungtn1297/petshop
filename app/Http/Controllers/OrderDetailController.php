<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OrderDetail;

class OrderDetailController extends Controller
{
    public function getOrderDetailByOrderId(Request $request){
        $orderid = $request->id;
        $order_detail = OrderDetail::where('orderid',$orderid)->get();
        
        return view('admin/OrderDetail')->with(compact('order_detail'));
    }
}
