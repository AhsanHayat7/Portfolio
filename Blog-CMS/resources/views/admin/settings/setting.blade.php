@extends('layouts.app')

@section('content')


    <div class="container ">
        <div class="card">
            <div class="card-header">
                <h3>Edit Blog Settings</h3>
              @include('admin.includes.errors')
            </div>
            <div class="card-body">
                <form action="{{ route('setting.update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Site Name</label>
                        <input type="text" name="site_name"  value="{{$settings->site_name}}" class="form-control" >
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" name="address" value="{{$settings->address}}"class="form-control" >
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="contact">Contact Phone</label>
                        <input type="text" name="contact_number" value="{{$settings->contact_number}}" class="form-control" >
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="email">Contact Email</label>
                        <input type="text" name="contact_email" value="{{$settings->contact_email}}"class="form-control" >
                    </div>
                    <br>
                    <div class="form-group text-center">
                        <button class="btn btn-success" type="submit">Update Site Settings</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
