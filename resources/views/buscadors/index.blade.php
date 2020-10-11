@extends('layouts.panel')


@section('content')
  <div class="container">

  <!-- <table class="table table-striped"> -->





      <thead>
    <h1>Buscador de Filtros...</h1>


     <!-- Buscador Formulario -->

     <div class="table-responsive">
        <table class="table aling-items-center table-flush">
              <theard class="thead-light">

  <nav class="navbar navbar-light float-left">
  <form class="form-inline">

    <input type="text" name="buscarpor" class="form-control mr-sm-1" id="texto" type="search" placeholder="Buscar por código" aria-describedby="Search">





       <button class="btn btn-outline-success my-2 my-sm-2" type="submit">Buscar</button>

   </form>

</nav>

<!-- comienzo buscador -->


  <!--  FIN DEL BUSCADOR   -->
  

    <div class="table-responsive">
        <table class="table aling-items-center table-flush">
              <theard class="thead-light">
                <tr>
                  <!--<div class="card-header"> Ingrese su Número </div> -->
                    <th scoupe="col">Filtro </th>
                    <th scoupe="col">Equivalencia 1 </th>
                    <th scoupe="col">Equivalencia 2 </th>
                    <th scoupe="col">Equivalencia 3 </th>
                    <th scoupe="col">Equivalencia 4 </th>
                    <th scoupe="col">Equivalencia 5 </th>
                     <th scoupe="col"> </th>
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
                  </tr>


                 </tbody>
                @endforeach


           

@stop

    




