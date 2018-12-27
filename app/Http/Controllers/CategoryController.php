<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests\AddCateRequest;
use App\Http\Requests\EditCateRequest;

class CategoryController extends Controller
{
  public function getCate(){
      $categories = Category::all();
      return view('backend.category',compact('categories'));
  }



  public function postCate(AddCateRequest $request){
    $category = new Category();
    $category->cate_name = $request->name;
    $category->cate_slug = str_slug($request->name);
    $category->save();

    return back()->with('data','Bạn đã thêm danh mục thành công');
}


  public function editCate($id){
      $cate = Category::findOrfail($id);
    return view('backend.editcategory', compact('cate'));
}

public function posteditCate(EditCateRequest $request ,$id){
    $category = Category::find($id);
    $category->cate_name = $request->name;
    $category->cate_slug = str_slug($request->name);
    $category->save();
    return redirect()->route('category')->with('edit','Bạn đã sửa sản phẩm thành công');
}

public function deleteCate($id){
    $delCate= Category::destroy($id);
    return back()->with('delete','Bạn đã xoá sản phẩm thành công');
}

  
}
