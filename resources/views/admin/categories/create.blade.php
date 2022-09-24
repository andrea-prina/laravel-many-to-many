@extends('layouts.app')

@section('content')

    <form action="{{ route('admin.categories.store') }}" method="post">
        @csrf
        @method('POST')

        @include('admin.categories.includes.form')
        
    </form>

@endsection