<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = ['id'];
    
    use HasFactory;

    //RElación UNO a UNO INVERSA

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
