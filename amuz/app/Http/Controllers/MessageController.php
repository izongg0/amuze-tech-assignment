<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        $message = new Message;
    $message->email = $request->input('email'); 
    $message->receiver_number = $request->input('receiver_number'); 
    $message->sender_number = $request->input('sender_number'); 
    $message->title = $request->input('title'); 
    $message->content = $request->input('content'); 
    $message->save();

    
        return response()->json(['message' => 'Message created successfully', 'message' => $message], 201);
    }
}
