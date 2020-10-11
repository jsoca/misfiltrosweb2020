@extends('home')

@section('content')
  <h1>{{ $articulo->codigo }} </h1>

  <p>
    
    {{ $articulo->equi1}}
  </p>

  <p>
    
    {{ $articulo->equi2}}
  </p>

  <p>
    
    {{ $articulo->equi3}}
  </p>

  <p>
    
    {{ $articulo->equi4}}
  </p>
  <p>
    
    {{ $articulo->equi5}}
  </p>


@stop

<div class="card-header">Buscador de Equivalencias ...</div>

                <!-- Buscador Formulario -->

                                <form class="form-inline ml-4"> 
                                    <div class="input-group input-group-sm">
                                        <input class="form-control-navar" name="search" type="search" placeholderaria-lavel="Search">
                                        <div class="input-group-append">
                                            <button class="btn btn-navar" type="submit">
                                                <i class="fas fa-search"></i>
                                            </button>

                                            
                                            
                                            <!-- <div class="%filtrounico=db::selectone('select' * from) Equivals->where codigo=filbus">  -->

                                        </div>
                                    </div>
                                </form>                
                
                  <div class="card-header"> Ingrese su Número </div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                 
                </div>