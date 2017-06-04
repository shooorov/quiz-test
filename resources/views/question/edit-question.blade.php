@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center"><b><i>Update Question {{ $question->id }}</i></b></div>
                <div class="panel-body">
                    <div class="panel-body col-md-12 col-md-offset-0">
                        <form class="form-horizontal" action="{{url('question/'.$question->id.'/update')}}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $question->id }}">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Question {{ $question->id }}</label>
                                <div class="col-sm-10">
                                    <input type="text" name="question_text" class="form-control" value="{{ $question->question }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label style="margin-top:5px;" class="col-sm-2 control-label">A</label>
                                <div style="margin-top:5px;" class="col-sm-10">
                                    <div class="">
                                        <input type="text" name="curr_ans" class="form-control" value="{{ $question->curr_ans }}">
                                    </div>
                                </div>
                                <br>
                                <label style="margin-top:5px;" class="col-sm-2 control-label">B</label>
                                <div style="margin-top:5px;" class="col-sm-10">
                                    <div class="">
                                        <input type="text" name="wrong_ans1" class="form-control" value="{{ $question->wrong_ans1 }}">
                                    </div>
                                </div>
                                <br>
                                <label style="margin-top:5px;" class="col-sm-2 control-label">C</label>
                                <div style="margin-top:5px;" class="col-sm-10">
                                    <div class="">
                                        <input type="text" name="wrong_ans2" class="form-control" value="{{ $question->wrong_ans2 }}">
                                    </div>
                                </div>
                                <br>
                                <label style="margin-top:5px;" class="col-sm-2 control-label">D</label>
                                <div style="margin-top:5px;" class="col-sm-10">
                                    <div class="">
                                        <input type="text" name="wrong_ans3" class="form-control" value="{{ $question->wrong_ans3 }}">
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="form-group">
                                <div style="margin-top:15px;" class="col-sm-12 text-right">
                                    <button type="submit" class="btn btn-sm btn-success">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
