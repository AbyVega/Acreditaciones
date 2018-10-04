<?php

namespace App\Http\Controllers;

use App\Indica12Model;
use App\puntosEvalModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Cat4Contrl extends Controller
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
