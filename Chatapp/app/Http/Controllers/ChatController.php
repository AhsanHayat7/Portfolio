<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
class ChatController extends Controller
{
    //
    public function index()
    {
        $users = \App\Models\User::where('id', '!=', Auth::id())->get();


        $header = 'Welcome to the Chat App';
        return view('index', compact('users','header'));
    }

    public function chat($userId)
    {
        $messages = Message::where(function($query) use ($userId) {
            $query->where('sender_id', Auth::id())
                  ->where('receiver_id', $userId);
        })->orWhere(function($query) use ($userId) {
            $query->where('sender_id', $userId)
                  ->where('receiver_id', Auth::id());
        })->get();

        $header = 'Welcome to the Chat App';
        return view('chat', compact('messages', 'userId','header'));
    }

    public function send(Request $request)
    {
        $message = new Message;
        $message->sender_id = Auth::id();
        $message->receiver_id = $request->receiver_id;
        $message->message = $request->message;
        $message->save();

        return redirect()->back();
    }
}
