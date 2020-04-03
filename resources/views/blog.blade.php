@extends('master.app')
@section('title', 'Blog')
@section('content')
    @component('component.alert', ['type' => 'warning'])
        Welcome to Blog Session..!
    @endcomponent
@endsection