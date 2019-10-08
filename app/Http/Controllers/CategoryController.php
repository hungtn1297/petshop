<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function getCategory(){
        $category = Category::all();
        return view('admin/CategoryList')->with(compact('category'));
    }

    public function addCategory(Request $request){
        $id = $request->id;      
        if(isset($id)){ //Update 
            $cate = Category::find($id);
        }else{ //Insert
            $cate = new Category;
        }
        $cate->name = $request->name;
        $cate->save();
        return redirect()->action('CategoryController@getCategory');
    }

    public function deleteCategory(Request $request){
        $id = $request->id;
        $cate = Category::find($id)->delete();
        return redirect()->action('CategoryController@getCategory');
    }
}
