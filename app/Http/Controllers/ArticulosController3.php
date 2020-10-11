<?php

namespace App\Http\Controllers;

use App\Equival;
use App\articulos;

use App\Http\Requests;
use Illuminate\Http\Request;

class ArticulosController extends Controller


{

    public function index()
    
    {
        $equivals = Equival::all();
        
        return view('articulos.index' , compact('equivals'));
    }
//return view('articulos.index', compact('equivals'));

}

    	//$equivals = Equival::'$codigo'
    		//->where('codigo', 'LIKE', "%buscar%")
    		//->equi1('equi1')
    		//->equi2('equi2')
    		//->equi3('equi3')
    		//->equi4('equi4')
    		//->equi5('equi5')
    		//->paginate(5);
    		
    	//$articulos = Equival::Search($request->buscador)('id', 'desc');
    	//$articulos->each(function($codigo){
    		//$articulos->codigo;
    	//$articulos->user;
    //})

    	//dd($codigo);
    	/// ------------------------
    	//return view('articulos.index', compact('articulos'));

        //public function index()
       // {

       // $buscar = Equival::find('$buscar');

        



        //$buscar = Equival::select('codigo', 'equi1', 'equi2', 'equi3', 'equi4', 'equi5')->WHERE 'codigo' LIKE '%".'$buscar'."%' OR equi1 LIKE '%".'$buscar'."%' OR equi2 LIKE '%".'$buscar'."%';

        //var_dump($articulo);

       // $SQL_READ = "SELECT " FROM equivals WHERE codigo LIKE '%".'$buscar'."%' OR equi1 LIKE '%".'$buscar'."%' OR equi2 LIKE '%".'$buscar'."%';

        //$sql_query = mysqli_query($conn,$SQL_READ);

   // }

    //public function show($id)

    //{

    	//$articulo = Equival::find($codigo);

    	//$articulo = Equival::select('codigo', 'equi1', 'equi2', 'equi3', 'equi4', 'equi5')->where('id', '=', $id)->first();

    	//var_dump($articulo);
    	
    	
    	//return view('articulos.show', compact('articulo'));

    //}
   // public function edit(Equival $codigo)

   // {

    	

    	//$articulo = Equival::select('codigo', 'equi1', 'equi2', 'equi3', 'equi4', 'equi5')->where('id', '=', $id)->first();

    	//ar_dump($articulo);
    	
    	

    	//return view('$articulo', compact('articulo'));
    	


    


