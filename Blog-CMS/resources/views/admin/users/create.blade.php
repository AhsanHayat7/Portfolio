@extends('layouts.app')

@section('content')


    <div class="container ">
        <div class="card">
            <div class="card-header">
                <h3>Create New User</h3>
              @include('admin.includes.errors')
            </div>
            <div class="card-body">
                <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" >
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" >
                    </div>
                    <br>
                    <div class="form-group text-center">
                        <button class="btn btn-success" type="submit">Add User</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
