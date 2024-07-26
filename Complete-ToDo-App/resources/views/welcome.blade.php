@extends('layouts')


@section('content')
    {{-- <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="title">
                    <h1 class="wel">Welcome to the Todo App</h1>
                </div>

            </div>
        </div>
    </div> --}}

    <a href="{{route('todos')}}"> Visit my Todos </a>
@endsection
