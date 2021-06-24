<?php

namespace Database\Seeders;
use League\Csv\Reader;
use Illuminate\Database\Seeder;
use App\Models\Nicho;

class ImportNichoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$csv = Reader::createFromPath('database/seeders/nichos.csv', 'r');

		$csv = $csv->getRecords();

		foreach ($csv as $row) {

			$registro = new Nicho();
			$registro->numero=$row[0];
			$registro->created_at = NULL;
			$registro->updated_at = NULL;
			$registro->save();

		}
    }
}
