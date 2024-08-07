@extends('layouts.app')

@section('content')

    <div class="container ">

        <div class="card ">
            <div class="card-header ">
                Create New Category
                @include('admin.includes.errors')
            </div>
            <div class="card-body">
                <form action="{{ route('category.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <br>
                    <div class="form-group text-center">
                        <button class="btn btn-success" type="submit">Store Category</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
