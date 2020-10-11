


@extends('layouts.panel')

@section('content')

    <div class="panel panel-success">
            <div class="panel-heading">buscar Codigo</div>
            <form action="equival/buscar" method="get" onsubmit="return showLoad()">
            <div class="panel-body">
                <label class="label-control">Codigo III</label>
                <input type="text" name="codigo" class="form-control" placeholder="Ingresar codigo/equivalencia" required="required">
                <br>

        </div>
        <div class="panel-footer">
            <button type="submit" class="btn btn-success">buscar</button>
        </div>
        </form>
    </div>

    <!-- check if $buscar variable is set, display buscar result -->
    @if (isset($buscar))
        <div class="panel panel-success">
            <div class="panel-heading">Resultado de la busqueda</div>
            <div class="panel-body">

                <div class='table-responsive'>
                  <table class='table table-bordered table-hover'>
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>PROGRAMA</th>
                        <th>TURNO</th>
                        <th>FECHA</th>

                      </tr>
                    </thead>
                    <tbody>

                    @foreach($buscar as $buscars)
                        <tr>
                            <td>{{$buscars->id}}</td>
                            <td>{{$buscars['codigo']}}</td>
                            <td>{{$buscars['equi1']}}</td>
                            <td>{{$buscars['equi2']}}</td>
                        </tr>
                    @endforeach

                    </tbody>
                        </table>
                        <center>{{ $buscar->appends(Request::only('equi1','codigo'))->links() }}</center>
                    </div>

            </div>
            <div class="panel-footer">
                <a href="{{url('equival/buscar')}}" class="btn btn-warning">Restaurar busqueda</a>
            </div>
        </div>
    @endif

    @stop

