<?php

namespace App\Http\Controllers;

use App\Indica11Model;
use App\Indica12Model;
use App\IndicadorModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Cat1Contrl extends Controller
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
        $consultas11=Indica12Model::all();
        $consultas12=Indica12Model::all()->where('indicador_id',1.2);
        $consultas13=Indica12Model::all()->where('indicador_id',1.3);
        $consultas14=Indica12Model::all()->where('indicador_id',1.4);
        $indicadores=IndicadorModel::all();

      // dd($consultas);
        return view('web.ciees.categorias.categoria1', compact('consultas11', 'consultas12', 'consultas13', 'consultas14',
            'indicadores'));
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
