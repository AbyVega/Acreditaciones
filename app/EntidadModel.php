<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EntidadModel extends Model
{
    public $timestamps = false;



    protected $table = 'entiAcreditadora';

    protected $fillable = ['id','nombre','subOrganismo'];

   
}
