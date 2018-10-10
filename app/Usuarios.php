<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    public $timestamps= false;
    protected $table='usuarios';
    protected $fillable=[
        'id',
        'nombre',
        'apePaterno',
        'apeMaterno',
        'tipos_id',
        'email',
        'Area_id',
        'programaEducativo_id'];

public function Tipos()
{
    return $this->belongsTo(TiposModel:: class,'tipos_id','id' );
}
public function Area(){
    return $this->belongsTo(AreaModel::class, 'Area_id', 'id');
}
public function Programa(){
    return $this->belongsTo(PeModel::class, 'programaEducativo_id', 'id');
}
}
