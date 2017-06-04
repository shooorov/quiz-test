@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="text-left col-md-4">
                        <a href="#" class="btn btn-sm btn-primary">Link</a>
                    </div>
                    <div class="text-center col-md-4">
                        <b><i>Exam Details</i></b>
                    </div>
                    <div class="text-right">
                        <a href="#" class="btn btn-sm btn-primary">Link</a>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="panel-body col-md-12 col-md-offset-0">
                        <form class="form-horizontal" action="{{ url('exam/store')}}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <div class="">
                                    <label class="col-md-3 control-label">Exam Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name" placeholder="Enter Exam Name">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Total Question</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="total_question" placeholder="How many Question">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-9 col-md-offset-3">
                                    <button type="submit" class="btn btn-sm btn-success">Save</button>
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
