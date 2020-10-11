



<?php

namespace App\Http\Controllers;

use App\Equival;
use App\articulos;

use App\Http\Requests;
use Illuminate\Http\Request;

class ArticulosController extends Controller

{

public function busqueda(Request $request)
{
    $input = $request->all();

    if($request->get('busqueda')){
        $equivals = Equival::where("equi1", "LIKE", "%{$request->get('busqueda')}%")
            ->paginate(5);
      return view('articulos')->with('buscar', $equivals);
    }
    //else{
    //  $noticias = Noticia::paginate(5);
    //}

    // return response($noticias);
    return view('articulos);
}


