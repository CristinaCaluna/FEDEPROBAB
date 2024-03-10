<?php

namespace App\Controladores;

use App\Modelos\Artesanados;
use App\Modelos\Usuarios;
use App\Modelos\Publicaciones;
use App\Modelos\Imagenes;

class Inicio  {


    private Publicaciones $publicaciones;
    private Imagenes $imagenes;
    private Usuarios $usuarios;


    public function __construct()
    {
        
    }

    
  
    public function error(){
        return[

            'template'=>'front/error.html.php',
            'titulo'=>'Error encontrado'
        ];



    }

        
    public function publicaG(){

      
        $this->publicaciones = new Publicaciones;
        $this ->imagenes = new Imagenes;
        
        $publicaciones=$this->publicaciones->selectFromColumn('estado',Publicaciones::ESTADO_ACTIVO);
        $imagenes = $this -> imagenes ->selectFromColumn('estado', Imagenes::ESTADO_ACTIVO);
  
         //var_dump($imagenes);
         //die;
        return[

            'template'=>'front/publicaciones.html.php',
            'titulo'=>'Inicio',
            'variables'=>[
                'publicaciones'=>$publicaciones,
                'imagenes' => $imagenes          
            ]
        ];
    }

    public function listarpublica(){

        
        $this->publicaciones = new Publicaciones;
       

        $idpublicaciones= $_GET['idpublicaciones'];

        $publicaciones=$this->publicaciones->verPublicacion($idpublicaciones);
        
        //var_dump($publicaciones);
        //die;
        return[

            'template'=>'front/publicacion.html.php',
            'titulo'=>'Noticia',
            'variables'=>[
                'publicaciones'=>$publicaciones
            ]

        ];


    }


}