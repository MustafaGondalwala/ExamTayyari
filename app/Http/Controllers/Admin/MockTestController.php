<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exam;
use App\Ebook;
use App\Category;
use App\MockTest;



class MockTestController extends Controller
{
    public function index($id = null){
        $heading = "Mock Test";
        $all_data = MockTest::orderBy('date')->get();
        return view('admin.mocktest.list', compact('heading','all_data'));
    }

    public function add($id = null){
        $heading = ($id == null ? "Add" : "Update")." Mock Test";
        $categories = Category::where('status',1)->get();
        $exam = Exam::where('status',1)->get();
        $form_data = null;
        if($id != null){
            $form_data = Ebook::where('id',$id)->first();
        }
        
        return view('admin.mocktest.add', compact('heading', 'exam', 'categories', 'id', 'form_data'));
    }
    public function addPost(Request $request){
        $request->validate([
            'exam_id'=>'required',
            'date'=>'required',
            'start_time'=>'required',
            'end_time'=>'required',
            'status'=>'required'
        ]);

        $form_id = $request->form_id;
        MockTest::updateOrCreate(['id' => $form_id],[
            'status'=>$request->status,
            'exam_id'=>$request->exam_id,
            'date'=>$request->date,
            'start_time'=>$request->start_time,
            'end_time'=>$request->end_time,
        ]);
        $message = "Mock Test Updated";
        return redirect('/admin/mock-test')->with('success',$message);
    }
    public function deleteExam($id){
        Exam::where('id',$id)->delete();
        return redirect('/admin/exam')->with('success',"Exam Deleted");
    }
}
