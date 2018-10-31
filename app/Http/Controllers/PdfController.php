<?php

namespace App\Http\Controllers;

use App\IndicadorModel;
use App\ObservacionModel;
use App\PeModel;
use App\ProcessModel;
use Illuminate\Http\Request;
use iio\libmergepdf\Merger;
use Dompdf\Dompdf;
//use Maatwebsite\Excel\Excel;
use Maatwebsite\Excel\Facades\Excel;

class PdfController extends Controller
{
    public function getIndex()
    {

        $observaciones=ObservacionModel::with('Indicador')->get();
        $procesos=ProcessModel::all();

        return view('web.acreditacion', compact('programas', 'observaciones', 'procesos'));
    }

    public function crearPDF($programa, $vistaurl, $tipo,$procesos)
    {


        $date =date('Y-m-d');
        $view =\View::make($vistaurl, compact('programa', 'observaciones', 'date', 'indicador',
            'procesos'))->render();

        $pdf = \App::make('dompdf.wrapper');


        $pdf -> loadHTML($view);

        if($tipo==1){return $pdf->stream('reporte');}



    }

    public function crearReporte($tipo, $id)
    {
        $vistaurl='web.pdf.pdf';
        $programa=PeModel::findOrfail($id);
        $process = ProcessModel::with('Observacion')->where('programaEducativo_id',$id)->get();
        $procesos = $process[0]->Observacion()->get();

        return $this->crearPDF($programa, $vistaurl, $tipo, $procesos);

    }

    public function crearExcel($id)
    {
        Excel::create('Excel', function ($excel) use ($id){
           $excel->sheet('Datos', function ($sheet) use ($id){
               $sheet->row(1,['Numero', 'nombre']);
               $process = ProcessModel::with('Observacion')->where('programaEducativo_id',$id)->get();
               $procesos = $process[0]->Observacion()->get();
               $sheet->fromArray($procesos);
           }) ;
        })->export('xls');



    }

}
