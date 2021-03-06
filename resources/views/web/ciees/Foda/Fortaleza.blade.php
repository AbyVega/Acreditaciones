@extends('layout.ciees')
@section('content')
    <article class="wrapper style1">

        <article class="container">
            <div class="text-center">
                <form>
                    <header>
                        <h2><a href="#">Deserción escolar</a></h2>
                    </header>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered tabled-condensed table-hover">

                            <thead class="thead-dark">
                            <tr>
                                <th scope="col"><h3>No</h3></th>
                                <th scope="col"><h3>Categoria a evaluar</h3></th>
                                <th scope="col"><h3>Fortalezas</h3></th>
                                <th scope="col"><h3>Oportunidad de mejora</h3></th>
                                <th scope="col" > <a href="{{route('FortalezaReg.Fortaleza')}}">
                                        <button type="button" class="btn btn-secondary">
                                            <span class="glyphicon glyphicon-plus"></span></button>
                                        {{csrf_field()}}
                                    </a></th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($fortalezas as $fortaleza)


                                <tr>
                                    <th scope="row">{{$fortaleza->id}}</th>
                                    <td>{{$fortaleza->Categorias->categoria}}</td>
                                    <td>{{$fortaleza->fortalezas}}</td>
                                    <td>{{$fortaleza->oportunidad}}</td>
                                    <td>
                                        <form id="delete_Entidad" action="{{route('Fortaleza.destroy', $fortaleza->id)}}" method="POST" >
                                            <a href="{{route('Fortaleza.edit', $fortaleza->id)}}">
                                                <button type="button" class="btn btn-secondary">
                                                    <span class="glyphicon glyphicon-pencil"></span></button>
                                                {{csrf_field()}}
                                            </a>
                                            <button type="submit" class="btn btn-danger">
                                                <span class="glyphicon glyphicon-trash"></span></button>
                                            <input name="_method" type="hidden" value="DELETE">
                                            {{csrf_field()}}

                                        </form></td>
                                </tr>

                                {{csrf_field()}}
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </form>

            </div>
        </article>
    </article>
@endsection