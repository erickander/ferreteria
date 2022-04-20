<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(permisos::class);
        $this->call(productosSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(proveedorSeeder::class);
        $this->call(clientesSeeder::class);
        $this->call(transaccionSeeder::class);


    }
}
