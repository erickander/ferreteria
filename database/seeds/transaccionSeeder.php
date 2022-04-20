<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class transaccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transacciones')->insert([ 

          'tra_fecha'=>date('Y-m-d'),
          'tra_cantidad'=>10,
          'tra_subtotal'=>500,
          'tra_iva'=>15,
          'tra_descuento'=>20,
          'tra_total'=>552,
          'usu_id'=>1,
          'pro_id'=>1,
          'cli_id'=>1,

        ]);
    }
}
