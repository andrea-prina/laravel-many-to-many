@extends('layouts.app')

@section('content')

    <form action="{{ route('admin.posts.update', $post['id']) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        @include('admin.posts.includes.form')
        
    </form>

@endsection