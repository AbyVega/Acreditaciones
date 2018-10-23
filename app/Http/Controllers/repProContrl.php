<?php

namespace App\Http\Controllers;

use App\PeModel;
use App\ProcessModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class repProContrl extends Controller
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
        $procesos=ProcessModel::all();
        $programas=PeModel::all();

        return view('web.registros',compact('procesos', 'programas'));
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
        ProcessModel::create($request->all());
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
        $proceso=ProcessModel::findOrFail($id);
        return view('web.procesoAcred.procesoEdit', compact('proceso'));
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
        $proceso=ProcessModel::findOrFail($id);

        $proceso->update($request->all());

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
        $proceso=ProcessModel::findOrFail($id);
        $proceso->delete();

        return redirect('registros');
    }
}
