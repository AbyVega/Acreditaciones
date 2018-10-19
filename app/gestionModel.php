<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gestionModel extends Model
{
    public $timestamps = false;
    protected $table = 'programaeducativo';
    protected $fillable = [
        'id',
        'nombre',
        'matricula',
        'evaluableCIEES',
        'evaluableCOPAES',
        'evaluableInter',
        'status',
        'tipoPrograma',
        'fechaInicio',
        'calificacion',
        'fechaDictamen',
        'fechaVigencia',
        'calidad'];


}
