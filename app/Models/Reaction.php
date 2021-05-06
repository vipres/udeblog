<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    protected $guarded = ['id'];
    
    use HasFactory;

    const LIKE = 1;
    const DISLIKE = 2;

    //Relacion uno a muchos inversa
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    //Modelo polimorfico
    public function reactionable()
    {
        return $this->morphTo();
    }
}
