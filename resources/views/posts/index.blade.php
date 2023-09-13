@extends('posts.layout')

@section('content')
<div class="row">
    @if (session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
    @endif
    <div class="col-lg-12 mb-3">
        <div class="pull-left">
            <h2>Laravel 10 CRUD Example</h2>
        </div>
        @can('create', \App\Models\Post::class)
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('posts.create') }}">Create New Post</a>
        </div>
        @endcan
    </div>
</div>
    <table class="table table-bordered">
        <tr>
            <th>Post ID</th>
            <th>User ID</th>
            <th>Title</th>
            <th>Body</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->user_id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->body }}</td>
            <td>
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('posts.show',$post->id) }}">Show</a>

                    @can('update', $post)
                    <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    @endcan
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $posts->links() !!}

@endsection