<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Fallecido extends Model
{
    use HasFactory;
    
	protected $fillable = [
	'nombre', 'primer_apellido', 'segundo_apellido', 'situacion', 'decreto', 'OS', 'FechaSepelio', 'observaciones'
	];
	
	
	public function nichos()
	{
		return $this -> belongsToMany(Nicho::class, 'fallecido_nichos','fallecido_id','nicho_id');
	}
	
	
}
