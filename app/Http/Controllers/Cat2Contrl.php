<?php

namespace App\Http\Controllers;

use App\Indica12Model;
use App\IndicadorModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Cat2Contrl extends Controller
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
        $consultas31=Indica12Model::all();
        $consultas32=Indica12Model::all()->where('indicador_id',3.2);
        $consultas33=Indica12Model::all()->where('indicador_id',3.3);
        $consultas34=Indica12Model::all()->where('indicador_id',3.4);
        $consultas35=Indica12Model::all()->where('indicador_id',3.5);
        $indicadores=IndicadorModel::all();

        // dd($consultas);
        return view('web.ciees.categorias.categoria2', compact('consultas31', 'consultas32', 'consultas33',
            'consultas34', 'consultas35', 'indicadores'));
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
