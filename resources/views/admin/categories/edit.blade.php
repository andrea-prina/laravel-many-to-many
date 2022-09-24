@extends('layouts.app')

@section('content')

    <form action="{{ route('admin.categories.update', $category['id']) }}" method="post">
        @csrf
        @method('PUT')

        @include('admin.categories.includes.form')
        
    </form>

@endsection