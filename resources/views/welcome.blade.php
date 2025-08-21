@extends('layout.app')

@section('title')
    Welcome to CV Maker
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('styleCss')
    #hero-image {
    background-image: url('{{ asset('images/software.png') }}');
    background-size: cover;
    background-position: center;
    height: fix-content;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}   
.mobile-cv-bulder {
    max-width: 50%;
    height:auto;
}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h2 class="text-center">Welcome to My Cv Creator</h2>
            <h1>
                Create a <br> Compelling CV with <br>AI assistance in <br> minutes.
            </h1>
            <h4>
                Online resume builder with AI assistance
            </h4>
            <div class="btn btn-primary"><a href="{{ route('cvform') }}" class="text-decoration-none text-light">GET STARED</a></div>
        </div>
        <div class="col-md-6 flex felx-row " id="hero-image">
            
        </div>
   </div>
@endsection
