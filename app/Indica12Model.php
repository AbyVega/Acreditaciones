<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Indica12Model extends Model
{
    public $timestamps = false;

    protected $table = 'datos';

    protected $fillable = [
        'id',
        'descripcion',
        'instruccion',
        'valoracion',
        'documentos',
        'adicional',
        'indicador_id'
    ];

    public function Indicadores()
    {
        return $this->hasMany(IndicadorModel:: class,'id' );
    }
}
