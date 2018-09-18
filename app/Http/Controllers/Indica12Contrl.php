<?php

namespace App\Http\Controllers;

use App\GuiaModel;
use App\Indica12Model;
use App\IndicadorModel;
use Illuminate\Http\Request;

class Indica12Contrl extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $indicadores=IndicadorModel::all();
        $consultas=Indica12Model::all();
        $guias=GuiaModel::all();
//dd($indicadores);
       return view('web.ciees.RegDatos', compact('consultas', 'indicadores', 'guias'));
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

        return view('web.ciees.EditDatos', compact('consultas'));
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
}
