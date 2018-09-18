<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Index extends Model
{
    public $timestamps = false;



    protected $table = 'tipos';

    protected $fillable = ['id','tipo'];
}
