<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller


{

    // <!--Query Scope -->
public function index(Request $request)
    {

      $nombre = $request->get('buscador');

     // print($nombre);

      // $equival = equivals::where('codigo','equi1','equi2','equi3','equi4','equi5','like',"%$nombre%")->paginate(5);

         return view('/buscadors/index', compact('Equival'));
       
      
}
      

//<!--      -->

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    
    public function __construct()
    {
        $this->middleware('auth');
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   
    }

    }
 
