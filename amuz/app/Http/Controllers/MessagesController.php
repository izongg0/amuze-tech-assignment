<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Messages;

class MessagesController extends Controller
{
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images');
        } else {
            $imagePath = null;
        }
    
        $message = new Messages();
        $message->email = $request->input('email');
        $message->sender_number = $request->input('sender_number');
        $message->title = $request->input('title');
        $message->image = $imagePath; 
        $message->content = $request->input('content');
        $message->isad = $request->input('isad') === 'true' ? true : false;
        $message->save();
    
        return response()->json(['messages' => 'Message created successfully','id' => $message->id], 201);
    }
}
