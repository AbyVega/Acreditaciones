<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuiaModel extends Model
{
    public $timestamps=false;

    protected $table='guia';
    protected $fillable=[
        'id',
        'descPunto',
        'instrPunto',
        'docPunto',
        'adiPunto',
        'indicador_id'
    ];

    public function Indicadores(){
        return $this->hasMany(IndicadorModel::all());
    }
}
