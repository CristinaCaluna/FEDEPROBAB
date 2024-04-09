<?php 

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Categoria extends DatabaseTable {
   
    
    private $categoria;
    private $idcategoria;
   
       public function __construct(){
           parent::__construct('categoria','idcategoria','App\Modelos\Categoria',['categoria','idcategoria']);
       }
   
       public function obprovincias($idcategoria){
           $result1 = "SELECT  * FROM categoria";    
           return $result1;
       }

  }
