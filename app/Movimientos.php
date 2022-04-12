<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movimientos extends Model
{
     public $timestamps=false;
    protected $table='movimientos';
    protected $primaryKey='mov_id';
    protected $fillable = [
        'mov_tipo',
        'mov_detalle',
        'mov_fecha',
        'mov_precio',
        'usu_id',
        ];
}
