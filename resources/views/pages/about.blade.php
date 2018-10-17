@extends("layouts.app")

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="line-div second-background"></div>
                <hr />
            </div>
            <div class="col-md-6">
                <h2 class="about-name">Aymen Alhattamy</h2>
                <span>Hope you like it</span>
            </div>
            <div class="col-md-6">test</div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('images/HTML_certificate.jpg') }}" class="img-responsive shodow" />
            </div>
            <div class="col-md-4">
                <img src="{{ asset('images/PHP_certificate.jpg') }}" class="img-responsive shodow" />
            </div>
            <div class="col-md-4">
                <img src="{{ asset('images/jQuery_certificate.jpg') }}" class="img-responsive shodow" />
            </div>
        </div>
    </div>
@endsection