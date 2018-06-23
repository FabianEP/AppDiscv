<?php

use Illuminate\Database\Seeder;

//Importing laravel-permission models
use App\Models\Security\User;
use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::where('name', '=', 'Super Admin')->firstOrFail();

        $user = new User();
        $user->name = 'AppAdmin';
        $user->email = 'AppAdmin@example.com';
        $user->password = bcrypt('secret');
        $user->save();

        $user->assignRole($role); //Assigning role to user
    }
}
