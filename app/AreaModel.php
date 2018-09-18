<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AreaModel extends Model
{
    public $timestamps=false;

    protected $table='area';

    protected $fillable=[
      'id',
      'area'
    ];
}
