@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
        Published Posts
    </div>
</div>

    <table class="table table-bordered table-dark">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Image</th>
                <th scope="col">Edit</th>
                <th scope="col">Trashed</th>
            </tr>
        </thead>
        <tbody>

            @if ($posts->count() > 0)
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>
                            <a data-fancybox="Post-images" href="{{ asset($post->featured) }}">
                                <img src="{{ asset($post->featured) }}" alt="{{ $post->title }}" style="max-width: 100px;">
                            </a>
                        </td>
                        <td><a href="{{ route('post.edit', ['id' => $post->id]) }}" class="btn btn-xs btn-info">Edit</a>
                            <span class="glyphicon  glyphicon-pencil"></span>
                        </td>

                        <td><a href="{{ route('post.delete', ['id' => $post->id]) }}" class="btn btn-xs btn-danger">Trashed</a>
                            <span class="glyphicon  glyphicon-trash"></span>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <th colspan="5" class="text-center">No published Post</th>
                </tr>
            @endif

        </tbody>
    </table>


@endsection
