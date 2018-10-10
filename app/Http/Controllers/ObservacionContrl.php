<?php

namespace App\Http\Controllers;

use App\AreaModel;
use App\puntosEvalModel;
use App\ObservacionModel;
use App\ProcessModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ObservacionContrl extends Controller
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
        $observaciones= ObservacionModel::with('Area')->get();

        $procesos=ProcessModel::all();
        $puntos=puntosEvalModel::all();
       // dd($puntos);
        $areas=AreaModel::all();

        return view('web.observaciones.observaciones',compact('observaciones', 'procesos', 'puntos', 'areas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $time = $request['tiempoSolucion'];
       $fecha= Carbon::now();
       $fecha->addYear($time);

      $request['fechaCompromiso']=$fecha;


        ObservacionModel::create($request->all());

        return redirect('Observacion');
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
        $observacion=ObservacionModel::findOrFail($id);
        return view('web.observaciones.observacionEdit', compact('observacion'));
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
        $observacion=ObservacionModel::findOrFail($id);

        $observacion->update($request->all());

        return redirect('Observacion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $observacion=ObservacionModel::findOrFail($id);
        $observacion->delete();

        return redirect('Observacion');
    }
}
