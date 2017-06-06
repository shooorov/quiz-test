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
                        <form class="form-horizontal" action="{{ url('/exams/'.$exam->id.'/questions/store') }}" method="post">
                            {{ csrf_field() }}
                            @foreach ($questions as $question)
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
                                        <input type="checkbox" name="q[{{ $id }}][0]" value="{{ $question->curr_ans }}">
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
                                        <input type="checkbox" name="q[{{ $id }}][1]" value="{{ $question->wrong_ans1 }}">
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
                                        <input type="checkbox" name="q[{{ $id }}][2]" value="{{ $question->wrong_ans2 }}">
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
                                        <input type="checkbox" name="q[{{ $id++ }}][3]" value="{{ $question->wrong_ans3 }}">
                                    </div>
                                </label>
                                <div class="col-sm-10 form-control-static">
                                        {{ $question->wrong_ans3 }}
                                </div>
                                <br>
                            </div>
                            @endforeach
                            <div class="form-group">
                                <label class="col-sm-2 control-label">
                                    <button type="submit" class="btn btn-sm btn-success">Submit Ans</button>
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
