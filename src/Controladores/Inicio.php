<?php

namespace App\Controladores;


use App\Modelos\Usuarios;
use App\Modelos\Publicaciones;
use App\Modelos\EventosDeportivos;
use App\Modelos\Lotaip_pri;


class Inicio  {


    private Publicaciones $publicaciones;
    private Usuarios $usuarios;
    private Lotaip_pri $lotaip_pr;


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
    public function organizacionau(){

        return[

            'template'=>'front/organizacion/directorio.html.php',
            'titulo'=>'Directorio'
        ];


    }


    //modulo filial

    public function filial(){
        $consulta = EventosDeportivos::where('idorganizador_organizador', 2)->distinct()->get();
  
      
        
        return[

            'template'=>'front/filiales/filial.html.php',
            'titulo'=>'Filial',
            'variables' => ['eventosdeportivos' => $consulta]
        ];


    } 

    public function filial1(){
        $consulta = EventosDeportivos::where('idorganizador_organizador', 3)->distinct()->get();
  
      
        
        return[

            'template'=>'front/filiales/filial1.html.php',
            'titulo'=>'Filial',
            'variables' => ['eventosdeportivos' => $consulta]
        ];


    } 

    public function filial2(){
        $consulta = EventosDeportivos::where('idorganizador_organizador', 4)->distinct()->get();
  
      
        
        return[

            'template'=>'front/filiales/filial2.html.php',
            'titulo'=>'Filial',
            'variables' => ['eventosdeportivos' => $consulta]
        ];


    } 


    public function filial3(){
        $consulta = EventosDeportivos::where('idorganizador_organizador', 5)->distinct()->get();
  
      
        
        return[

            'template'=>'front/filiales/filial3.html.php',
            'titulo'=>'Filial',
            'variables' => ['eventosdeportivos' => $consulta]
        ];


    } 

    public function filial4(){
        $consulta = EventosDeportivos::where('idorganizador_organizador', 6)->distinct()->get();
  
      
        
        return[

            'template'=>'front/filiales/filial4.html.php',
            'titulo'=>'Filial',
            'variables' => ['eventosdeportivos' => $consulta]
        ];


    } 

    public function filial5(){
        $consulta = EventosDeportivos::where('idorganizador_organizador', 7)->distinct()->get();
  
      
        
        return[

            'template'=>'front/filiales/filial5.html.php',
            'titulo'=>'Filial',
            'variables' => ['eventosdeportivos' => $consulta]
        ];


    } 

    public function filial6(){
        $consulta = EventosDeportivos::where('idorganizador_organizador', 8)->distinct()->get();
  
      
        
        return[

            'template'=>'front/filiales/filial6.html.php',
            'titulo'=>'Filial',
            'variables' => ['eventosdeportivos' => $consulta]
        ];


    } 

    public function filial7(){
        $consulta = EventosDeportivos::where('idorganizador_organizador', 9)->distinct()->get();
  
      
        
        return[

            'template'=>'front/filiales/filial7.html.php',
            'titulo'=>'Filial',
            'variables' => ['eventosdeportivos' => $consulta]
        ];


    } 

    public function filial8(){
        $consulta = EventosDeportivos::where('idorganizador_organizador', 10)->distinct()->get();
  
      
        
        return[

            'template'=>'front/filiales/filial8.html.php',
            'titulo'=>'Filial',
            'variables' => ['eventosdeportivos' => $consulta]
        ];


    } 

    public function filial9(){
        $consulta = EventosDeportivos::where('idorganizador_organizador', 11)->distinct()->get();
  
      
        
        return[

            'template'=>'front/filiales/filial9.html.php',
            'titulo'=>'Filial',
            'variables' => ['eventosdeportivos' => $consulta]
        ];


    } 

    //legislacion 

    
    public function legislacion(){
      
        
        return[

            'template'=>'front/legislacion.html.php',
            'titulo'=>'Legislacion'
        ];


    } 


 


}