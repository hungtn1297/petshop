<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Users;
use App\Order;
use App\OrderDetail;
use Carbon\Carbon;
use DB;

class MainController extends Controller
{
    public function getProduct(Request $request){
        // $request->session()->flush();
        $products = Product::all()->take(5);
        $category = Category::all();
        $request->session()->put('category',$category);
        return view('index')->with(compact('products'));
    }

    public function checkLogin(Request $request){
        $username = $request->username;
        $password = $request->password;
        $user = Users::where('username', $username)
                ->where('password',$password)
                ->get();
        if( $user->count() > 0 ){
            return redirect()->action('ProductController@getProduct');
        }else{
            $error = "Wrong username or password";
            return view('login')->with(compact('error'));
        }
    }

    public function addToCart(Request $request){
        $flag = 0;
        //  $request->session()->flush();
        $product = Product::find($request->id);
        if($request->session()->exists('cart')){            // Nếu trong session đã có cart
            $cart = $request->session()->get('cart'); 
            foreach ($cart as $items) {                     //Quét hết sản phẩm trong mảng cart
                
                if($items->id == $request->id){            //Nếu có id sản phẩm trùng
                    $items->quantity += 1;                  //Tăng số lượng lên 1;
                    $flag = 1;                              //Đánh cờ đã add sản phẩm
                    break;
                }
            }
            if($flag === 0){                                //Nếu hết vòng lặp vẫn chưa add sản phẩm
                $product->quantity = 1;                     //Set số lượng sản phẩm bằng 1
                array_push($cart, $product);                //Add vào giỏ hàng
                $request->session()->put('cart',$cart);
            }
        }else{                                              //Nếu trong session chưa có cart
            $cart = array();                                //Khởi tạo cart
            $product = Product::find($request->id);         //Lấy sản phẩm
            $product->quantity = 1;                         //Set số lượng bằng 1
            array_push($cart, $product);                    //Add vào cart
            $request->session()->put('cart',$cart);         //Lưu cart vào session
            // dd($request->session()->get('cart'));        
        }
        //  dd($request->session()->get('cart'));
        return view('cart');
    }

    public function payment(Request $request){
        $payment_result = "Payment fail";
        
        try{
            DB::beginTransaction();
            $order = new Order;
            $order->customername = $request->name;
            $order->phone = $request->phone;
            $order->address = $request->address;
            $order->email = $request->email;
            $order->status = 0;
            $order->orderdate = Carbon::now()->toDateString();
            $order->save();
            $cart = $request->session()->get('cart');
            foreach ($cart as $item) {
                $orderdetail = new OrderDetail;
                $orderdetail->orderid = $order->id;
                $orderdetail->productid = $item->id;
                $orderdetail->quantity = $item->quantity;
                $orderdetail->productPrice = $item->price;
                $orderdetail->save();
            }
            DB::commit();
            $payment_result = "Payment success";
            $request->session()->pull('cart');
        }catch(Exception $e){
            DB::rollBack();
            throw new Exception($e->getMessage());
        }
        return view('paymentsuccess')->with(compact('payment_result'));
    }
}
