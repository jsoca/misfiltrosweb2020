<?php

namespace App;

use Iluminate\Databese\Eloquent\Model;

Class equivals extends Model
{ 

	protected $table = "equivals";
	protected $fillable = ['codigo'];
	protected $fillable = ['equi1'];

	
	
		

	}
		public function scopeCodigo($query, $codigo)
		{
			if ($codigo) {
			return $query->where('codigo', 'LIKE', "%$codigo%");
		}
	}
		public function scopeEqui1($query, $equi1)
		{
			if ($equi1) {
			return $query->where('equi1', 'LIKE', "%$equi1%");
		}
	}

}

}

