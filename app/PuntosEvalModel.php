<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class puntosEvalModel extends Model
{
    public $timestamps=false;

    protected $table='puntosevalu';

    protected $fillable=[
        'id',
        'puntos'
    ];
}
