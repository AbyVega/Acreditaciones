<?php

namespace App\Http\Controllers;

use App\CategoriasModel;
use App\FortalezaModel;
use App\Indica12Model;
use App\puntosEvalModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class categoriasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        Carbon::setLocale('es');
    }

    public function ciees()
    {
        return view('web.Ciees');
    }

    public function area()
    {
        $areas=AreaModel::all();
        return view('web.registros',compact( 'areas'));

    }

    public function Acreditacion()
    {
        return view('web.acreditacion');
    }

    public function categoria1()
    {
        $consultas11=Indica12Model::with('Indicadores')->get()->where('indicador_id',1);
        $consultas12=Indica12Model::with('Indicadores')->get()->where('indicador_id',2);
        $consultas13=Indica12Model::with('Indicadores')->get()->where('indicador_id',3);
        $consultas14=Indica12Model::with('Indicadores')->get()->where('indicador_id',4);
        $indicadores=puntosEvalModel::all();

        // dd($consultas);
        return view('web.ciees.categorias.categoria1', compact('consultas11', 'consultas12', 'consultas13', 'consultas14',
            'indicadores'));
    }

    public function categoria11()
    {
        $consultas21=Indica12Model::with('Indicadores')->get()->where('indicador_id',4);
        $consultas22=Indica12Model::with('Indicadores')->get()->where('indicador_id',5);
        $consultas23=Indica12Model::with('Indicadores')->get()->where('indicador_id',6);
        $consultas24=Indica12Model::with('Indicadores')->get()->where('indicador_id',7);
        $consultas25=Indica12Model::with('Indicadores')->get()->where('indicador_id',8);
        $indicadores=puntosEvalModel::all();
        $categorias=CategoriasModel::all();
        $fortalezas=FortalezaModel::all();

        // dd($categorias);
        return view('web.ciees.categorias.categoria11', compact('consultas21', 'consultas22', 'consultas23',
            'consultas24', 'consultas25', 'indicadores', 'categorias', 'fortalezas'));
    }

    public function categoria2()
    {
        $consultas31=Indica12Model::with('Indicadores')->get()->where('indicador_id',9);
        $consultas32=Indica12Model::with('Indicadores')->get()->where('indicador_id',10);
        $consultas33=Indica12Model::with('Indicadores')->get()->where('indicador_id',11);
        $consultas34=Indica12Model::with('Indicadores')->get()->where('indicador_id',12);
        $consultas35=Indica12Model::with('Indicadores')->get()->where('indicador_id',13);
        $indicadores=puntosEvalModel::all();

        // dd($consultas);
        return view('web.ciees.categorias.categoria2', compact('consultas31', 'consultas32', 'consultas33',
            'consultas34', 'consultas35', 'indicadores'));
    }

    public function categoria21()
    {
        $consultas41=Indica12Model::all()->where('indicador_id',13);
        $consultas42=Indica12Model::all()->where('indicador_id',14);
        $consultas43=Indica12Model::all()->where('indicador_id',15);
        $consultas44=Indica12Model::all()->where('indicador_id',16);
        $consultas45=Indica12Model::all()->where('indicador_id',17);
        $categorias=CategoriasModel::all();
        $fortalezas=FortalezaModel::all();

        // dd($consultas);
        return view('web.ciees.categorias.categoria21', compact('consultas41', 'consultas42', 'consultas43',
            'consultas44', 'indicadores', 'fortalezas'));
    }

    public function categoria3()
    {
        $consultas51=Indica12Model::all()->where('indicador_id',18);
        $consultas52=Indica12Model::all()->where('indicador_id',19);
        $consultas53=Indica12Model::all()->where('indicador_id',20);
        $indicadores=puntosEvalModel::all();

        // dd($consultas);
        return view('web.ciees.categorias.categoria3', compact('consultas51', 'consultas52', 'consultas53',
            'indicadores'));
    }

    public function categoria31()
    {
        $consultas61=Indica12Model::all()->where('indicador_id',21);
        $consultas62=Indica12Model::all()->where('indicador_id',22);
        $consultas63=Indica12Model::all()->where('indicador_id',23);
        $indicadores=puntosEvalModel::all();
        return view('web.ciees.categorias.categoria31', compact('consultas61', 'consultas62', 'consultas63'
            , 'indicadores'));
    }

    public function categoria32()
    {
        $consultas71=Indica12Model::all()->where('indicador_id',24);
        $consultas72=Indica12Model::all()->where('indicador_id',25);
        $indicadores=puntosEvalModel::all();
        $fortalezas=FortalezaModel::all();
        return view('web.ciees.categorias.categoria32', compact('consultas71', 'consultas72', 'indicadores', 'fortalezas'));
    }

    public function categoroia4()
    {
        $consultas81=Indica12Model::all()->where('indicador_id',26);
        $consultas82=Indica12Model::all()->where('indicador_id',27);
        $consultas83=Indica12Model::all()->where('indicador_id',28);
        $consultas84=Indica12Model::all()->where('indicador_id',29);
        $consultas85=Indica12Model::all()->where('indicador_id',30);
        $consultas86=Indica12Model::all()->where('indicador_id',31);
        $indicadores=puntosEvalModel::all();

        // dd($consultas);
        return view('web.ciees.categorias.categoria4', compact('consultas81', 'consultas82', 'consultas83',
            'consultas84', 'consultas85', 'consultas86', 'indicadores'));
    }

    public function categoria41()
    {
        $consultas91=Indica12Model::all()->where('indicador_id',32);
        $consultas92=Indica12Model::all()->where('indicador_id',33);
        $consultas93=Indica12Model::all()->where('indicador_id',34);
        $consultas94=Indica12Model::all()->where('indicador_id',35);
        $consultas95=Indica12Model::all()->where('indicador_id',36);
        $indicadores=puntosEvalModel::all();
        $fortalezas=FortalezaModel::all();

        // dd($consultas);
        return view('web.ciees.categorias.categoria41', compact('consultas91', 'consultas92', 'consultas93',
            'consultas94', 'consultas95', 'indicadores', 'fortalezas'));
    }

    public function categoria5()
    {
        $consultas10=Indica12Model::all()->where('indicador_id',37);
        $consultas101=Indica12Model::all()->where('indicador_id',38);
        $consultas102=Indica12Model::all()->where('indicador_id',39);
        $consultas103=Indica12Model::all()->where('indicador_id',40);
        $indicadores=puntosEvalModel::all();

        // dd($consultas);
        return view('web.ciees.categorias.categoria5', compact('consultas10', 'consultas101', 'consultas102',
            'consultas103', 'indicadores'));
    }

    public function categoria51()
    {
        $consultas111=Indica12Model::all()->where('indicador_id',41);
        $consultas112=Indica12Model::all()->where('indicador_id',42);
        $consultas113=Indica12Model::all()->where('indicador_id',43);
        $consultas114=Indica12Model::all()->where('indicador_id',44);
        $consultas115=Indica12Model::all()->where('indicador_id',45);
        $indicadores=puntosEvalModel::all();

        // dd($consultas);
        return view('web.ciees.categorias.categoria51', compact('consultas111', 'consultas112', 'consultas113',
            'consultas114','consultas115', 'indicadores'));
    }

    public function categoria52()
    {
        $consultas121=Indica12Model::all()->where('indicador_id',46);
        $consultas122=Indica12Model::all()->where('indicador_id',47);
        $consultas123=Indica12Model::all()->where('indicador_id',48);
        $consultas124=Indica12Model::all()->where('indicador_id',49);
        $consultas125=Indica12Model::all()->where('indicador_id',50);
        $indicadores=puntosEvalModel::all();
        $fortalezas=FortalezaModel::all();
        // dd($consultas);
        return view('web.ciees.categorias.categoria52', compact('consultas121', 'consultas122', 'consultas123',
            'consultas124', 'consultas125', 'indicadores', 'fortalezas'));
    }

}
