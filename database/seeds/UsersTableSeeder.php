<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Role::truncate();
        DB::table('assigned_roles')->truncate();

        $user = User::create([
            'name' => 'Eddy Rufino',
            'email' => 'eddyjaair@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        $role = Role::create([
            'name' => 'admin',
            'display_name' => 'Administrador',
            'description' => 'Administrador de todo el sitio'
        ]);

         $user->roles()->save($role);

        $user = User::create([
            'name' => 'Jaair Silva',
            'email' => 'jaair@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        $role = Role::create([
            'name' => 'moderador',
            'display_name' => 'Moderador',
            'description' => 'Moderador de todo el sitio'
        ]);

        $user->roles()->save($role);
    }
}
