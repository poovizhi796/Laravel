@extends('master.app')
@section('title', 'Create Blog')
@section('content')

@component('component.blogNav', ['type' => 'blog/create', 'btnStyle' => 'primary'])
    Create
@endcomponent
<div class="row">
    <div class="offset-md-2 col-md-8">
        @if ($msg = Session::get('success'))
            @component('component.alert', ['type' => 'success'])
                {{ $msg }}
            @endcomponent
        @endif
        <table class="bloglist table table-bordered">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th colspan="3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $a => $data)
                <tr>
                    <td>{{ ++$a }}</td>
                    <td>{{ $data->title }}</td>
                    <td>{{ str_limit($data->description, 100, '...') }}</td>
                    <td><a href="{{ route('blog.show', $data->id) }}" class="btn btn-sm btn-outline-info">View</a></td>
                    <td><a href="" class="">Edit</a></td>
                    <td>
                    {{ Form::open(['method'=>'DELETE', 'route' => ['blog.destroy', $data->id]])  }}
                    {{ Form::submit('Delete', ['class' => 'btn btn-sm btn-outline-danger'])  }}
                    {{ Form::close() }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $datas->links() }}
    </div>
</div>
@endsection