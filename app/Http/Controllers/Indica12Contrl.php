<?php

namespace App\Http\Controllers;

use App\CategoriasModel;
use App\GuiaModel;
use App\Http\Requests\datos;
use App\Indica12Model;
use App\IndicadorModel;
use App\ObservacionModel;
use App\PeModel;
use App\Usuarios;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Order;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;

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
     *
     */

    public function store(datos $request)
    {
      $guia = GuiaModel::where('indicador_id',$request['indicador_id'])->get();
        $usuario = Usuarios::where('email',$request['username'])->get();

        Indica12Model::create($request->all());


        $data = array('name' => "nombre", "body" => "body", 'guia' => $guia);

        Mail::send('email.IndicadorEmail', $data, function($message) use ($usuario) {
            $message->to($usuario[0]->email)
                ->subject('SIGECE CUVALLES - C.'." ".$usuario[0]->apePaterno." ".$usuario[0]->apeMaterno." ".$usuario[0]->nombre." ".', favor de leer la siguiente información.');
            $message->from('sistema.acreditaciones@gmail.com','Sistema de Acreditación (SIGECE)');

        });
        return redirect('ciees');
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

        return redirect('ciees');
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

        return redirect('ciees');
    }

    public function mostrarGuia($id){


        $consultas=Indica12Model::findOrFail($id);
        $guia = GuiaModel::where('indicador_id',$id)->get();
        $usuarios=Usuarios::all();


        return view('web.ciees.Datos',compact('consultas','guia', 'id', 'usuarios'));


    }

    public function envioCorreo($usuario, $indicador){


        return 'Email enviado correctamente';
    }
    public function mostrarDatos($indicador){

        $nombre = IndicadorModel::findOrfail($indicador);

        $datos = Indica12Model::where('indicador_id',$indicador)->get();

        $obs = ObservacionModel::where('indicador_id',$indicador)->get();


        if(count($obs) > 0) {
          //  dd("si tiene");
            $proEdu = $obs[0]->Procesos->programaEducativo_id;
            $programaEducativo = PeModel::findOrFail($proEdu);
            $nombrePrograma = $programaEducativo->nombre;
        }
        else{
          //  dd("no tiene");
            $nombrePrograma = " ";
        }

      // dd($obs);


        return view('web.ciees.vistaDatos',compact('datos','indicador','nombre','nombrePrograma'));
    }
}
