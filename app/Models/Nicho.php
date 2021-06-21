<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Nicho extends Model
{
    use HasFactory;
    
    
	protected $fillable = [
	'numero', 'alquiler', 'cenizas', 'libre'
	];
	
	
	/**
	* las tablas pivot crear en orden alfabetico.
	* 
	*/
	
	public function fallecidos()
	{
		return $this -> belongsToMany(Fallecido::class);
	}
	
	

}
