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
                        <b><i>{{ $user->name }}, All Exam Result </i></b>
                    </div>
                    <div class="text-right">
                        <a href="#" class="btn btn-sm btn-primary">Link</a>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="panel-body col-md-12 col-md-offset-0">
                        <form class="form-horizontal" action="#" method="post">
                            <div class="form-group control-label">
                                <label class="col-sm-2">
                                    <div class="form-control-static">
                                        Result::
                                    </div>
                                </label>
                                <div class="text-left">
                                    <p class="form-control-static"></p>
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
