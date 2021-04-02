<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Category;

class CategoryController extends Controller
{
    //
    
    public function index(){
        $heading = "Category";
        $all_data = Category::orderBy('id', 'DESC')->get();
        return view('admin.category.list',compact(['heading','all_data']));
    }

    public function add($id = null){
        if($id != null){
            $heading = "Update Category";
            $form_data = Category::where('id',$id)->firstOrFail();
        }else{
            $heading = "Add Category";
            $form_data = NULL;
        }
        return view('admin.category.add',compact(['heading','form_data','id']));
    }
    public function addPost(Request $request){
        $request->validate([
            'category_name'=>'required',
            'status'=>'required',
        ]);
        $form_id = $request->form_id;
        Category::updateOrCreate(['id' => $form_id],[
            'name'=>$request->category_name,
            'status'=>$request->status
        ]);
        $message = "Category Updated";
        return redirect('/admin/category')->with('success',$message);
    }
    public function delete($id){
        Category::where('id',$id)->delete();
        return redirect('/admin/category')->with('success',"Category Deleted");
    }
}
