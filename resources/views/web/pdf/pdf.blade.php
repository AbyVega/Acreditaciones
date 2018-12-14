
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reporte de Procesos de acreditacion</title>
    <style>

        .col-md-12 {
            width: 100%;
        }

        .box {
            position: relative;
            border-radius: 3px;
            background: #ffffff;
            border-top: 3px solid #d2d6de;
            margin-bottom: 20px;
            width: 100%;
            box-shadow: 0 1px 1px rgba(0,0,0,0.1);
            background-color: #ECF0F5;
        }

        .box-header {
            color: #444;
            display: block;
            padding: 10px;
            position: relative;
        }

        .box-header.with-border {
            border-bottom: 1px solid #f4f4f4;
        }


        .box-header .box-title {
            display: inline-block;
            font-size: 18px;
            margin: 0;
            line-height: 1;
        }

        .box-body {
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-bottom-right-radius: 3px;
            border-bottom-left-radius: 3px;
            padding: 10px;

        }


        .box-footer {
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-bottom-right-radius: 3px;
            border-bottom-left-radius: 3px;
            border-top: 1px solid #f4f4f4;
            padding: 10px;
            background-color: #fff;
        }


        .table-bordered {
            border: 1px solid #f4f4f4;
        }


        .table {
            width: 100%;
            max-width: 100%;
            margin-bottom: 20px;
        }

        table {
            background-color: transparent;
        }

        .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td,
        .table-bordered>tbody>tr>td, .table-bordered>tfoot>tr>td {
            border: 1px solid #f4f4f4;
        }


        .badge {
            display: inline-block;
            min-width: 10px;
            padding: 3px 7px;
            font-size: 18px;
            font-weight: 100;
            line-height: 1;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            background-color: #777;
            border-radius: 10px;
        }

        .bg-red {
            background-color: #dd4b39 !important;
        }


    </style>

</head>
<body>

<div class="col-md-12">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Reporte de procesos de acreditación<br> <?=  $date; ?></h3>
        </div><!-- /.box-header -->
        <div class="box-body">

            <table class="table table-bordered">
                <thead>

                                <tr>
                                    <th >Programa Educativo</th>
                                    <td>{{$programa->nombre}}</th>
                                </tr>
                                <tr>
                                    <th>Tipo de programa </th>
                                    <td> {{$programa->tipoPrograma}}</th>
                                </tr>
                                <tr>
                                    <th>Fecha de Inicio </th>
                                    <td>{{$programa->fechaInicio}}</th>
                                </tr>
                                <tr>
                                    <th >Evaluable CIEES</th>
                                    <td> {{$programa->evaluableCIEES}} </th>
                                </tr>
                                <tr>
                                    <td>Calificación </th>
                                    <td> {{$programa->calificacion}}</th>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>{{$programa->status}}</th>
                                </tr>
                                <tr>
                                    <th>Fecha de vigencia</th>
                                    <td> {{$programa->fechaVigencia}}</th>
                                </tr>
                                <tr>
                                    <th>Calidad</th>
                                    <td>{{$programa->calidad}}</th>
                                </tr>
                                <tr>
                                    <th >Evaluable COPAES</th>
                                    <td> {{$programa->evaluableCOPAES}} </th>
                                </tr>
                                <tr>
                                    <th>Calificación </th>
                                    <td> {{$programa->calificacionC}}</th>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>{{$programa->status}}</th>
                                </tr>
                                <tr>
                                    <th>Fecha de vigencia</th>
                                    <td> {{$programa->fechaVigenciaC}}</th>
                                </tr>
                                <tr>
                                    <th>Calidad</th>
                                    <td>{{$programa->calidadC}}</th>
                                </tr>
                                <tr>
                                    <th >Evaluable Internacional</th>
                                    <td> {{$programa->evaluableInter}} </th>
                                </tr>
                                <tr>
                                    <th>Calificación </th>
                                    <td> {{$programa->calificacionI}}</th>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>{{$programa->statusI}}</th>
                                </tr>
                                <tr>
                                    <th>Fecha de vigencia</th>
                                    <td> {{$programa->fechaVigenciaI}}</th>
                                </tr>
                                <tr>
                                    <th>Calidad</th>
                                    <td>{{$programa->calidadI}}</th>
                                </tr>
  </tr>
 </table>

                <h3 class="box-title">Reporte de Observaciones<br> <?=  $date; ?></h3>
                @foreach($procesos as $observacion)

                    <table class="table table-bordered">
                        <tr>
                            <th >Proceso</th>
                            <td> {{$observacion->proceso_id}} </th>
                        </tr>
                        <tr>
                            <th >Indicador</th>
                            <td>{{$observacion->Indicador->indicador}} </th>
                        </tr>
                        <tr>
                            <th >Incidencia</th>
                            <td> {{$observacion->observaIncidencia}} </th>
                        </tr>
                        <tr>
                            <th >Acción a tomar</th>
                            <td> {{$observacion->accionesTomar}} </th>
                        </tr>
                        <tr>
                            <th >Tiempo de solución</th>
                            <td> {{$observacion->tiempoSolucion}} </th>
                        </tr>
                        <tr>
                            <th >Fecha compromiso</th>
                            <td> {{$observacion->fechaObserva}} </th>
                        </tr>
                        <tr>
                            <th >Entidad responsable</th>
                            <td> {{$observacion->Area->area}} </th>
                        </tr>
                        <tr>
                            <th >Estado de la incidencia</th>
                            <td> {{$observacion->estadoIncidencia}} </th>
                        </tr>
                    </table>
                @endforeach

        </div><!-- /.box-body -->
        <div class="box-footer clearfix">

        </div>
    </div><!-- /.box -->


</div>



</body>
</html>

