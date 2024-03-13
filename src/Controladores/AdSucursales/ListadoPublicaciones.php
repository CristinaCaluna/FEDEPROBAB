<?php
namespace App\Controladores\AdSucursales;

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

    public function listarad(){

        $publicaciones=$this->publicaciones->select();

        return[

            'titulo'=>'Listado de Publicaciones',
            'template'=>'adsucursal/listadoPublicaciones.html.php',
            'variables'=>['publicaciones'=>$publicaciones]
        ];

        
    }

 
}