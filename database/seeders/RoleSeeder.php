<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     
     
    public function run()
    {
		$roleAdmin = Role::create(['name'=>'Admin']);
		$roleObser = Role::create(['name'=>'Observador']);
		
		/**
		* el metodo "sysncRoles" es para asignar mas de un role y espera un array
		el medoto assignRole es para asignar 1 solo role
		existe la inversa
		*  1-1
		* $role->givePermissionTo($permission);
		  $permission->assignRole($role);
		* 1-N
		* $role->syncPermissions($permissions);
		  $permission->syncRoles($roles);
		*/
		
		
		Permission::create(['name'=>'Ver'])->syncRoles([$roleAdmin, $roleObser]);
		Permission::create(['name'=>'Crear'])->assignRole($roleAdmin);
		Permission::create(['name'=>'Modificar'])->assignRole($roleAdmin);
		Permission::create(['name'=>'Eliminar'])->assignRole($roleAdmin);
		
		
		
    }
    
    
}
