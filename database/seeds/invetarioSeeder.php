<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class invetarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inventarios')->insert([ 

          'inv_fecha'=>date('Y-m-d'),
          'inv_cantidad'=>50,
          'pro_id'=>1,
          'dor_id'=>1,
          'usu_id'=>1,

        ]);
    }
}
