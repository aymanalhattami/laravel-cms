<div class="container">
    <div class="row">
        <div class="col-xs-12">
            @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                    <div class="alert alert-dismissable alert-danger">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Oh !</strong> <span>{{ $error }}</span>
                    </div>
                @endforeach
            @endif


            @if(session('success'))
                <div class="alert alert-dismissable alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Well done !</strong> <span>{{ session('success') }}</span>
                </div>
            @endif


            @if(session('error'))
                <div class="alert alert-dismissable alert-danger">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Oh !</strong> <span>{{ session('error') }}</span>
                </div>
            @endif
        </div>
    </div>
</div>