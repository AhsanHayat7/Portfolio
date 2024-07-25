@extends('layouts.app')

@section('main-container')
    <h1>Chat List</h1>
    <ul>

        @forelse ($users as $user)
        <li><a href="{{ url('/chat/' . $user->id) }}" class="btn btn-primary">{{ $user->name }} </a></li>
        @empty
            <h3>No user Found</h3>
        @endforelse
    </ul>
@endsection
