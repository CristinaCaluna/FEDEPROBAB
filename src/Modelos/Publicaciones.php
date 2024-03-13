<?php 

namespace App\Modelos;
use Illuminate\Database\Eloquent\Model;
class Publicaciones extends DatabaseTable{
  
    public const ADMIN = 'Admin';
    public const ESTADO_ACTIVO = 'activo';
    public const ESTADO_INIACTIVO = 'inactivo';
   



    public function __construct(){
        parent::__construct('publicaciones','idpublicaciones','App\Modelos\Publicaciones',['publicaciones','idpublicaciones']);
    }


        public function verPublicacion($idpublicaciones) {

        $result = Publicaciones::where('estado', self::ESTADO_ACTIVO)
       ->where('idpublicaciones', $idpublicaciones)->get(); // Ejecutar la consulta y obtener los resultados
        // var_dump($result);
        return $result;
    }
    

}


