@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="text-left col-md-4">
                        <a href="all-question" class="btn btn-sm btn-primary">All Questions</a>
                    </div>
                    <div class="text-center col-md-4">
                        <b><i>Question Input Details</i></b>
                    </div>
                    <div class="text-right">
                        <a href="#" class="btn btn-sm btn-primary">Question List</a>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="panel-body col-md-12">
                        <form class="form-horizontal" action="{{url('question/store')}}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="exam_id" value="{{$id}}">
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Question</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="question" placeholder="Enter The Question">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Currect Answer</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="curr_ans" placeholder="Enter Currect Answer">
                                </div>
                                <label style="margin-top:5px;" class="col-sm-4 control-label">Wrong Answer 1</label>
                                <div style="margin-top:5px;" class="col-sm-8">
                                    <input type="text" class="form-control" name="wrong_ans1" placeholder="Enter Wrong Answer 1">
                                </div>
                                <label style="margin-top:5px;" class="col-sm-4 control-label">Wrong Answer 2</label>
                                <div style="margin-top:5px;" class="col-sm-8">
                                    <input type="text" class="form-control" name="wrong_ans2" placeholder="Enter Wrong Answer 2">
                                </div>
                                <label style="margin-top:5px;" class="col-sm-4 control-label">Wrong Answer 3</label>
                                <div style="margin-top:5px;" class="col-sm-8">
                                    <input type="text" class="form-control" name="wrong_ans3" placeholder="Enter Wrong Answer 3">
                                </div>
                            </div>
                            <div class="form-group">
                                <div style="margin-top:15px;" class="text-right col-sm-offset-4 col-sm-8">
                                    <button type="submit" class="btn btn-sm btn-success text-right">Save</button>
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
