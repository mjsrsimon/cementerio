<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fallecido_nicho extends Model
{
    use HasFactory;
	protected $table = 'fallecido_nicho';
	protected $fillable = ['fallecido_id', 'nicho_id'];
    
    
}
