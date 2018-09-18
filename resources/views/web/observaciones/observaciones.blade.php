@extends('layout.acred')
@section('content')
    <!-- Main -->

    <div class="wrapper style1">

        <div class="container">

            <div class="col-8 col-12-mobile imp-mobile" id="content">
                <article id="main">

    <form action="{{route('Observacion.store')}}" method="POST">


    <header>
        <h2><a href="#">Observaciones</a></h2>
    </header>
    <div class="table-responsive">
        <table class="table table-striped table-bordered tabled-condensed table-hover">
            <thead>

            <th><h3><a>No</a></h3></th>
            <th><h3><a>Indicador</a></h3></th>
            <th><h3><a>Incidencia</a></h3></th>
            <th><h3><a>Tiempo de Solución</a></h3></th>
            <th><h3><a>Fecha Compromiso</a></h3></th>
            <th><h3><a>Entidad Responsable</a></h3></th>
            <th colspan="2"><h3><a></a>Estado de Incidencia</h3></th>

            </tr>
            </thead>
            <tr>
                <td class="bg-success"><input name="id" type="hidden"></td>
                <td class="bg-success"><select name="indicadores_id">
                        @foreach($indicadores as $indicador)
                            <option value="{{$indicador->id}}">{{$indicador->indicador}}</option>
                        @endforeach
                    </select></td>
                <td class="bg-success"><textarea name="observaIncidencia" type="text"></textarea></td>
                <td class="bg-success"><select name="tiempoSolucion">
                        <option>1 año</option>
                        <option>2 años</option>
                        <option>3 años</option>
                    </select></td>
                <td class="bg-success"><input name="fechaCompromiso" type="date"></td>
                <td class="bg-success"><select name="Area_id">
                        @foreach($areas as $area)
                            <option value="{{$area->id}}">{{$area->area}}</option>
                        @endforeach

                    </select></td>
                <td class="bg-success"><select name="estadoIncidencia">
                        <option>Solventada</option>
                        <option>En proceso</option>
                        <option>No iniciada</option>
                    </select></td>

                <td class="bg-success"><button type="submit" class="btn btn-successt">
                        <span class="glyphicon glyphicon-ok"></span></button>
                    <button type="reset" class="btn btn-danger">
                        <span class="glyphicon glyphicon-remove"></span></button>
                </td>
            </tr>
            {{csrf_field()}}
            <tr>
                <td colspan="14"><img src="images/formulario.png"  width="1300px" height="2px" /></td>
            </tr>
</form>
@foreach($observaciones as $observacion)
    <tr>


        <td>{{$observacion->id}}</td>
        <td>{{$indicador->indicador}}</td>
        <td>{{$observacion->observaIncidencia}}</td>
        <td>{{$observacion->tiempoSolucion}}</td>
        <td>{{$observacion->fechaCompromiso}}</td>
        <td>{{$area->area}}</td>
        <td>{{$observacion->estadoIncidencia}}</td>
        <td>
            <form id="delete_Observacion" action="{{route('Observacion.destroy', $observacion->id)}}" method="POST" >
                <a href="{{route('Observacion.edit', $observacion->id)}}">
                    <button type="button" class="btn btn-secondary">
                        <span class="glyphicon glyphicon-pencil"></span></button>
                </a>
                <button type="submit" class="btn btn-danger">
                    <span class="glyphicon glyphicon-trash"></span></button>
                <input name="_method" type="hidden" value="DELETE">
                {{csrf_field()}}

            </form>
        </td>
    </tr>
    @endforeach

    </tbody>
    </table>
    </div>
            </article>

        </div>



    </div>

    </div>

    <!-- Footer -->
    <div id="footer">
        <div class="container">
            <div class="row">

                <!-- Tweets -->
                <section class="col-4 col-12-mobile">
                    <header>
                        <h2 class="icon fa-twitter circled"><span class="label">Tweets</span></h2>
                    </header>
                    <ul class="divided">
                        <li>
                            <article class="tweet">
                                Amet nullam fringilla nibh nulla convallis tique ante sociis accumsan.
                                <span class="timestamp">5 minutes ago</span>
                            </article>
                        </li>
                        <li>
                            <article class="tweet">
                                Hendrerit rutrum quisque.
                                <span class="timestamp">30 minutes ago</span>
                            </article>
                        </li>
                        <li>
                            <article class="tweet">
                                Curabitur donec nulla massa laoreet nibh. Lorem praesent montes.
                                <span class="timestamp">3 hours ago</span>
                            </article>
                        </li>
                        <li>
                            <article class="tweet">
                                Lacus natoque cras rhoncus curae dignissim ultricies. Convallis orci aliquet.
                                <span class="timestamp">5 hours ago</span>
                            </article>
                        </li>
                    </ul>
                </section>

                <!-- Posts -->
                <section class="col-4 col-12-mobile">
                    <header>
                        <h2 class="icon fa-file circled"><span class="label">Posts</span></h2>
                    </header>
                    <ul class="divided">
                        <li>
                            <article class="post stub">
                                <header>
                                    <h3><a href="#">Nisl fermentum integer</a></h3>
                                </header>
                                <span class="timestamp">3 hours ago</span>
                            </article>
                        </li>
                        <li>
                            <article class="post stub">
                                <header>
                                    <h3><a href="#">Phasellus portitor lorem</a></h3>
                                </header>
                                <span class="timestamp">6 hours ago</span>
                            </article>
                        </li>
                        <li>
                            <article class="post stub">
                                <header>
                                    <h3><a href="#">Magna tempus consequat</a></h3>
                                </header>
                                <span class="timestamp">Yesterday</span>
                            </article>
                        </li>
                        <li>
                            <article class="post stub">
                                <header>
                                    <h3><a href="#">Feugiat lorem ipsum</a></h3>
                                </header>
                                <span class="timestamp">2 days ago</span>
                            </article>
                        </li>
                    </ul>
                </section>

                <!-- Photos -->
                <section class="col-4 col-12-mobile">
                    <header>
                        <h2 class="icon fa-camera circled"><span class="label">Photos</span></h2>
                    </header>
                    <div class="row gtr-25">
                        <div class="col-6">
                            <a href="#" class="image fit"><img src="images/pic10.jpg" alt="" /></a>
                        </div>
                        <div class="col-6">
                            <a href="#" class="image fit"><img src="images/pic11.jpg" alt="" /></a>
                        </div>
                        <div class="col-6">
                            <a href="#" class="image fit"><img src="images/pic12.jpg" alt="" /></a>
                        </div>
                        <div class="col-6">
                            <a href="#" class="image fit"><img src="images/pic13.jpg" alt="" /></a>
                        </div>
                        <div class="col-6">
                            <a href="#" class="image fit"><img src="images/pic14.jpg" alt="" /></a>
                        </div>
                        <div class="col-6">
                            <a href="#" class="image fit"><img src="images/pic15.jpg" alt="" /></a>
                        </div>
                    </div>
                </section>

            </div>
            <hr />
            <div class="row">
                <div class="col-12">

                    <!-- Contact -->
                    <section class="contact">
                        <header>
                            <h3>Nisl turpis nascetur interdum?</h3>
                        </header>
                        <p>Urna nisl non quis interdum mus ornare ridiculus egestas ridiculus lobortis vivamus tempor aliquet.</p>
                        <ul class="icons">
                            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                            <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                            <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                            <li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
                            <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
                            <li><a href="#" class="icon fa-linkedin"><span class="label">Linkedin</span></a></li>
                        </ul>
                    </section>

                    <!-- Copyright -->
                    <div class="copyright">
                        <ul class="menu">
                            <li>&copy; Centro Universitario de los Valles.</li><li>2018 <a href="/">SIGECE</a></li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </div>

    </div>
    </body>
    <script src="{{asset('estilo/js/jquery.min.js')}}"></script>
    <script src="{{asset('estilo/js/jquery.dropotron.min.js')}}"></script>
    <script src="{{asset('estilo/js/jquery.scrolly.min.js')}}"></script>
    <script src="{{asset('estilo/js/jquery.scrollex.min.js')}}"></script>
    <script src="{{asset('estilo/js/browser.min.js')}}"></script>
    <script src="{{asset('estilo/js/breakpoints.min.js')}}"></script>
    <script src="{{asset('estilo/js/util.js')}}"></script>
    <script src="{{asset('estilo/js/main.js')}}"></script>
@endsection