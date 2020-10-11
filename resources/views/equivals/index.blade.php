@extends('layouts.panel')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">Buscador de Equivalencias ...</div>
                <div class="col text-right">

                 

                <a href="{{ url('equivals/create') }} " class="btn btn-sm btn-success">
                  Nuevo Filtro 
                </a>
                </div>
              </div>
            </div>
            <div class="card-body">
              @if (session('notificacion'))
            <div class="alert alet-success" role="alert">
                {{ session('notificacion') }}
            </div>
            @endif
          </div> 
            <div class="table-responsive">
        <table class="table aling-items-center table-flush">
              <theard class="thead-light">
                <tr>
                  <div class="card-header"> Ingrese su Número </div>
                    <th scoupe="col">Filtro .......</th>
                    <th scoupe="col">Equivalencia 1 ........</th>
                    <th scoupe="col">Equivalencia 2 ........</th>
                    <th scoupe="col">Equivalencia 3 ........</th>
                    <th scoupe="col">Equivalencia 4 ........</th>
                    <th scoupe="col">Equivalencia 5 ........</th>

                  </tr>
              </theard>
              <tbody>
                @foreach ($equivals as $equival)
                
                <tr>
                <th scope ="row">
                  {{ $equival->codigo}}
                </th>
                 <td>
                  {{ $equival->equi1}}
                </td>
                <td>
                  {{ $equival->equi2}}
                </td>
                  <td>
                  {{ $equival->equi3}}
                </td>
                  <td>
                  {{ $equival->equi4}}
                </td>
                  <td>
                  {{ $equival->equi5}}
                </td>
                 
                <td>

                 
                  <form action="{{ url('/equivals/'.$equival->id)  }}" method="POST">
                    @csrf
                    @method('DELETE')


                    <a href="{{ url('/equivals/'.$equival->id.'/edit') }}" class="btn btn-sm btn-primary">Editar</a>
                  <button class="btn btn-sm btn-danger" type="submit">Eliminar</button>
                  </form>
                </td>
              </tr>
              @endforeach 

              </tbody>
        </table>


                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    </div>



                
            
        
    </div>
</div>
  <div class="card-header"> Usted se ha logeado correctamente.</div>
   
@endsection
