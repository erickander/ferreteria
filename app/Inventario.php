<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
     public $timestamps=false;
    protected $table='inventarios';
    protected $primaryKey='inv_id';
    protected $fillable = [
        'inv_nombre',
        'inv_fecha',
        'inv_cantidad',
        'pro_id',
        'usu_id',
        'dor_id',
        ];
}
