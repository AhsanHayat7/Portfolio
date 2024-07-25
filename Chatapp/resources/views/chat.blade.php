@extends('layouts.app')

@section('main-container')
    <h1>Chat with User {{ $userId }}</h1>
    <div id="messages">
        @foreach($messages as $message)
            <div class="sender">

            </div>
            <div class="receiver">

            </div>
            <div class="{{ $message->sender_id == Auth::id() ? 'sent' : 'received' }}">
                {{ $message->message }}
            </div>
        @endforeach
          <form action="{{ url('/chat/send') }}" method="POST">
        @csrf
        <input type="hidden" name="receiver_id" value="{{ $userId }}">
        <textarea name="message" required></textarea>
        <button class="btn send-btn">Send</button>
    </form>
    </div>

@endsection
