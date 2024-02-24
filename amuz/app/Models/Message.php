<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'message';

    protected $fillable = [
        'email',
        'receiver_number',
        'sender_number',
        'title',
        'content',
    ];
    use HasFactory;
}
