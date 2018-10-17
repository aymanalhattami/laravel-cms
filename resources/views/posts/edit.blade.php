@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="panel panel-danger shodow">
                <div class="panel-heading second-background second-color">
                    <div class="panel-title ">
                        Edit Post
                    </div>
                </div>
                <div class="panel-body">
                    {{ Form::open(['action' => ['PostController@update', $thePost->id], "method" => "POST", 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data']) }}
                    <div class="form-group">
                        {{ Form::label('subject', 'Subject', ['class' => 'col-md-4 control-label']) }}
                        <div class="col-md-8">
                            {{ Form::text("subject", $thePost->subject, ['class' => 'form-control']) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('first_name', 'First Name', ['class' => 'col-md-4 control-label']) }}
                        <div class="col-md-8">
                            {{ Form::text("first_name", $thePost->first_name, ['class' => 'form-control']) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('last_name', 'Last Name', ['class' => 'col-md-4 control-label']) }}
                        <div class="col-md-8">
                            {{ Form::text("last_name", $thePost->last_name, ['class' => 'form-control']) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('body', 'Description', ['class' => 'col-md-4 control-label']) }}
                        <div class="col-md-8">
                            {{ Form::textarea("body", $thePost->body, ['class' => 'form-control', 'rows' => "5"]) }}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-8">
                            {{ Form::file("post_image", ['class' => 'form-control']) }}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            {{ Form::hidden("_method", "PUT") }}
                            {{ Form::submit("Update", ['class' => 'btn btn-danger btn-sm pull-right second-background second-color']) }}
                        </div>
                    </div>

                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection