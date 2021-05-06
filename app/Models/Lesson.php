<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $guarded = ['id'];
    use HasFactory;

    //Relación uno a uno

    public function description()
    {
        return $this->hasOne(Description::class);
    }


    //Relación uno a muchos inversa

    public function section(){

        return $this->belongsTo(Section::class);
    }

    public function platform(){

        return $this->belongsTo(Platform::class);
    }

    //Relación muchos a muchos

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    //Relacion uno a uno polimorfica
    public function resource()
    {
        return $this->morphOne(Resource::class, 'resourceable');
    }

    //Realcion uno a muchos polimorfica

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function reactions()
    {
        return $this->morphMany(Reaction::class, 'commentable');
    }

}
