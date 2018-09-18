<?php

namespace App\Http\Controllers;

use App\AreaModel;
use App\Usuarios;
use Illuminate\Http\Request;

class UsuariosContrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $programas = PeModel::all();
        $tipos= TiposModel::all();
        $usuarios=Usuarios::all();
        $entidades=EntidadModel::all();
        $procesos=ReporProsModel::all();
        $observaciones=ObservacionModel::all();
        $areas=AreaModel::all();



        return view('web.registros',compact('programas','tipos', 'usuarios', 'entidades', 'procesos', 'observaciones', 'areas'));

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
        Usuarios::create($request->all());

        return redirect('registros');
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
       $usuarios=Usuarios::findOrFail($id);
        return view('web.usuarios.editarUsu', compact('usuarios'));
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
        $usuarios=Usuarios::findOrFail($id);

        $usuarios->update($request->all());

        return redirect('registros');
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
