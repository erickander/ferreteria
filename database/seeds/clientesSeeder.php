<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class clientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([ 

          'cli_nombre'=>'Joel',
          'cli_apellido'=>'Caiza',
          'cli_cedula'=>'1758451786',
          'cli_email'=>'joel@gmail.com',
          'cli_direccion'=>'Gambely',
          'cli_telefono'=>'0985472657',
             'per_id'=>2

        ]);
    }
}
