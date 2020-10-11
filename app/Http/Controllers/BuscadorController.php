<?php

namespace App\Http\Controllers;

use App\Equival;
use App\articulos;

use App\Http\Requests;
use Illuminate\Http\Request;

class BuscadorController extends Controller


{

public function index(Request $request)
    {

        $codigo = $request->get('buscarpor');
        $equi1 = $request->get('buscarpor');
        $equi2 = $request->get('buscarpor');
        $equi3 = $request->get('buscarpor');
        $equi4 = $request->get('buscarpor');
        $equi5 = $request->get('buscarpor');

    
          
            $equivals = Equival::
                     where('codigo', 'like', "%$codigo%")
                    ->orWhere('equi1', 'like', "%$equi1%")
                    ->orWhere('equi2', 'like', "%$equi2%")
                    ->orWhere('equi3', 'like', "%$equi3%")
                    ->orWhere('equi4', 'like', "%$equi4%")
                    ->orWhere('equi5', 'like', "%$equi5%")
                    ->get();
   

            return view('buscadors.index' , compact('equivals', 'equi1', 'equi2', 'equi3', 'equi4', 'equi5'));
 
    }

}

     



    

