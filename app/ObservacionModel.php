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
        'indicadores_id',
        'estadoIncidencia',
        'Area_id'
    ];

    public function indicadores()
    {
        return $this->belongsTo(puntosEvalModel::class, 'id');
    }

    public function areas()
    {
        return $this->belongsTo(AreaModel::class, 'id');
    }
}
