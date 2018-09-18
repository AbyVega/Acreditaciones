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
        'password',
        'Area_id',
        'programaEducativo_id'];

public function Tipos()
{
    return $this->hasMany(TiposModel:: class,'id' );
}
public function Area(){
    return $this->hasMany(AreaModel::class, 'id');
}
}
