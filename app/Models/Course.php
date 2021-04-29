<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Course extends Model
{
    use HasFactory;

    const BORRADOR = 1;
    const REVISION = 2;
    const PUBLICADO = 3;


    //Relacion Uno a Muchos INVERSA

    public function teacher()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    //Relacion muchos a muchos Inversa

    public function students()
    {
        return $this->belongsToMany(User::class);
    }
}
