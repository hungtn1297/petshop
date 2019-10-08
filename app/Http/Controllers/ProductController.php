<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductController extends Controller
{
    public function getProduct(Request $request){
        $products = Product::all();
        // dd($products);
        return view('admin/ProductList')->with(compact('products'));
    }

    public function addProduct(Request $request){
        $image = $request->image;
        $id = $request->id;
        if(isset($id)){ //Update 
            $product = Product::find($id);
        }else{//Insert
            $product = new Product; 
        }
        $product->name = $request->name;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->category_id = $request->category_id;
        $product->description = $request->description;
        if(isset($image)){
            $imageLink = 'image/'.$image->getClientOriginalName();
            $image->move('admin/image',$image->getClientOriginalName());
            $product->image = $imageLink;
        }
        $product->save();
        return redirect()->action('ProductController@getProduct');     
    }

    public function deleteProduct(Request $request){
        $product = Product::find($request->id);
        $product->delete();
        return redirect()->action('ProductController@getProduct');
    }
}
