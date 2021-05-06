<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Course extends Model
{
    protected $guarded = ['id', 'status'];
    
    use HasFactory;

    const BORRADOR = 1;
    const REVISION = 2;
    const PUBLICADO = 3;
    //Relacion uno a muchos
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function requeriments()
    {
        return $this->hasMany(Requeriment::class);
    }

    public function goals()
    {
        return $this->hasMany(Goal::class);
    }

    public function audiences()
    {
        return $this->hasMany(Audience::class);
    }

    public function sections()
    {
        return $this->hasMany(Section::class);
    }

    //Relacion Uno a Muchos INVERSA

    public function teacher()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function price()
    {
        return $this->belongsTo(Price::class);
    }


    //Relacion muchos a muchos

    public function students()
    {
        return $this->belongsToMany(User::class);
    }

    //Relacion uno a uno polimorfica
    //Un curso solo puede tener una imagen

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function lessons()
    {
        return $this->hasManyThrough(Lesson::class, Section::class);
    }
}
