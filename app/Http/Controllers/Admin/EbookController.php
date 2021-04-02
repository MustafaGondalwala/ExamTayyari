<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exam;
use App\Ebook;
use App\Category;


class EbookController extends Controller
{
    public function index($id = null){
        $heading = "Ebook";
        $all_data = Ebook::all();
        return view('admin.ebook.list', compact('heading','all_data'));
    }

    public function add($id = null){
        $heading = $id == null ? "Add Ebook" : "Update Ebook";
        $categories = Category::where('status',1)->get();
        $form_data = null;
        if($id != null){
            $form_data = Ebook::where('id',$id)->first();
        }
        
        return view('admin.ebook.add', compact('heading', 'categories','id','form_data'));
    }
    public function addPost(Request $request){
        $request->validate([
            'name'=>'required',
            'year'=>'required',
            'category_id'=>'required',
            'status'=>'required'
        ]);


        if($request->attachment){
            $fileUrl = $this->fileUpload($request->attachment);
        }
        $form_id = $request->form_id;
        Ebook::updateOrCreate(['id' => $form_id],[
            'name'=>$request->name,
            'status'=>$request->status,
            'category_id'=>$request->category_id,
            'year'=>$request->year,
            'link'=> $request->link == '' ? $fileUrl : $request->link
        ]);
        $message = "Ebook Updated";
        return redirect('/admin/ebook')->with('success',$message);
    }
    public function deleteExam($id){
        Exam::where('id',$id)->delete();
        return redirect('/admin/exam')->with('success',"Exam Deleted");
    }
}
