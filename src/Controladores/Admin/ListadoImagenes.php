<?php
namespace App\Controladores\Admin;

use App\Aplicacion\Utilidades\Reportes\Reporte;
use App\Aplicacion\Utilidades\Reportes\Reportepubli;
use App\Modelos\Imagenes;

class listadoImagenes{


    private $imagenes;

    public function __construct(

        Imagenes $imagenes
    )
    {
        $this->imagenes=$imagenes;
    }

    public function listar(){

        $imagenes=$this->imagenes->select();

        return[

            'titulo'=>'Listado de Imagenes',
            'template'=>'admin/listadoImagenes.html.php',
            'variables'=>['imagenes'=>$imagenes]
        ];

        
    }
}