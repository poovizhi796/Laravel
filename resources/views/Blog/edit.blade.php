@extends('master.app')
@section('title', 'Update Blog')
@section('content')
@component('component.blogNav', ['type' => '/blog', 'btnStyle' => 'warning'])
    List
@endcomponent
    <div class="row">
        <div class="offset-md-2 col-md-8">
        {{ Form::model($oneRow, ['method' => 'PUT','route' => ['blog.update', $oneRow->id]]) }}
            {{ csrf_field() }}
                <div class="form-group">
                    <label>Title</label>
                    <!-- <input type="text" name="title" id="title" placeholder="Enter Title"> -->
                    {{ Form::text('title', null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    <label>Description</label>
                    {{ Form::textarea('description', null, ['class' => 'form-control', 'rows' => '2']) }}
                    <!-- <textarea type="text" name="description" id="desc" class="form-control"></textarea> -->
                </div>
                <div class="nav justify-content-center">
                    <input type="submit" name="submit" id="submit" value="Submit" class="ml-10 btn btn-outline-success">
                    <a href="{{ route('blog.index') }}" class="btn btn-lg btn-outline-primary" >Back</a>
                </div>
            {{ Form::close() }}
        </div>
    </div>


@endsection