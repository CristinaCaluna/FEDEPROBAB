<?php

namespace App\Modelos;

use App\Modelos\DatabaseTable;
use Illuminate\Database\Eloquent\Model;

class Mes extends Model {
  
   
    
    public function obtenerMeses() {
        return $this->select('idmes', 'mes')->orderBy('idmes', 'asc')->get();
    }
    
    
}
