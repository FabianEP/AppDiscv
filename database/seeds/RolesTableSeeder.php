<?php

use Illuminate\Database\Seeder;

//Importing laravel-permission models
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = Permission::where('name', '=', 'Administer roles & permissions')->first();

        $role = new Role();
        $role->name = 'Super Admin';
        $role->save();

        $role->givePermissionTo($permission);
    }
}
