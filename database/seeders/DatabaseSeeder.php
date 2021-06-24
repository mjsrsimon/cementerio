<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Seeds;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
		$this->call(RoleSeeder::class);
		$this->call(UserSeeder::class);
		$this->call(ImportNichoSeeder::class);
		$this->call(FallecidoNullSeeder::class);
		
    }
}
