<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class proveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proveedor')->insert([ 

          'dor_nombre'=>'juan',
          'dor_apellido'=>'perez',
          'dor_ruc'=>'17241588001',
          'dor_cedula'=>'17241588',
          'dor_fecha'=>'2003-01-14',
          'dor_telefono'=>'0912345678',
          'dor_direccion'=>'Nueva Aurora',

        ]);
    
    }
}
