<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TiposModel extends Model
{
    public $timestamps = false;



    protected $table = 'tipos';

    protected $fillable = ['id','tipo'];

    public function Usuarios()
    {
        return $this->belongsTo(UsuariosModel::class, 'id');
    }
}
