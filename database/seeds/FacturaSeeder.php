<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class FacturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Factura')->insert([ 

          'fac_numero_de_factura'=>'001',
          'fac_fecha'=>date('Y-m-d'),
          'fac_total'=>50,
          'fac_iva'=>12,
          'fac_descuento'=>5,
          'fac_observaciones'=>'pendiente',
          'fac_estado'=>1,
             'cli_id'=>1

        ]);
    }
}
