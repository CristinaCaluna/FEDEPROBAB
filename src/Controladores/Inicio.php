<?php

namespace App\Controladores;


use App\Modelos\Usuarios;
use App\Modelos\Publicaciones;


class Inicio  {


    private Publicaciones $publicaciones;
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

        
    public function publicaG() {
        $this->publicaciones = new Publicaciones;
        
        $publicaciones = $this->publicaciones
            ->where('estado', Publicaciones::ESTADO_ACTIVO)
            ->orderBy('fecha', 'desc') 
            ->get();
        
        return [
            'template' => 'front/publicaciones.html.php',
            'titulo' => 'Inicio',
            'variables' => [
                'publicaciones' => $publicaciones       
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

    //modulo organizacion

    public function organizaciondir(){

        return[

            'template'=>'front/organizacion/direccion.html.php',
            'titulo'=>'Dirección'
        ];


    }

    public function organizaciongal(){

        return[

            'template'=>'front/organizacion/galeria.html.php',
            'titulo'=>'Galeria de Presidentes '
        ];
    }

    public function organizacionhis(){

        return[

            'template'=>'front/organizacion/historia.html.php',
            'titulo'=>'Historia'
        ];


    }


    //modulo eventos deportivos 

    public function dep1(){

        return[

            'template'=>'front/eventos/fut.html.php',
            'titulo'=>'Fútbol'
        ];


    }

    public function dep2(){

        return[

            'template'=>'front/eventos/futsala.html.php',
            'titulo'=>'FútbolSala'
        ];


    }

    public function dep3(){

        return[

            'template'=>'front/eventos/ecua.html.php',
            'titulo'=>'Ecuavoly'
        ];


    }


    


}