@extends('layouts.app')

@section('content')


<div class="card">
    <div class="card-header">
        Tags
    </div>
</div>
    <table class="table table-bordered table-dark">

        <thead>
            <tr>
                <th scope="col">Tag Name</th>
                <th scope="col">Editing</th>
                <th scope="col">Deleting</th>
            </tr>
        </thead>
        <tbody>

            @if ($tags->count() > 0)
                @foreach ($tags as $tag)
                    <tr>
                        <td>{{ $tag->tag }}</td>
                        <td><a href="{{ route('tag.edit', ['id' => $tag->id]) }}" class="btn btn-xs btn-info">Edit</a>
                            <span class="glyphicon  glyphicon-pencil"></span>
                        </td>
                        <td><a href="{{ route('tag.delete', ['id' => $tag->id]) }}"
                                class="btn btn-xs btn-danger">Delete</a>
                            <span class="glyphicon  glyphicon-trash"></span>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <th colspan="5" class="text-center">No Tags Yet</th>
                </tr>
            @endif

        </tbody>
    </table>
@endsection
