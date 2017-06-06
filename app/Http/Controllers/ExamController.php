<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exam;
use App\Question;
use Auth;

class ExamController extends Controller
{
    public function index()
    {
        $exams = Exam::where('user_id',Auth::user()->id)->get();
        return view('exam.exams',compact('exams'));
    }
    public function create(){
        return view('exam.create-exam');
    }
    public function delete($exam)
    {
        Exam::find($exam)->delete();
        Question::where('user_id',$exam)->delete();
        return redirect('exams');
    }
    public function edit(Exam $exam)
    {
    //    $exam = Exam::find($exam);
        return view('exam.edit',compact('exam'));
    }
    public function published(Exam $exam)
    {
        $exam->published = 1;
        $exam->save();
        return redirect('exams');
    }
    public function running()
    {
        $exams = Exam::where('published',1)->get();
        return view('exam.running-exams',compact('exams'));
    }
    public function update(Exam $exam, Request $Request)
    {
        // $exam = Exam::find($Request->exam);

        $exam->name = $Request->name;
        $exam->total_question = $Request->total_question;
        $exam->published = 0;
        $exam->save();
        return redirect('exams');
    }
    public function store(Request $Request)
    {
        $exam = new Exam;

        $exam->user_id = Auth::user()->id;
        $exam->name = $Request->name;
        $exam->total_question = $Request->total_question;
        $exam->published = 0;
        $exam->save();
        return redirect('exams');
    }
}
