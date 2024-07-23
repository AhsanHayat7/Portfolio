@extends('layouts.app')

@section('content')
    <h1>Chat with User {{ $userId }}</h1>
    <div id="messages">
        @foreach($messages as $message)
            <div class="{{ $message->sender_id == Auth::id() ? 'sent' : 'received' }}">
                {{ $message->message }}
            </div>
        @endforeach
    </div>
    <form action="{{ url('/chat/send') }}" method="POST">
        @csrf
        <input type="hidden" name="receiver_id" value="{{ $userId }}">
        <textarea name="message" required></textarea>
        <button type="submit">Send</button>
    </form>
@endsection
