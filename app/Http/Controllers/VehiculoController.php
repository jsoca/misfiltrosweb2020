<?php

namespace App\Http\Controllers;

use App\Equival;
use App\Http\Requests;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    public function index(Request $request)
    {

        $nombre = $request->get('buscar');

        echo ($nombre);

    
        $equivals = Equival::all('id', 'codigo', 'equi1'); // codigo trae colomna codigo

       //$Equivals= Equival::where('equi1', 'like', "%$nombre%")->paginate(5);

       // $Equival = Equival::where('equi2', 'like', "%$nombre%")->paginate(5);


       //echo ($Equival);



       return view('vehiculos.index', compact('equivals'));
}
}      

       //return view('articulos.index', compact('articulos'));



    	$articulos = \DB::table('equivals')->select('id', 'codigo','equi1', 'equi2', 'equi3', 'equi4', 'equi5')->get();

 


    


