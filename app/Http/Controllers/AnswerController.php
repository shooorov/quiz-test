<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer;
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
    public function store(Exam $exam, Request $Request)
    {
        $questions
        for($id= 0; $id < $exam->total_question; $id++){
            $f= 0;
            $p= 0;
            for($jd= 0; $jd< 4; $jd++){
                if($Request->q[$id][$jd]){
                    $f++;
                    if($f< 2 && ){
                        $p++;
                    }else {
                        $p--;
                    }
                }
            }
        }
    }
}
