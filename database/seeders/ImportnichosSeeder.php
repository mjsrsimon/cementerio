<?php

namespace Database\Seeders;
use League\Csv\Reader;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\hash;

use App\Models\Nicho;

class ImportnichosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		
		
		$csv = Reader::createFromPath('database/seeds/nichos.csv', 'r');
		//$csv->setHeaderOffset(0);
		$csv = $csv->getRecords();
		
		foreach ($csv as $row) {

			$registro = new Nicho();
			$registro->numero=$row[0];
			$registro->alquiler = NULL;
			$registro->cenizas = NULL;
			$registro->libre = NULL;
			$registro->created_at = NULL;
			$registro->updated_at = NULL;
			
					
			$registro->save();
				
			
			
		}
		
		
		
		
		

	
	
    }
}
