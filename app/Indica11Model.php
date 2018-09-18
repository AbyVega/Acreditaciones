<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Indica11 extends Model
{
    public $timestamps=false;

    protected $table='datos';

    protected $fillable=[
        'id',
        'descripcion',
        'instruccion',
        'valoracion',
        'documentos',
        'adicional',
        'indicador_id'
    ];

    public function indicador(){
        return $this->belongsTo(Indica11Model::class, 'id');

    }
}
