

<?php

Route::get('/', function () {

 // return redirect('/login'); // view('welcome');

 return view('welcome');

 

});



    

Auth::routes();


// return view('welcome');

Route::get('/home', 'HomeController@index')->name('home'); // {{ route('home')}}
//Route::get('/home/{home}/edit','HomeController@edit'); //envia o ve los datos 



// Buscador 

Route::get('/buscadors', 'BuscadorController@index');
Route::get('/buscadors/create', 'BuscadorController@create'); // formulario de registro
Route::get('/buscadors/{buscador}/edit','BuscadorController@edit'); //envia o ve los datos de los equivalentes

// Route::post('/buscadors', 'BuscadorController@store'); // envio del formulario y lo registra en la base de datos
// Route::put('/buscadors/{buscador}','BuscadorController@update'); // actualiza
// Route::delete('/buscadors/{buscador}','BuscadorController@destroy'); // lo borra de la base de datos

// tabla  Equival   ---- Equivals ----  campos: codigo - equi1 - equi2 - equi3 - equi4 - equi5 - 

Route::get('/equivals', 'EquivalController@index');  // estas tres rutas devuelven vistas ...
Route::get('/equivals/create', 'EquivalController@create'); //  veo el formulario de registro
Route::get('/equivals/{equival}/edit', 'EquivalController@edit'); //  editar o ver los datos de los equivalentes 

Route::post('/equivals', 'EquivalController@store'); // guardo ... envio del formulario y lo registra en la base de datos
Route::put('/equivals/{equival}', 'EquivalController@update'); // gestiona la edicion ... actualiza los datos ...
Route::delete('/equivals/{equival}', 'EquivalController@destroy'); // para eliminar

// busca .... rutas de Consultas de equivalencias //

//     Route::get('articulos', 'ArticulosController@index');

//    Route::get('Equivals/{id}', 'ArticulosController@show');

/// aca empieza
Route::get('/vehiculos', 'VehiculoController@index');
Route::get('/vehiculos/create', 'VehiculoController@create'); // formulario de registro
Route::get('/vehiculos/{vehiculo}/edit','VehiculoController@edit'); //envia o ve los datos de los equivalentes


/// aca termina


// ruta para el buscador

//    Route::get('welcome', 'HomeController@buscador@index');

Route::get('articulos/buscar', 'ArticulosController@busqueda');

// Route::get('articulos/index', 'ArticulosController@busqueda');







