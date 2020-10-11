@extends('layouts.panel')

@section('content')
<div class="card shadow">
    <div class="card-hearder border-0">
      <div class="row aling-items-center">
        <div class="col">
            
                <h3 class="mb-0">Editar Filtro ....</h3>
        </div>        
                <div class="col text-right">

                <a href="{{ url('/equivals') }} " class="btn btn-sm btn-default">
                  Cancelar y volver
                </a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form action="{{ url('equivals/'.$equival->id) }}" method="post">
                @csrf
                @method('PUT')
              <div class="form-group">
                  <label for="codigo" > Ingrese su Número </label>
                  <input type="text" name="codigo" class="form-control" value="{{ old('codigo',
                  $equival->codigo) }}" required>
                </div>
                 <div class="form-group">
                  <label for="equi1" > Equivalencia 1 </label>
                  <input type="text" name="equi1" class="form-control" value="{{ old('equi1',
                  $equival->equi1) }}" required> 
                </div>


            <div class="form-group">
                  <label for="equi2" > Equivalencia 2 </label>
                  <input type="text" name="equi2" class="form-control" value="{{ old('equi2',
                  $equival->equi2) }}">
                </div>

                <div class="form-group">
                  <label for="equi3" > Equivalencia 3 </label>
                  <input type="text" name="equi3" class="form-control" value="{{ old('equi3',
                  $equival->equi3) }}">
                </div>

                 <div class="form-group">
                  <label for="equi4" > Equivalencia 4 </label>
                  <input type="text" name="equi4" class="form-control" value="{{ old('equi4',
                  $equival->equi4) }}">
                </div>

                 <div class="form-group">
                  <label for="equi5" > Equivalencia 5 </label>
                  <input type="text" name="equi5" class="form-control" value="{{ old('equi5', $equival->equi5) }}">
                </div>
                <button type="submit" class="btn btn-primary">
                  Guardar
              </button>

              </form>
            </div>
              
        </div>
              
            
                  

                
@endsection