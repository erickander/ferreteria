<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
public $timestamps=false;
    protected $table='productos';
    protected $primaryKey='pro_id';
    protected $fillable = [
        'pro_nombre',
        'pro_calidad',
        'pro_tamaño',
        'pro_tamaño',
        'pro_descripcion',
        'pro_precio',
        ];
}
