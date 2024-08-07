@extends('layouts.app')

@section('content')
    <div class="container ">
        <div class="card">
            <div class="card-header">
                <h3>Create New Post</h3>
                @include('admin.includes.errors')
            </div>
            <div class="card-body">
                <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <br>

                    <div class="mb-3">
                        <label for="featured">Featured Image</label>
                        <input class="form-control" type="file" name="featured">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="category">Select</label>
                        <select type="text" name="category_id" class="form-control" id="category">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <br>
                        <div class="form-group">
                            <label for="tags">Select tags</label>
                            @foreach($tags as $tag)
                                <div class="form-check ">
                                    <label class="form-check-label">
                                        <input class="form-check-input" value={{ $tag->id }} type="checkbox"  name="tags[]"

                                        @foreach($tags as $t)

                                            @if($tag->id == $t->id)

                                                checked

                                            @endif


                                        @endforeach

                                        >{{ $tag->tag }}
                                    </label>
                                </div>
                            @endforeach

                        <br>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea name="content" id="content" cols="5" rows="5" class="form-control"></textarea>
                        </div>
                        <br>
                        <div class="form-group text-center">
                            <button class="btn btn-success" type="submit">Store Post</button>
                        </div>
                </form>
            </div>
        </div>
    </div>

@endsection
@section('scripts')

<script>
    $(document).ready(function() {
        $('#content').summernote();
    });
  </script>
@endsection
