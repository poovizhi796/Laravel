@extends('master.app')
@section('title', 'Welcome')
@section('content')
@component('component.alert', ['type' => 'primary'])
  Welcome to Test Project We are using component and slot for changing the dynamic content, it display when eve u click the nav links.
@endcomponent
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Welcome to Test Project</h1>
            <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <h3>Content-1</h3>
            <p>This is content1 about test project. kindly read fully if u want to more clarification visit our website. thanks for reading . have a great day!</p>
        </div>
        <div class="col-md-4">
            <h3>Content-2</h3>
            <p>This is content1 about test project. kindly read fully if u want to more clarification visit our website. thanks for reading . have a great day!</p>
        </div>
        <div class="col-md-4">
            <h3>Content-3</h3>
            <p>This is content1 about test project. kindly read fully if u want to more clarification visit our website. thanks for reading . have a great day!</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <h3>Subheading - 1</h3>
            <p>This is content1 about test project. kindly read fully if u want to more clarification visit our website. thanks for reading . have a great day!</p>
        </div>
        <div class="col-md-4">
            <h3>Subheading - 2</h3>
            <p>This is content1 about test project. kindly read fully if u want to more clarification visit our website. thanks for reading . have a great day!</p>
        </div>
    </div>
@endsection