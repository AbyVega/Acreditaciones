<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriasModel extends Model
{
    public $timestamps=false;

    protected $table='categorias';

    protected $fillable=[
        'id',
        'categoria',
        'ejes_id'
        ];
public function Ejes(){
    return $this->belongsTo(EjesModel::class, 'eje_id', 'id');
}
}
