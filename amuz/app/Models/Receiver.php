<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receiver extends Model
{
    public $timestamps = false;

    protected $table = 'receiver'; 

    protected $fillable = [
        'message_id',
        'receiver_number'
    ];
    use HasFactory;
}
