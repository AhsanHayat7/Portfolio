@extends('layouts.app')

@section('main-container')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container mt-4">
        <h1 class="mb-4">Chat List</h1>

        <div class="row">
            @forelse ($users as $user)
                @if (auth()->id() !== $user->id) {{-- Exclude the logged-in user from the chat list --}}
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body text-center">
                                {{-- Link to start a chat with the user (user name inside the button) --}}
                                <a href="{{ url('/chat/' . $user->id) }}" class="btn btn-primary">
                                    Chat with {{ $user->name }}
                                </a>
                            </div>
                        </div>
                    </div>
                @endif
            @empty
                <div class="col-12">
                    <div class="alert alert-info">
                        No other users found to chat with.
                    </div>
                </div>
            @endforelse
        </div>
    </div>
@endsection
