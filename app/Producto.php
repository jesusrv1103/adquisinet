<?php

namespace ADQUISINET;

use Illuminate\Database\Eloquent\Model;
use ADQUISINET\Marca;
use ADQUISINET\Partida;
use ADQUISINET\Unidad;
use ADQUISINET\Giro;
use ADQUISINET\Impuesto;

class Producto extends Model
{

    public function marca()
    {  //$post-> category->name
        return $this->belongsTo(Marca::class); //pertenece a
    }

    public function partida()
    {  //$post-> category->name
        return $this->belongsTo(Partida::class); //pertenece a
    }

    public function unidad()
    {  //$post-> category->name
        return $this->belongsTo(Unidad::class); //pertenece a
    }

    public function giro ()
    {  //$post-> category->name
        return $this->belongsTo(Giro::class); //pertenece a
    }


    public function impuestos()
    {
        return $this->belongsToMany(Impuesto::class);

    }



}
