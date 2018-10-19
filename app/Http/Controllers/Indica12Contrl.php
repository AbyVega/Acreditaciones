<?php

namespace App\Http\Controllers;

use App\CategoriasModel;
use App\GuiaModel;
use App\Indica12Model;
use App\IndicadorModel;
use App\Usuarios;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Indica12Contrl extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
       Carbon::setLocale('es');
    }

    public function index()
    {
       $indicadores=IndicadorModel::all();
        $consultas=Indica12Model::with('Indicadores')->get();
        $guias=GuiaModel::all();
        $categorias=CategoriasModel::all();
        $usuarios=Usuarios::all();


       return view('web.ciees.RegDatos', compact('consultas', 'indicadores', 'guias',
           'categorias', 'usuarios'));
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
        Indica12Model::create($request->all());
        return redirect('Ciees');
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
        $consultas=Indica12Model::findOrFail($id);
        $guia = GuiaModel::where('indicador_id',$id)->get();

        return view('web.ciees.EditDatos', compact('consultas','guia', 'id'));
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

        $consultas=Indica12Model::findOrFail($id);
        $indicadores=IndicadorModel::all();

        $consultas->update($request->all());

        return redirect('Ciees');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $consultas=Indica12Model::findOrFail($id);
        $consultas->delete();

        return redirect('Ciees');
    }

    public function mostrarGuia($id){


        $consultas=Indica12Model::findOrFail($id);
        $guia = GuiaModel::where('indicador_id',$id)->get();
        $usuarios=Usuarios::all();


        return view('web.ciees.Datos',compact('consultas','guia', 'id', 'usuarios'));


    }
}
