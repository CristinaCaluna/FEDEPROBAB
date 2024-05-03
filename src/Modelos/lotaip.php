<?php

namespace App\Modelos;

use App\Modelos\DatabaseTable;
use Illuminate\Database\Eloquent\Model;

class lotaip extends Model {
    protected $table = 'lotaip_li';
   
    
        public function obtenerLotaip() {
            return $this->select('id', 'literal')->orderBy('literal', 'asc')->distinct('literal')->get();
        }
    
    
    public function obtenerLotaipli() {
        return $this->select('id', 'subliteral')->orderBy('id', 'asc')->get();
    } 
    
}
