<?php

namespace App\Http\Controllers;

use App\AreaModel;
use App\CategoriasModel;
use App\FortalezaModel;
use App\IndicadorModel;
use App\ObservacionModel;
use App\PeModel;
use App\ProcessModel;
use Carbon\Carbon;
class categoriasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        Carbon::setLocale('es');
    }

    public function repProcess()

    {
        $programas = PeModel::all();
        return view('web.reporteProcesos',compact('programas'));
    }

    public function ciees()
    {
        return view('web.Ciees');
    }
    public function FortalezaReg()
    {
        $fortalezas=FortalezaModel::with('Categorias')->get();
        $categorias=CategoriasModel::all();
        return view('web.ciees.Foda.RegFortaleza', compact('fortalezas', 'categorias'));
    }

public function gestion(){
    $procesos=ProcessModel::with('Entidad','Programa', 'Observacion')->get();
    return view('web.gestionProcesos', compact( 'procesos'));
}

    public function area()
    {
        $areas=AreaModel::all();
        return view('web.registros',compact( 'areas'));

    }

    public function Acreditacion()
    {
        $programas=PeModel::all();
        return view('web.acreditacion', compact('programas'));
    }

    public function gestionObserva(){

        $observaciones= ObservacionModel::with('Area', 'Puntos', 'Categorias', 'Procesos')->get();

        $programas = PeModel::all();



        return view('web.gestionObserva',compact('observaciones','programas'));

    }

    public function categoria1()
    {
        $indicadores=IndicadorModel::all();

        return view('web.ciees.categorias.categoria1', compact( 'indicadores'));
    }

    public function categoria11()
    {
       $indicadores=IndicadorModel::all();

        return view('web.ciees.categorias.categoria11', compact( 'indicadores'));
    }

    public function categoria2()
    {
       $indicadores=IndicadorModel::all();

        return view('web.ciees.categorias.categoria2', compact( 'indicadores'));
    }

    public function categoria21()
    {
       $indicadores=IndicadorModel::all();

        return view('web.ciees.categorias.categoria21', compact('indicadores'));
    }

    public function categoria3()
    {

        $indicadores=IndicadorModel::all();

        // dd($consultas);
        return view('web.ciees.categorias.categoria3', compact( 'indicadores'));
    }

    public function categoria31()
    {

        $indicadores=IndicadorModel::all();
        return view('web.ciees.categorias.categoria31', compact('indicadores'));
    }

    public function categoria32()
    {

        $indicadores=IndicadorModel::all();

        return view('web.ciees.categorias.categoria32', compact( 'indicadores'));
    }

    public function categoria4()
    {
          $indicadores=IndicadorModel::all();

        // dd($consultas);
        return view('web.ciees.categorias.categoria4', compact('indicadores'));
    }

    public function categoria41()
    {
        $indicadores=IndicadorModel::all();


        // dd($consultas);
        return view('web.ciees.categorias.categoria41', compact( 'indicadores'));
    }

    public function categoria5()
    {

        $indicadores=IndicadorModel::all();


        return view('web.ciees.categorias.categoria5', compact( 'indicadores'));
    }

    public function categoria51()
    {

        $indicadores=IndicadorModel::all();

        // dd($consultas);
        return view('web.ciees.categorias.categoria51', compact( 'indicadores'));
    }

    public function categoria52()
    {

        $indicadores=IndicadorModel::all();

        return view('web.ciees.categorias.categoria52', compact( 'indicadores'));
    }

}
