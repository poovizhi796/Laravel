@extends('master.app')
@section('title', 'About us')
@section('content')
@component('component.alert', ['type' => 'info'])
    You have clicked About page od Test Project..Welcome...!
@endcomponent
<h3 class="nav justify-content-center">About With Us</h3>
    <p>Navbars can utilize .navbar-toggler, .navbar-collapse, and .navbar-expand{-sm|-md|-lg|-xl} classes to change when their content collapses behind a button. In combination with other utilities, you can easily choose when to show or hide particular elements.
For navbars that never collapse, add the .navbar-expand class on the navbar. For navbars that always collapse, don’t add any .navbar-expand class
    </p>
@endsection
