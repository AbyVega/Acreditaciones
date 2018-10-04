<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ObservacionModel extends Model
{
    public $timestamps=false;

    protected $table='observaciones';

    protected $fillable=[
        'id',
        'observaIncidencia',
        'tiempoSolucion',
        'fechaCompromiso',
        'puntosEvalu_id',
        'estadoIncidencia',
        'Area_id',
        'proceso_id'
    ];

    public function indicadores()
    {
        return $this->belongsTo(puntosEvalModel::class, 'id', 'id');
    }

    public function Area()
    {
        return $this->belongsTo(AreaModel::class, 'Area_id', 'id');
    }
}
