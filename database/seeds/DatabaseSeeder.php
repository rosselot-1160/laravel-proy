<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // para hacer efectiva su ejecucion.... php artisan db:seed
        $this->call(UsersTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        // $this->call(UserSeeder::class);
    }
}
