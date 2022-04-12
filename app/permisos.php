<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class permisos extends Model
{
     public $timestamps=false;
    protected $table='permisos';
    protected $primaryKey='per_id';
    protected $fillable = [
        'per_tipo',
        
        ];
}
