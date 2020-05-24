<?php

namespace ADQUISINET;
use ADQUISINET\Municipio;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{

    public function municipio()
    {  //$post-> category->name
        return $this->belongsTo(Municipio::class); //pertenece a
    }

    protected $table= "proveedores";
    protected  $dates= ['fecha_vigencia_cedula'];
}
