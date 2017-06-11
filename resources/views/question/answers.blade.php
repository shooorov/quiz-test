@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="text-left col-md-4">
                    </div>
                    <div class="text-center col-md-4">
                        <b><i>{{$exam->name}}</i></b>
                    </div>
                    <div class="text-right">
                        <a href="{{ url('exams')}}" class="btn btn-sm btn-primary">Exam Topics</a>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="panel-body col-md-12 col-md-offset-0">
                        <form class="form-horizontal" action="{{ url('/exams/'.$exam->id.'/questions/store/answer/'.$question->id.'/') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Question {{ $question->id }}</label>
                                <div class="col-sm-10">
                                    <p class="form-control-static">{{ $question->question }}</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">
                                    <div class="col-sm-8">
                                        {{ "A" }}
                                    </div>
                                    <div class="">
                                        <input type="radio" name="q[]" value="{{ $question->curr_ans }}">
                                    </div>
                                </label>
                                <div class="col-sm-10 form-control-static">
                                        {{ $question->curr_ans }}
                                </div>
                                <br>
                                <label class="col-sm-2 control-label">
                                    <div class="col-sm-8">
                                        {{ "B" }}
                                    </div>
                                    <div class="">
                                        <input type="radio" name="q[]" value="{{ $question->wrong_ans1 }}">
                                    </div>
                                </label>
                                <div class="col-sm-10 form-control-static">
                                        {{ $question->wrong_ans1 }}
                                </div>
                                <br>
                                <label class="col-sm-2 control-label">
                                    <div class="col-sm-8">
                                        {{ "C" }}
                                    </div>
                                    <div class="">
                                        <input type="radio" name="q[]" value="{{ $question->wrong_ans2 }}">
                                    </div>
                                </label>
                                <div class="col-sm-10 form-control-static">
                                        {{ $question->wrong_ans2 }}
                                </div>
                                <br>
                                <label class="col-sm-2 control-label">
                                    <div class="col-sm-8">
                                        {{ "D" }}
                                    </div>
                                    <div class="">
                                        <input type="radio" name="q[]" value="{{ $question->wrong_ans3 }}">
                                    </div>
                                </label>
                                <div class="col-sm-10 form-control-static">
                                        {{ $question->wrong_ans3 }}
                                </div>
                                <br>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label pull-right">
                                    <button type="submit" class="btn btn-sm btn-success">Submit Answer {{$question->id}}</button>
                                </label>
                                <label class="col-sm-2 control-label">
                                    <a href="{{ url('/exams/'.$exam->id.'/questions/skip/'.$question->id.'/') }}"class="btn btn-sm btn-success">Skip Q No.{{$question->id}}</a>
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
