@extends('layout.ciees')
@section('content')

<!-- Main -->
<article class="wrapper style1">

    <article class="container">
    <div class="text-center">


    <div class="text-center">
    <div class="text-center">

                        <form action="{{route('Fortaleza.store')}}" method="POST">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <header>
        <h2><a href="#">Analisis de fortalezas y oportunidades
            </a></h2>
    </header>
    <div class="table-responsive">
        <table class="table table-striped table-bordered tabled-condensed table-hover">

            <thead class="thead-dark">
            <tr>
                <th scope="col" colspan="2"><h4>Categoria</h4></th>
            </tr>
            </thead>
            <tbody>

                <tr>
                    <th scope="row" width="550"></th>
                    <th width="550"> <select name="categorias_id" required class="mb-3" >
                            <option>Seleciona</option>
                            @foreach($categorias as $categoria)
                                <option value="{{$categoria->id}}">{{$categoria->categoria}}</option>
                            @endforeach
                        </select></th>
                </tr>
            </tbody>
            <thead class="thead-dark">
            <tr>
                <th scope="col" colspan="2"><h4>Oportunidad</h4></th>
            </tr>
            </thead>
            <tbody>

            <tr>
                <th scope="row" width="150">
                <p> Describa brevemente y en orden de prioridad las oportunidades de mejora que el equipo elaborador de la autoevaluación identifica para la categoría</p>

                </th>
                <th><textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="oportunidad"></textarea></th>
            </tr>
            </tbody>

            <thead class="thead-dark">
            <tr>
                <th scope="col" colspan="2"><h4>Fortalezas</h4></th>
            </tr>
            </thead>
            <tbody>

            <tr>
                <th scope="row" width="150">
                <p>Describa brevemente y en orden de prioridad las fortalezas que el equipo elaborador de la autoevaluación identifica para la categoría</p>

                </th>
                <th><textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="fortalezas"></textarea></th>
            </tr>
            </tbody>
            <th></th>
            <th><button type="submit" class="btn btn-success">
                <span class="glyphicon glyphicon-ok"></span></button>
            <button type="reset" class="btn btn-danger">
                <span class="glyphicon glyphicon-remove"></span></button></th>

            {{csrf_field()}}
</tr>

        </table>
    </div>
</form>

            </div>
        </article>
    </article>
</div>

@endsection