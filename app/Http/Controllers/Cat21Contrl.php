<?php

namespace App\Http\Controllers;

use App\Indica12Model;
use App\puntosEvalModel;
use Illuminate\Http\Request;

class Cat21Contrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consultas41=Indica12Model::all()->where('indicador_id',4.1);
        $consultas42=Indica12Model::all()->where('indicador_id',4.2);
        $consultas43=Indica12Model::all()->where('indicador_id',4.3);
        $consultas44=Indica12Model::all()->where('indicador_id',4.4);
        $consultas45=Indica12Model::all()->where('indicador_id',4.5);
        $indicadores=puntosEvalModel::all();

        // dd($consultas);
        return view('web.ciees.categorias.categoria21', compact('consultas41', 'consultas42', 'consultas43',
            'consultas44', 'indicadores'));
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