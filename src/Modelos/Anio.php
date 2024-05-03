<?php

namespace App\Modelos;

use App\Modelos\DatabaseTable;

class Anio extends DatabaseTable {
  
    public function __construct(){
        parent::__construct('anio', 'idanio', 'App\Modelos\Anio', ['anio', 'idanio']);
    }

    
    public function obtenerAnios() {
        return $this->select('idanio', 'anio');
    }
    
}
