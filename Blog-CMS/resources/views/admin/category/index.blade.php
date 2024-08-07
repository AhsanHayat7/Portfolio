@extends('layouts.app')

@section('content')


<div class="card">
    <div class="card-header">
        Categories
    </div>
</div>
    <table class="table table-bordered table-dark">

        <thead>
            <tr>
                <th scope="col">Category Name</th>
                <th scope="col">Editing</th>
                <th scope="col">Deleting</th>
            </tr>
        </thead>
        <tbody>

            @if ($categories->count() > 0)
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td><a href="{{ route('category.edit', ['id' => $category->id]) }}" class="btn btn-xs btn-info">Edit</a>
                            <span class="glyphicon  glyphicon-pencil"></span>
                        </td>

                        <td><a href="{{ route('category.delete', ['id' => $category->id]) }}"
                                class="btn btn-xs btn-danger">Delete</a>
                            <span class="glyphicon  glyphicon-trash"></span>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <th colspan="5" class="text-center">No Categories Yet</th>
                </tr>
            @endif

        </tbody>
    </table>
@endsection
