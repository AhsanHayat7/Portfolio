@extends('layouts.app')

@section('content')

@include('admin.includes.errors')
    <div class="container ">

        <div class="card">
            <div class="card-header">
                Edit Tag:{{$tags->tag}}
            </div>
            <div class="card-body">
                <form action="{{ route('tag.update',['id'=>$tags->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Tag</label>
                        <input type="text" name="tag"  value={{$tags->tag}} class="form-control" >
                    </div>
                    <br>
                    <div class="form-group text-center">
                        <button class="btn btn-success" type="submit">Update Tags</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
