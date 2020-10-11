@extends('layouts.panel')

@section('content')

	<div class="container">

		<table class="table table-striped">
			<thead>
		<h1>Equivalencias disponibles</h1>


		 <!-- Buscador Formulario -->

  <nav class="navbar navbar-light float-right">
  <form class="form-inline">

    <input type="text" name="buscar" class="form-control mr-sm-2" id="texto" type="search" placeholder="Buscar por código" aria-describedby="Search">





       <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>

   </form>


<!-- comienzo buscador -->

@foreach ($equivals as $equival)
<option value="{{ $equival->id }}">{{ $equival->codigo }} {{ $equival->equi1 }}</option> <!-- codigo trae colunma codigo -->



@endforeach



  <!--  FIN DEL BUSCADOR   -->


		<ul>
				<th>ID ff</th>
				<th>CODIGO</th>
				<th>EQUIVALENCIA 1</th>
				<th>EQUIVALENCIA 2</th>
				<th>EQUIVALENCIA 3</th>
				<th>EQUIVALENCIA 4</th>
				<th>EQUIVALENCIA 5</th>
			</thead>
			<tbody>


		</tr>
		</tbody>
		</ul>	
				<tr> 





		</ul>	

		

		


		
	
	</div>
		
@stop
