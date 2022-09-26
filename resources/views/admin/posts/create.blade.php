@extends('layouts.app')

@section('content')

    <form action="{{ route('admin.posts.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')

        @include('admin.posts.includes.form')
        
    </form>

@endsection