<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exam;
use App\Ebook;
use App\Category;
use App\MockTest;
use App\PreviousQuestionPaper;



class PreviousQuestionPaperController extends Controller
{
    public function index($id = null){
        $heading = "Previous QuestPaper";
        $all_data = PreviousQuestionPaper::orderBy('year')->get();
        return view('admin.previous-question.list', compact('heading','all_data'));
    }

    public function add($id = null){
        $heading = ($id == null ? "Add" : "Update")." Previous Question Paper";
        $categories = Category::where('status',1)->get();
        $exam = Exam::where('status',1)->get();
        $form_data = null;
        if($id != null){
            $form_data = PreviousQuestionPaper::where('id',$id)->first();
        }
        
        return view('admin.previous-question.add', compact('heading', 'exam', 'categories', 'id', 'form_data'));
    }
    public function addPost(Request $request){

        
        $form_id = $request->form_id;
        if($form_id == null){
            $request->validate([
                'status'=>'required',
                'name'=>'required',
                'year'=>'required',
                'category_id'=>'required',
                'attachment'=>'required',
            ]);
        }else{
            $request->validate([
                'status'=>'required',
                'name'=>'required',
                'year'=>'required',
                'category_id'=>'required',
            ]);
        }
        
        $fileUrl = $request->previousQuestionLink;
        if($request->attachment){
            $fileUrl = $this->fileUpload($request->attachment);
        }

        PreviousQuestionPaper::updateOrCreate(['id' => $form_id],[
            'status'=>$request->status,
            'name'=>$request->name,
            'year'=>$request->year,
            'category_id'=>$request->category_id,
            'link'=>$fileUrl,
        ]);
        $message = "Previous Question Paper Updated";
        return redirect('/admin/previous-question-paper')->with('success',$message);
    }
    public function deleteExam($id){
        Exam::where('id',$id)->delete();
        return redirect('/admin/exam')->with('success',"Exam Deleted");
    }
}
