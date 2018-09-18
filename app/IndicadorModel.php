<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IndicadorModel extends Model
{
    public $timestamps= false;

    protected $table='indicador';

    protected $fillable=[
      'id',
      'indicador',
        'categorias_id'
    ];

    public function Categoria()
    {
        return $this->hasMany(CategoriasModel:: class,'id' );
    }
}
