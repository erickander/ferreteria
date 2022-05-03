<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class factura extends Model
{
    public $timestamps=false;
    protected $table='Factura';
    protected $primaryKey='fac_id';
    protected $fillable = [
        'fac_fecha',
        'fac_nombre',
        'fac_total',
        'fac_iva',
        'fac_descuento',
        'fac_observaciones',
        'fac_estado',
          'cli_id',
        ];
}
