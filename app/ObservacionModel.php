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
        'fechaObserva',
        'fechaCompromiso',
        'accionesTomar',
        'indicador_id',
        'estadoIncidencia',
        'Area_id',
        'proceso_id',
        'visitas_id',
        'categorias_id'
    ];

    public function Puntos()
    {
        return $this->belongsTo(IndicadorModel::class, 'indicador_id', 'id');
    }

    public function Area()
    {
        return $this->belongsTo(AreaModel::class, 'Area_id', 'id');
    }

    public function Visitas(){
        return $this->belongsTo(visitasModel::class, 'visitas_id', 'id');
    }

    public function Categorias(){
        return $this->belongsTo(CategoriasModel::class, 'categorias_id', 'id');
    }

    public function Procesos(){
        return $this->belongsTo(ProcessModel::class, 'proceso_id', 'id');
    }
}
