<?php

namespace App\Http\Controllers;

use App\Indica12Model;
use App\puntosEvalModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Cat51Contrl extends Controller
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
        //
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
        //
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
        //
    }
}
