<?php

namespace Database\Seeders;

use App\Models\Fallecido;
use Illuminate\Database\Seeder;

class FallecidoNullSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
		$fallecidoNull = Fallecido::create(['nombre'=>'Sin fallecido']);
    }
}
