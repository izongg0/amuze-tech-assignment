<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{  protected $fillable = [
    'email',
    'sender_number',
    'title',
    'image',
    'content',
    'isad'
];
    use HasFactory;
}
