<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Nicho extends Model
{
    use HasFactory;
    
	protected $table = 'nichos';
	protected $fillable = [
	'numero', 'alquiler', 'libre', 'ceniza'
	];
	public $timestamps = false;
	
	public function fallecidos(){
		return $this->belongsToMany(Fallecido::class, 'fallecido_nichos');
		
	}
	
	
	
}
