@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 text-center" style="background-color: {{ $category->color }}">
                <h1>Category: {{ $category->name }}</h1>
            </div>
        </div>
        <div class="row">
            @forelse ($posts as $post)
            <div class="col-12 my-3">
                @include('admin.posts.includes.post')
                @empty
                    <div>No posts in this category</div>
            </div>
                @endforelse
        </div>
    </div>

@endsection