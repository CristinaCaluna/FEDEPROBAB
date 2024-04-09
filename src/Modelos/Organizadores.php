<?php 

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Organizadores  extends DatabaseTable {
 private $organizador;
 private $idorganizador;

    public function __construct(){
        parent::__construct('organizadores','idorganizador','App\Modelos\Organizador',['organizadores','idorganizador']);
    }

    public function obprovincias($idorganizador){
        $result1 = "SELECT  * FROM organizador";    
        return $result1;
    }
   

}