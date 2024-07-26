@extends('layouts')

@section('content')

<div class="row justify-content-center align-items-center">
    <div class="col-lg-12">
        <div class="text-center">
            <form action="{{route('save',['id'=> $todo->id])}}" method="post">
            @csrf
            <input type="text" class="form control input-lg"  value ="{{$todo->todo}}"  name="todo">
            </form>
        </div>
    </div>
</div>
@endsection
