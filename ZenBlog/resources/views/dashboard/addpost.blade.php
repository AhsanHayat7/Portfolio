@extends('dashboard.layouts.app')

@section('main-container')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Create Article </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create Article</li>
                </ol>
            </nav>
        </div>

         <!-- Display success message if it exists -->
        {{-- @if (session('success'))
            <div class="alert alert-success" style="background-color: green; color:white">
                {{ session('success') }}
            </div>
        @endif --}}
        <br>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Article Details</h4>
                        <form method="POST" action="{{ route('pos') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" value="{{ $article->title ?? '' }}">
                                @if ($errors->has('title'))
                                    <div class="text-danger">
                                        {{ $errors->first('title') }}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea class="form-control" id="content" name="content" rows="5" placeholder="Enter content">{{ $article->content ?? '' }}</textarea>
                                @if ($errors->has('content'))
                                    <div class="text-danger">
                                        {{ $errors->first('content') }}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="author">Author</label>
                                <input type="text" class="form-control" id="author" name="author" placeholder="Enter author" value="{{ $article->author ?? '' }}">
                                @if ($errors->has('author'))
                                    <div class="text-danger">
                                        {{ $errors->first('author') }}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="formatted_date">Formatted Date</label>
                                <input type="text" class="form-control" id="formatted_date" name="formatted_date" placeholder="Enter formatted date" value="{{ $article->formatted_date ?? '' }}">
                                @if ($errors->has('formatted_date'))
                                    <div class="text-danger">
                                        {{ $errors->first('formatted_date') }}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="category_id">Category</label>
                                <input type="number" class="form-control" id="category_id" name="category_id" placeholder="Enter formatted date" value="{{ $article->category_id ?? '' }}">
                                @if ($errors->has('category_id'))
                                    <div class="text-danger">
                                        {{ $errors->first('category_id') }}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control-file" id="image" name="image" >
                                @if ($errors->has('image'))
                                    <div class="text-danger">
                                        {{ $errors->first('image') }}
                                    </div>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
