<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class productosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([ 

          'pro_nombre'=>'Taladro',
          'pro_calidad'=>'Alta',
          'pro_tamaño'=>'grande',
          'pro_estado'=>1 ,
          'pro_descripcion'=>'taladro martillo grande',
          'pro_precio'=>250,

        ]);
    }
}
