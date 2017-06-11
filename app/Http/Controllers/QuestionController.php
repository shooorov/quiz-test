<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Exam;
use Auth;

class QuestionController extends Controller
{
    public function index($exam)
    {
        $questions = Question::where('exam_id',$exam)->get();
        $exam = Exam::find($exam);
        $id= 0;
        foreach ($questions as $question) {
            $id++;
        }
        $published = 0;
        if($id == $exam->total_question){
            $published = 1;
        }
        $id = 0;
        if($exam->user_id== Auth::user()->id){
            return view('question.questions',compact('questions','exam','published','id'));
        }else {
            session(['p' => 0]);
            session(['i' => 0]);
            return redirect('exams/'.$exam->id.'/questions/1');
        }
    }
    public function question(Exam $exam, Question $question)
    {
        return view('question.answers',compact('exam','question'));
    }
    public function create($exam)
    {
        return view('question.create-question',compact('exam'));
    }
    public function edit(Question $question)
    {
//        $question = Question::find($question);
        $exam = Exam::find($question->exam_id);
        $exam->published = 0;
        $exam->save();
        return view('question.edit-question',compact('question'));
    }
    public function delete($exam)
    {
        $question = Question::find($exam)->delete();
        return redirect('question.questions');
    }
    public function update(Question $question, Request $Request)
    {
        $exam = $question->exam_id;
        // $question = Question::find($Request->id);
        $question->question = $Request->question_text;
        $question->curr_ans = $Request->curr_ans;
        $question->wrong_ans1 = $Request->wrong_ans1;
        $question->wrong_ans2 = $Request->wrong_ans2;
        $question->wrong_ans3 = $Request->wrong_ans3;
        $question->save();
        return redirect('exams/'.$exam.'/questions');
    }
    public function store(Request $Request)
    {
        $question = new Question;

        $question->exam_id = $Request->exam_id;
        $question->question = $Request->question;
        $question->curr_ans = $Request->curr_ans;
        $question->wrong_ans1 = $Request->wrong_ans1;
        $question->wrong_ans2 = $Request->wrong_ans2;
        $question->wrong_ans3 = $Request->wrong_ans3;

        $exam = $question->exam_id;
        $question->save();


        return redirect('exams/'.$exam.'/questions');
    }
}
