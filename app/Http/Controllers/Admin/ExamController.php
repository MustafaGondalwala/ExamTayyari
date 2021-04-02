<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exam;
use App\Category;


class ExamController extends Controller
{
    public function index($id = null){
        $heading = "Exam";
        $all_data = Exam::all();
        return view('admin.exam.list', compact('heading','all_data'));
    }

    public function add($id = null){
        $heading = $id == null ? "Add Exam" : "Update Exam";
        $categories = Category::where('status',1)->get();
        $form_data = null;
        if($id != null){
            $form_data = Exam::where('id',$id)->first();
        }
        
        return view('admin.exam.add', compact('heading', 'categories','id','form_data'));
    }
    public function addPost(Request $request){
        $request->validate([
            'exam_name'=>'required',
            'category_id'=>'required',
            'exam_date'=>'required',
            'status'=>'required'
        ]);

        $form_id = $request->form_id;


        Exam::updateOrCreate(['id' => $form_id],[
            'name'=>$request->exam_name,
            'status'=>$request->status,
            'category_id'=>$request->category_id,
            'date'=>$request->exam_date,
        ]);
        $message = "Exam Updated";
        return redirect('/admin/exam')->with('success',$message);
    }
    public function deleteExam($id){
        Exam::where('id',$id)->delete();
        return redirect('/admin/exam')->with('success',"Exam Deleted");
    }
}
