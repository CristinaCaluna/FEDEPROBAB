<?php 

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class EventoDeportivo extends DatabaseTable {

    private $evento;
    private $idevento;
   
       public function __construct(){
           parent::__construct('evento_deportivo','idevento','App\Modelos\EventoDeportivo',['evento_deportivo','idevento']);
       }
   
       public function obprovincias($idorganizador){
           $result1 = "SELECT  * FROM evento_deportivo";    
           return $result1;
       }

}
