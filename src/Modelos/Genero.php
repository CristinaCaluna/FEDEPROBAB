<?php 

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Genero extends DatabaseTable {

    private $idgenero;
    private $genero;

    public function __construct(){
        parent::__construct('genero','idgenero','App\Modelos\Genero',['genero','idgenero']);
    }

    public function obgenero($idgenero){
        $result1 = "SELECT  * FROM genero";    
        return $result1;
    }



}