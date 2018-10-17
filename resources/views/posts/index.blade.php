@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @if(count($allPosts) > 0)
            @foreach($allPosts as $p)
                <div class="col-md-4">
                    <div class="panel panel-danger shodow">
                        <div class="panel-heading second-background second-color">
                            <div class="panel-title">{{ $p->subject }}</div>
                        </div>
                        <div class="panel-body">
                            <div class="text-center">
                                <img class="img-responsive img-thumbnail center-block min-size" src="storage/post_image/{{ $p->post_image }}" width="330" height="170" />
                            </div>
                            <div>
                                <span>By <b>{{ $p->first_name }}</b></span>
                                <span class="label label-danger"><i class="fa fa-calendar"></i> At <b>{{ $p->created_at }}</b></span>
                                <span><a href="posts/{{ $p->id }}" class="btn btn-link">More</a></span>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="col-xs-12 text-center">{{ $allPosts->links() }}</div>
        @else
            <div class="col-md-12">
                <h1>Posts</h1>
                <div class="alert alert-dismissable alert-danger">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Oh !</strong><span> No Posts to Show</span>
                </div>
            </div>
        @endif
    </div>
</div>
@endsection