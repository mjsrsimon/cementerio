<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
		User::create([
		'name' => 'adCementerio',
		'email' => 'admin.cementerio@prueba.com',
		'password' => bcrypt('12345')
	])->assignRole('Admin');
		
		User::create([
			'name' => 'obCementerio',
			'email' => 'observer.cementerio@prueba.com',
			'password' => bcrypt('12345')
		])->assignRole('Observador');
    }
}
