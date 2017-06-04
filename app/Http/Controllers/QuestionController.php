<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Exam;

class QuestionController extends Controller
{
    public function index($id)
    {
        $questions = Question::all();
        $exam = Exam::find($id);
        return view('question.questions',compact('questions','exam'));
    }
    public function create($id)
    {
        return view('question.create-question',compact('id'));
    }
    public function show($id)
    {
        $question = Question::find($id);
        return view('question.edit-question',compact('question'));
    }
    public function delete($id)
    {
        $question = Question::find($id)->delete();
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
        $question->save();
        return redirect('exams');
    }
}
