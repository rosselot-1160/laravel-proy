<?php

use Illuminate\Database\Seeder;
// para que encuentre la clase User, de lo contrario arroja error
use App\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // aca solo creo un usuario nuevo
        // inicial para administrador
        User::create([
            'name' => 'Marcelo',
            'email' => 'mmdc281031@hotmail.com',
            'password' => bcrypt('1234'),
            'admin' => true
        ]);
    }
}
