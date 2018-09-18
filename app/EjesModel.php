<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EjesModel extends Model
{
    public $timestamps=false;

    protected $table='ejes';

    protected $fillable=[
      'id',
      'eje',
      'entiAcreditadora_id'
    ];

    public function entiAcreditadora(){
        return $this->belongsTo(EntidadModel::class, 'id');
    }
}
