<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;


     // Specify the table if it differs from the default (optional)
     protected $table = 'messages';

     // Define the fillable attributes for mass assignment
     protected $fillable = [
         'sender_id',
         'receiver_id',
         'message',
     ];

     // Define the relationships
     public function sender()
     {
         return $this->belongsTo(User::class, 'sender_id');
     }

     public function receiver()
     {
         return $this->belongsTo(User::class, 'receiver_id');
     }
}
