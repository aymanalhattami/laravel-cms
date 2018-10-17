@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default shodow">
                <div class="panel-heading second-background second-color">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{ url('/posts/create') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> New Post</a>
                    <hr />

                    @foreach($posts as $p)
                        <div class="panel panel-primary">
                            <div class="panel-heading main-background">
                                <div class="panel-title pull-left main-color">{{ $p->subject }}</div>
                                <div class="pull-right">
                                    <div class="pull-right">
                                        <a class="second-color" href="posts/{{ $p->id }}/edit">Edit</a>
                                    </div>
                                    <div class="pull-right">
                                        {{ Form::open(['action' => ['PostController@destroy', $p->id], "method" => "POST", 'class' => 'form-horizontal']) }}
                                        {{ Form::hidden("_method", "DELETE") }}
                                        {{ Form::submit("Delete", ['class' => 'btn btn-link btn-xs second-color']) }}
                                        {{ Form::close() }}
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="panel-body">
                                <div>{{ $p->body }}</div>
                                <div class="label label-danger">{{ $p->created_at }}</div>
                                <div class="label label-info">{{ $p->first_name . " " . $p->last_name }}</div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection