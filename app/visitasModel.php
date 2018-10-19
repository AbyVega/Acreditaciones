<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class visitasModel extends Model
{
    public $timestamps=false;

    protected $table='visitas';
    protected $fillable=[
      'id',
      'visitas'
    ];

}
