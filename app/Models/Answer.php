<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $table='answers';

    // get user associated with the answer
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
}
