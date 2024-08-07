@extends('layouts.app')

@section('content')


    <div class="container ">
        <div class="card">
            <div class="card-header">
                <h3>Edit Your Profile</h3>
              @include('admin.includes.errors')
            </div>
            <div class="card-body">
                <form action="{{ route('user.profile.update',["id"=>$user->profile->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">User Name</label>
                        <input type="text" name="name" value="{{$user->name}}" class="form-control" >
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" value="{{$user->email}}" class="form-control" >
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="password">New Password</label>
                        <input type="password" name="password"  class="form-control" >
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="avatar">Upload a new Avatar</label>
                        <input type="file" name="avatar" class="form-control" >
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="facebook">Facebook Profile</label>
                        <input type="text" name="facebook"  value="{{$user->profile->facebook}}" class="form-control" >
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="youtube">Youtube Profile</label>
                        <input type="text" name="youtube" class="form-control" value="{{$user->profile->youtube}}">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="about">About</label>
                        <textarea class="form-control" id="about"  name="about" rows="3" value="{{$user->profile->about}}"></textarea>
                      </div>
                      <br>
                    <div class="form-group text-center">
                        <button class="btn btn-success" type="submit">Update Profile</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
