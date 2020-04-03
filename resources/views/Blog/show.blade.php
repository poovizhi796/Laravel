@extends('master.app')
@section('title', 'View')
@section('content')
    <div class="row">
        <div class="mt-5 offset-md-3 col-md-8">
            <h3>{{ $blog->title }}</h3>
            <p class="mt-4 display-6">{{ $blog->description }}</p>
        </div>
    
    </div>
    <div class="nav justify-content-center">
        <a href="{{ route('blog.index') }}" class="btn btn-lg btn-outline-primary" >Back</a>
    </div>
@endsection