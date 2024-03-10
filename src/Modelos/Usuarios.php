<?php

namespace App\Modelos;

class Usuarios extends DatabaseTable{

  
    public const ADMIN = 'Admin'; 
    public const SECRETARIA = 'Secretaria';
    
    public const ESTADO_ACTIVO = 'activo';
    public const ESTADO_INIACTIVO = 'inactivo';

    public $idusuarios;
    public $nombres;
    public $rol;
    public $apellidos;
     public $estado;
    public $clave;
 


    public function __construct()
    {
       parent::__construct( 'usuarios','idusuarios');
       
    }


    public function tieneRol($rol){
        if($this->rol === $rol) {
            return true;
        }

        return false;
    }
    
  


    public function desplegarse(){

        $consulta2='SELECT *FROM usuarios WHERE estado =:estado'. ' AND rol =:rol';

       $result2=$this->runQuery($consulta2,['estado'=>self::ESTADO_ACTIVO,'rol'=> self::ADMIN]);

       return $result2->fetchAll(\PDO::FETCH_CLASS,\stdClass::class);


    }
 
}
