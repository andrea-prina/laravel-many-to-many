@extends('layouts.app')

@section('content')

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Color</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($categories as $category)
                    
                    <tr>
                        <td>
                            {{ $category->name }}
                        </td>
                        <td>
                            <div class="badge badge-pill text-light" style="background-color: {{ $category->color }}">{{ $category->color }}</div>
                        </td>
                        <td>
                            <a href="{{ route('admin.categories.show', $category->id) }}" class="btn btn-success">VIEW</a>
                        </td>
                        <td>
                            <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-primary">EDIT</a>
                        </td>
                        <td>
                            <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST">
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