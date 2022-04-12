<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transacciones extends Model
{
    public $timestamps=false;
    protected $table='transacciones';
    protected $primaryKey='tra_id';
    protected $fillable = [
        'tra_fecha',
        'tra_cantidad',
        'tra_subtotal',
        'tra_iva',
        'tra_total',
        'tra_descuento',
        'usu_id',
         'pro_id',
          'cli_id',
        ];
}
