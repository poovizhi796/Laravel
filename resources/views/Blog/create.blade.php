@extends('master.app')
@section('title', 'Blog Create - New Post')
@section('content')
@component('component.blogNav', ['type' => '/blog', 'btnStyle' => 'warning'])
    List
@endcomponent

    <div class="row">
        <div class="offset-md-2 col-md-8">
            <form method="POST" action="/blog">
            {{ csrf_field() }}
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" id="title" class="form-control">
</div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea type="text" name="description" id="desc" class="form-control"></textarea>
                </div>
                <div class="nav justify-content-center">
                    <input type="submit" name="submit" id="submit" value="Submit" class="ml-10 btn btn-outline-success">
                </div>
            </form>
        </div>
    </div>
@endsection
