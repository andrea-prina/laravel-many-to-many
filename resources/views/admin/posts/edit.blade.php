@extends('layouts.app')

@section('content')

    <form action="{{ route('admin.posts.update', $post['id']) }}" method="post">
        @csrf
        @method('PUT')

        @include('includes.posts_form')
        
    </form>

@endsection