@extends('layouts')

@section('content')

    <div class="row justify-content-center align-items-center">
        <div class="col-lg-12">
            <div class="text-center">
                <form action="{{route('made')}}" method="post">
                @csrf
                <input type="text" class="form control input-lg" placeholder="Create a new todo" name="todo" >
                </form>
            </div>
        </div>
    </div>
<ul class="list-group">
    @forelse ($todos as $todo)
        <li class="list-group-item">{{ $todo->todo }} <a  href= "{{route('remove',['id'=> $todo->id])}}" class ="btn btn-danger">X</a>
        <a  href= "{{route('change',['id'=> $todo->id])}}" class = "btn btn-info btn-xs">Update</a>
        @if(!$todo->completed)
            <a href="{{route('complete',['id'=>$todo->id])}}" class="btn btn-xs btn-success">Mark as Completed</a></li>

        @elseif($todo->completed)
            <a href="{{route('uncomplete',['id'=>$todo->id])}}" class="btn btn-xs btn-primary">Mark as Uncompleted </a>
        @else
            <span class="text sucess">completed!</span>
        @endif

        @empty
       <h5> Create a Todo First</h5>
    @endforelse

</ul>
@endsection
