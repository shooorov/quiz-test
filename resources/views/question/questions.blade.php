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
                        <b><i>{{$exam->name}}</i></b>
                    </div>
                    <div class="text-right">
                        <a href="{{url('exam/'.$exam->id.'/question/create')}}/" class="btn btn-sm btn-primary">Add Question</a>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="panel-body col-md-12 col-md-offset-0">
                        <form class="form-horizontal" action="" method="">
                            @foreach ($questions as $question)
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Question {{ $question->id }}</label>
                                <div class="col-sm-7">
                                    <p class="form-control-static">{{ $question->question }}</p>
                                </div>
                                <a href="{{url('question/'.$question->id.'/delete') }}/" class="btn btn-sm btn-danger pull-right">Delete</a>
                                <a style="margin-right:5px;" href="{{url('question/'.$question->id.'/edit') }}" class="btn btn-sm btn-success pull-right">Edit</a>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">
                                    <div class="">
                                        <?php echo "A" ?>
                                    </div>
                                </label>
                                <div class="col-sm-10 form-control-static">
                                    <div class="col-sm-12">
                                        {{ $question->curr_ans }}
                                    </div>
                                </div>
                                <br>
                                <label class="col-sm-2 control-label">
                                    <div class="">
                                        <?php echo "B" ?>
                                    </div>
                                </label>
                                <div class="col-sm-10 form-control-static">
                                    <div class="col-sm-12">
                                        {{ $question->wrong_ans1 }}
                                    </div>
                                </div>
                                <br>
                                <label class="col-sm-2 control-label">
                                    <div class="">
                                        <?php echo "C" ?>
                                    </div>
                                </label>
                                <div class="col-sm-10 form-control-static">
                                    <div class="col-sm-12">
                                        {{ $question->wrong_ans2 }}
                                    </div>
                                </div>
                                <br>
                                <label class="col-sm-2 control-label">
                                    <div class="col-sm-">
                                        <?php echo "D" ?>
                                    </div>
                                </label>
                                <div class="col-sm-10 form-control-static">
                                    <div class="col-sm-12">
                                        {{ $question->wrong_ans3 }}
                                    </div>
                                </div>
                                <br>
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
