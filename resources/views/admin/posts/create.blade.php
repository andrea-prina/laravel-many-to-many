@extends('layouts.app')

@section('content')

    <form action="{{ route('admin.posts.store') }}" method="post">
        @csrf
        @method('POST')

        @include('includes.posts_form')
        
    </form>

@endsection