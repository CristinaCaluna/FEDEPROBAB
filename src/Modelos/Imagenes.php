<?php 

namespace App\Modelos;

class Imagenes extends DatabaseTable{
  
    public const ADMIN = 'Admin';

    public const ESTADO_ACTIVO = 'activo';
    public const ESTADO_INIACTIVO = 'inactivo';
    public $idimagen;
    public $foto;

    

    public function __construct(){
        parent::__construct('imagen','idimagen','App\Modelos\Imagenes',['imagen','idimagen']);
    }

    public function verImagen($idimagen){

        $consulta='SELECT *FROM imagen WHERE estado =:estado'. 

        ' AND  idimagen =:idimagen';

       $result=$this->runQuery($consulta,['estado'=>self::ESTADO_ACTIVO,'idimagen'=>$idimagen]);

       return $result->fetchAll(\PDO::FETCH_CLASS,\stdClass::class);


    }

}