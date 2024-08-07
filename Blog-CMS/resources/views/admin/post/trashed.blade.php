@extends('layouts.app')

@section('content')


<div class="card">
    <div class="card-header">
        Trashed Posts
    </div>
</div>


<table class="table table-bordered table-dark">
    <thead>
      <tr>
        <th scope="col">Title</th>
        <th scope="col">Image</th>
        <th scope="col">Edit</th>
        <th scope="col">Restore</th>
        <th scope="col">Destroy</th>



      </tr>
    </thead>
    <tbody>

        @if($posts->count() > 0)


             @foreach ($posts as $post)



        <tr>
            <td>{{$post->title}}</td>
            <td>
                <a data-fancybox="Post-images" href="{{ asset($post->featured) }}">
                    <img src="{{ asset($post->featured) }}" alt="{{ $post->title }}" style="max-width: 100px;">
                </a>
            </td>
            <td>Edit</a>
                </td>

                <td><a href="{{route('post.restore',['id'=>$post->id])}}" class="btn btn-xs btn-success">Restore</a>
                    <span class="glyphicon  glyphicon-trash"></span></td>

                    <td><a href="{{route('post.kill',['id'=>$post->id])}}" class="btn btn-xs btn-danger">Delete</a>
                        <span class="glyphicon  glyphicon-trash"></span></td>
        </tr>

            @endforeach
        @else
            <tr>
                <th colspan="5" class="text-center">No trashed Post</th>
            </tr>
        @endif

    </tbody>
  </table>


@endsection


