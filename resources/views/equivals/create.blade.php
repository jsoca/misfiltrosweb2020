@extends('layouts.panel')

@section('content')
<div class="card shadow">
    <div class="card-hearder border-0">
      <div class="row aling-items-center">
        <div class="col">
            
                <h3 class="mb-0">Nuevo Filtro ....</h3>
        </div>        
              <div class="col text-right">

                <a href="{{ url('/equivals') }} " class="btn btn-sm btn-default">
                  Cancelar y volver
                </a>
                </div>
              </div>
            </div>
            <div class="card-body">
              @if ($errors->any())
              <div ckass="alert alert-danger" role="alert">

              
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </div>

            
            @endif
                  
              <form action="{{ url('equivals') }}" method="post">
                @csrf
              <div class="form-group">
                  <label for="codigo" > Ingrese su Número </label>
                  <input type="text" name="codigo" class="form-control" value="{{ old('codigo') }}" required>
                </div>

                 <div class="form-group">
                  <label for="equi1"> Equivalencia 1 </label>
                  <input type="text" name="equi1" class="form-control" value="{{ old('name') }}"> 
                </div>


            <div class="form-group">
                  <label for="equi2" > Equivalencia 2 </label>
                  <input type="text" name="equi2" class="form-control" value="{{ old('name') }}">
                </div>

                <div class="form-group">
                  <label for="equi3" > Equivalencia 3 </label>
                  <input type="text" name="equi3" class="form-control" value="{{ old('name') }}">
                </div>

                 <div class="form-group">
                  <label for="equi4" > Equivalencia 4 </label>
                  <input type="text" name="equi4" class="form-control" value="{{ old('name') }}">
                </div>

                 <div class="form-group">
                  <label for="equi5" > Equivalencia 5 </label>
                  <input type="text" name="equi5" class="form-control" value="{{ old('name') }}">
                </div>
                <button type="submit" class="btn btn-primary">
                  Guardar
              </button>

              </form>
            </div>
          </div>    
        </div>
              
            
                  

                
@endsection
