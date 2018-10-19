<?php

namespace App\Http\Controllers;

use App\AreaModel;
use App\EntidadModel;
use App\ObservacionModel;
use App\PeModel;
use App\ProcessModel;
use App\TiposModel;
use App\Usuarios;
use App\visitasModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class registrosContrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        Carbon::setLocale('es');
    }

    public function index()
    {
        $programas = PeModel::all();
        $tipos= TiposModel::all();
        $usuarios=Usuarios::with('Tipos', 'Area', 'Programa')->get();
        $entidades=EntidadModel::all();
        $procesos=ProcessModel::with('Entidad','Programa', 'Visitas')->get();
        $observaciones = ObservacionModel::all();
        $visitas=visitasModel::all();

        $areas=AreaModel::all();


        return view('web.registros',compact('programas','tipos', 'usuarios', 'entidades', 'procesos','observaciones', 'areas', 'visitas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuarios=Usuarios::findOrFind($id);
        return redirect('registros', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuarios=Usuarios::findOrFail($id);
        $usuarios->delete();

        return redirect('registros');
    }
}
