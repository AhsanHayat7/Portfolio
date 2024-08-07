@extends('layouts.app')

@section('content')

@include('admin.includes.errors')
    <div class="container ">

        <div class="card">
            <div class="card-header">
                Edit Category:{{$category->name}}
            </div>
            <div class="card-body">
                <form action="{{ route('category.update',['id'=>$category->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name"  value={{$category->name}} class="form-control" id="name">
                    </div>
                    <br>
                    <div class="form-group text-center">
                        <button class="btn btn-success" type="submit">Update Category</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
