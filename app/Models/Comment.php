<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = ['id'];
    
    use HasFactory;

    public function commentable()
    {
        return $this->morphTo();
    }

    //Relacion uno a muchos inversa
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //Relación uno a muchos polimorfica para que los comentqrios
    //tambien puedan tener subcomentarios
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    //Los comentarios sub tambien pueden tener reacciones

    public function reactions()
    {
        return $this->morphMany(Reaction::class, 'reactionable');
    }


}
