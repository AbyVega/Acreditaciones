<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProcessModel extends Model
{
    public $timestamps=false;

    protected $table='proceso';

    protected $fillable=[
        'id',
        'estadoPrograma',
        'versionIntrumento',
        'fechaInicio',
        'Financiero',
        'FIPCuota',
        'cuota',
        'FIPViaticos',
        'viaticos',
        'material',
        'entiAcreditadora_id',
        'programaEducativo_id',
        'visitas_id'
    ];


    public function Entidad()
    {
        return $this->belongsTo(EntidadModel::class, 'entiAcreditadora_id','id');
    }


    public function Programa()
    {
        return $this->belongsTo(PeModel::class, 'programaEducativo_id','id');
    }
    public function Visitas(){
        return $this->belongsTo(visitasModel::class, 'visitas_id', 'id');
    }

    public function Observacion(){
        return $this->hasMany(ObservacionModel::class, 'proceso_id', 'id');
    }
}
