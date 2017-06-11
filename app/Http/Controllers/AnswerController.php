<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer;
use App\Question;
use App\Exam;
use App\User;
use Auth;

class AnswerController extends Controller
{
    public function index()
    {
        $exams = Exam::where('user_id',Auth::user()->id)->get();
        $user = User::find(Auth::user()->id);
        return view('result',compact('exams','user'));
    }
    public function ans(Exam $exam, Question $question, Request $Request)
    {
        if($question->curr_ans== $Request->q[0]){
            $value = session()->pull('p', 'default')+ 1;
            session(['p' => $value]);
        }
        $id = $question->id+ 1;
        if($question->id== $exam->total_question){
            $answer = new Answer;
            $answer->exam_id = $exam->id;
            $answer->user_id = Auth::user()->id;
            $answer->point = $value;
            $answer->save();
            return redirect('result');
        }else{
            return redirect('exams/'.$exam->id.'/questions/'.$id.'');
        }
    }
    public function store(Exam $exam, Request $Request)
    {
        $questions = Question::where('exam_id',$exam->id)->get();

        $answer = new Answer;
        $answer->user_id = Auth::user()->id;
        $answer->exam_id = $exam->id;
        $answer->point = $p;
        $answer->save();
    }
    public function skip(Exam $exam, Question $question)
    {
        $i = session()->pull('i', 'default')+ 1;
        session(['q[$i]' => $question->id]);
        dd($i);
        $id = $question->id+ 1;
        return redirect('exams/'.$exam->id.'/questions/'.$id.'');
    }
}
