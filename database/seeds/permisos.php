<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class permisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permisos')->insert([ 

          'per_tipo'=>'Administrador'

        ]);
    }
}
