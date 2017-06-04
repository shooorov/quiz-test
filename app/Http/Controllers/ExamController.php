<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exam;
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
        return redirect('exams');
    }
    public function edit(Exam $exam)
    {
    //    $exam = Exam::find($exam);
        return view('exam.show',compact('exam'));
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
