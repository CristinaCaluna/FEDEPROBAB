<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Canton extends Model
{
    protected $table = 'provincias'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'idprovincias'; // Nombre de la clave primaria

    public function selectc()
    {
        return $this->select('idprovincias', 'canton')
                    ->groupBy('idprovincias', 'canton')
                    ->get();
    }
    
    // Otros métodos de la clase Canton
}
