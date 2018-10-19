<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeModel extends Model
{
    public $timestamps = false;
    protected $table = 'programaeducativo';
    protected $fillable = ['id', 'nombre', 'matricula', 'evaluableCIEES', 'evaluableCOPAES', 'evaluableInter',
        'status', 'tipoPrograma', 'fechaInicio', 'calificacion', 'fechaDictamen', 'fechaVigencia', 'calidad'];




}