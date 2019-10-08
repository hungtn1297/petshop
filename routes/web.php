<?php

use Illuminate\Http\Request; 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'MainController@getProduct');

Route::get('login', function(){
    return view('login');
});
Route::post('login', 'MainController@checkLogin');
Route::get('addtocart/{id}', 'MainController@addToCart');
Route::get('cart', function(){
   return view('cart'); 
});
Route::post('payment', 'MainController@payment');

Route::prefix('/admin')->group(function(){
    Route::get('productlist','ProductController@getProduct');
    Route::get('productadd', function(){
        $category = App\Category::all();
        return view('admin/ProductAdd')->with(compact('category'));
    });
    Route::post('productadd', 'ProductController@addProduct');
    Route::delete('productdelete','ProductController@deleteProduct');
    Route::get('productedit', function(Request $request){
        $product = App\Product::find($request->id);
        $category = App\Category::all();
        return view('admin/ProductEdit')->with(compact('product','category'));
    });

    Route::get('categorylist','CategoryController@getCategory');
    Route::get('categoryadd', function(){return view('admin/CategoryAdd');});
    Route::post('categoryadd', 'CategoryController@addCategory');
    Route::delete('categorydelete','CategoryController@deleteCategory');
    Route::get('categoryedit', function(Request $request){
        $category = App\Category::find($request->id);
        return view('admin/CategoryEdit')->with(compact('category'));
    });

    Route::get('orderlist', 'OrderController@getOrder');
    Route::post('orderchangestatus', 'OrderController@changeStatus');
    Route::get('orderdetail', 'OrderDetailController@getOrderDetailByOrderId');
});
