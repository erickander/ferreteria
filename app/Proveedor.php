<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
   public $timestamps=false;
    protected $table='proveedor';
    protected $primaryKey='dor_id';
    protected $fillable = [
        'dor_nombre',
        'dor_apellido',
        'dor_ruc',
        'dor_cedula',
        'dor_direccion',
        'dor_telefono',
        'dor_fecha',
        ];
}
