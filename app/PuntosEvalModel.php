<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class puntosEvalModel extends Model
{
    public $timestamps=false;

    protected $table='puntosEvalu';

    protected $fillable=[
        'id',
        'incidencia'
    ];
}
