@extends('layouts.app')

@section('content')

    <form action="{{ route('admin.posts.store') }}" method="post">
        @csrf
        @method('POST')

        @include('admin.posts.includes.form')
        
    </form>

@endsection