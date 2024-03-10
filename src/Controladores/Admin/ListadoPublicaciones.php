<?php
namespace App\Controladores\Admin;

use App\Aplicacion\Utilidades\Reportes\Reporte;
use App\Aplicacion\Utilidades\Reportes\Reportepubli;
use App\Modelos\Publicaciones;

class ListadoPublicaciones{


    private $publicaciones;

    public function __construct(

        Publicaciones $publicaciones
    )
    {
        $this->publicaciones=$publicaciones;
    }

    public function listar(){

        $publicaciones=$this->publicaciones->select();

        return[

            'titulo'=>'Listado de Publicaciones',
            'template'=>'admin/listadoPublicaciones.html.php',
            'variables'=>['publicaciones'=>$publicaciones]
        ];

        
    }

 
}