<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FortalezaModel extends Model
{
    public $timestamps=false;
    protected $table= 'foda';
    protected $fillable=[
        'id',
        'oportunidad',
        'fortalezas',
        'categorias_id'

    ];

    public function Categorias(){
       return $this->belongsTo(CategoriasModel::class, 'categorias_id', 'id');

    }
}
