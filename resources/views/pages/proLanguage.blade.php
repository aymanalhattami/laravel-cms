@extends('layouts.app')
    @section('content')
        <div class="content">
            <div class="title m-b-md">
                Programming Language
                @foreach($languages as $lang)
                    {{ $lang }}
                @endforeach
            </div>
        </div>
    @endsection