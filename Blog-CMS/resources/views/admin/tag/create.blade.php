@extends('layouts.app')

@section('content')


    <div class="container ">
        <div class="card">
            <div class="card-header">
                <h3>Create New Tags</h3>
              @include('admin.includes.errors')
            </div>
            <div class="card-body">
                <form action="{{ route('tag.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Tag Name</label>
                        <input type="text" name="tag" class="form-control" >
                    </div>
                    <br>
                    <div class="form-group text-center">
                        <button class="btn btn-success" type="submit">Store Tags</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
