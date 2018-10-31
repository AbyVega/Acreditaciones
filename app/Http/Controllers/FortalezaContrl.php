<?php

namespace App\Http\Controllers;

use App\CategoriasModel;
use App\FortalezaModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FortalezaContrl extends Controller
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

        $fortalezas=FortalezaModel::with('Categorias')->get();

        return view('web.ciees.Foda.Fortaleza',compact('fortalezas'));

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
        FortalezaModel::create($request->all());
        return view('web.Ciees');

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
        $fortalezas=FortalezaModel::findOrFail($id);
        //$categorias=CategoriasModel::where('categoria_id', $id)->get();
        return view('web.ciees.Foda.editFoda', compact('fortalezas', 'id'));
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
        $fortalezas=FortalezaModel::findOrFail($id);
        $categorias=CategoriasModel::all();
        $fortalezas->update($request->all());
        return redirect('Fortaleza');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fortalezas=FortalezaModel::findOrFail($id);
        $fortalezas->delete();
        return redirect('Fortaleza');

    }
}
