@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <h1>Posts</h1>
            <div class="panel panel-danger shodow">
                <div class="panel-heading second-background second-color">
                    <div class="panel-title pull-left">{{ $thePost->subject }}</div>
                    @if(!Auth::guest())
                        @if(Auth::user()->id == $thePost->user_id)
                    <div class="pull-right"><a class="label label-warning" href="{{ $thePost->id }}/edit">Edit</a></div>
                    <div class="pull-right">
                        {{ Form::open(['action' => ['PostController@destroy', $thePost->id], "method" => "POST", 'class' => 'form-horizontal']) }}
                            {{ Form::hidden("_method", "DELETE") }}
                            {{ Form::submit("Delete", ['class' => 'btn btn-link btn-xs second-color']) }}
                        {{ Form::close() }}
                    </div>
                        @endif
                    @endif
                    <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                    <div class="col-md-8">
                        <div>{{ $thePost->body }}</div>
                        <div class="label label-primary"><i class="fa fa-user"></i> By {{ $thePost->first_name . " " . $thePost->last_name }}</div>
                        <div class="label label-danger"><i class="fa fa-calendar"></i> At {{ $thePost->created_at }}</div>
                    </div>
                    <div class="col-md-4 text-center">
                        <img class="img-responsive img-thumbnail center-block" src="{{ asset('storage/images/' . $thePost->post_image) }}" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection