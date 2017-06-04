@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="text-left col-md-4">
                        <a href="#" class="btn btn-sm btn-primary">Running Exam List</a>
                    </div>
                    <div class="text-center col-md-4">
                        <b><i>Exam Topics</i></b>
                    </div>
                    <div class="text-right">
                        <a href="{{ url('exam/create') }}" class="btn btn-sm btn-primary">Add New Exam</a>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="panel-body col-md-12 col-md-offset-0">
                        <form class="form-horizontal" action="" method="">
                            @foreach ($exams as $exam)
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Exam {{ $exam->id }}</label>
                                <div class="col-sm-2">
                                    <a href="exams/{{ $exam->id }}/questions/"><p class="form-control-static">{{ $exam->name }}</p></a>
                                </div>
                                <a href="exam/{{ $exam->id }}/delete/" class="btn btn-sm btn-danger pull-right">Delete</a>
                                <a style="margin-right:5px;" href="exam/{{ $exam->id }}/edit" class="btn btn-sm btn-success pull-right">Edit</a>
                            </div>
                            @endforeach
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
