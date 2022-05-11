<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
    public $timestamps=false;
    protected $table='detalle_facturas';
    protected $primaryKey='dat_id';
    protected $fillable = [
        'pro_id',
        'fac_id',
        'dat_cantidad',
        'dat_VU',
        'dat_VT',
        ];
}
