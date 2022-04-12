<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([ 

          'usu_name'=>'admin',
            'usu_email'=>'admin@a.com',
            'usu_cedula'=>'123456789',
             'usu_ruc'=>'123456789001',
             'usu_direccion'=>'direccion',
             'usu_telefono'=>'0983348337',
             'password'=>bcrypt('123456789'),
             'per_id'=>1
         ]);

    }
}
