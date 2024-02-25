<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receiver;

class ReceiverController extends Controller
{
    public function store(Request $request)
    {

    
        $receiver = new Receiver();
        $receiver->message_id = $request->input('message_id');
        $receiver->receiver_number = $request->input('receiver_number');
 
        $receiver->save();
    
        return response()->json(['receiver' => 'receiver created successfully'], 201);
    }}
