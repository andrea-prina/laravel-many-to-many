@extends('layouts.app')

@section('content')

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Author</th>
                <th scope="col">Title</th>
                <th scope="col">Category</th>
                <th scope="col">Date</th>
                <th scope="col"></th>
                <th scope="col" colspan="2"><a href="{{ route('admin.posts.create') }}" class="btn btn-light border border-primary p-0 px-1">Create Post</a></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($posts as $post)
    
                <tr>
                    <td>
                        {{ $post->id }}
                    </td>
                    <td>
                        {{ $post->user->name }}
                    </td>
                    <td>
                        {{ $post->title }}
                    </td>
                    <td>
                        @if (isset($post->category))
                            <div class="badge badge-pill p-1 w-100" style="background-color: {{ $post->category->color }}">
                                {{ $post->category->name }}
                            </div>     
                        @endif
                    </td>
                    <td>
                        {{ $post->post_date }}
                    </td>
                    <td>
                        <a href="{{ route('admin.posts.show', $post->id) }}" class="btn btn-success">VIEW</a>
                    </td>
                    <td>
                        <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-primary">EDIT</a>
                    </td>
                    <td>
                        <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                        
                            <input type="submit" value="DELETE" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
    
            @empty
    
                <tr>
                    <td colspan="5">Empty</td>
                </tr>
    
            @endforelse
        </tbody>
    </table>
</div>

@endsection