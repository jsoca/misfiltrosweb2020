<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equival;

class EquivalController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');

	}

    public function index()
    
    {
    	$equivals = Equival::all();
        
    	return view('equivals.index' , compact('equivals', 'equi1', 'equi2', 'equi3', 'equi4', 'equi5'));
    }
     public function create()
    {
    	return view('equivals.create');
    }

    public function store(Request $request)
    {
    	// dd($request->all());
    	$rules = [
    			'codigo' => 'required|min:3'     //// controla el ingreso

    	];
    	$messages = [
			'codigo.required' => 'es necesario ingresar un codigo de filtro.',
    		'codigo.min' => 'Como minimo el codigo debe tener 4 caracteres.',
		];
		$this->validate($request, $rules, $messages);

    	$equival = new Equival();
    	$equival->codigo =$request->input('codigo');
    	$equival->equi1 = $request->input('equi1');
    	$equival->equi2 = $request->input('equi2');
    	$equival->equi3 = $request->input('equi3');
    	$equival->equi4 = $request->input('equi4');
    	$equival->equi5 = $request->input('equi5');
    	$equival->save(); // Insert                   //// crea una nueva equivalencia

    	$notificacion = 'La Equivalencia se ha registrado correctamente.';
    	return redirect('/equivals')->with(compact('notificacion'));

    }

    public function edit(Equival $equival)
    {
    	return view('equivals.edit', compact('equival'));
    }

     public function update(Request $request, Equival $equival)
    {
    	// dd($request->all());
    	$rules = [
    			'codigo' => 'required|min:3'

    	];
    	$messages = [
			'codigo.required' => 'es necesario ingresar un codigo de filtro.',
    		'codigo.min' => 'Como minimo el codigo debe tener 4 caracteres.',
		];
		$this->validate($request, $rules, $messages);

    	
    	$equival->codigo =$request->input('codigo');
    	$equival->equi1 = $request->input('equi1');
    	$equival->equi2 = $request->input('equi2');
    	$equival->equi3 = $request->input('equi3');
    	$equival->equi4 = $request->input('equi4');
    	$equival->equi5 = $request->input('equi5');
    	$equival->save(); // actualizo los datos en la base ...

    	$notificacion = 'La equivalencia se ha actualizado correctamente.';

    	return redirect('/equivals')->with(compact('notificacion'));

    }

    public function destroy(Equival $equival)
    {
    	$borrarequival = $equival->codigo;
    	$equival->delete();

    	$notificacion = 'La equivalencia '.$borrarequival.' se ha eliminado correctamente.';

    	return redirect('/equivals')->with(compact('notificacion'));

    }
}


