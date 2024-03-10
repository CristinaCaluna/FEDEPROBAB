<?php

namespace App\MarcoTrabajo;
use App\Controladores\Clave;
use App\Controladores\Inicio;
use App\Controladores\Admin\Publicar;
use App\Controladores\Admin\Imag;
use App\Controladores\Web\Login;
use App\Modelos\Usuarios;
use App\Modelos\Publicaciones;
use App\Modelos\Imagenes;
use App\Controladores\Admin\ListadoPublicaciones;

class RutasAplicacion{
    private $autenttificacion;
    private $usuarios;
    private $publicaciones;
    private $imagenes;


    public function __construct()
    {
        $this->usuarios = new Usuarios;
        $this ->imagenes = new Imagenes;
        $this->publicaciones = new Publicaciones;
        $this->autenttificacion = new Autentificacion([$this->usuarios],['idusuarios'],'clave');
    }

    public function getRoutes(){
        
       
        $inicio = new Inicio($this->usuarios);
         
        $publicar = new Publicar ($this->publicaciones);
        $imag = new Imag ($this ->imagenes);
            
        $iniciarSession = new Login($this->autenttificacion);
        $nuevaClave = new Clave($this ->usuarios, $this->autenttificacion);
        
        

      
        return [

//General
            ''=>[
                "GET"=>[
                    "controlador"=> $inicio,
                    "accion"=>'publicaG'
                ]
                ],
            'inicio'=>[
                    "GET"=>[
                        "controlador"=> $inicio,
                        "accion"=>'publicaG'
                    ],
                ],
        
            'publicacion'=>[
                    "GET"=>[
                        "controlador"=> $inicio,
                        "accion"=>'listarpublica'
                    ],
                ],
            'login'=>[
                    "GET"=>[
                        "controlador"=> $iniciarSession,
                        "accion"=>'logueo'
                    ],
                    "POST"=>[
                        "controlador"=> $iniciarSession,
                        "accion"=>'autentificacion'
                    ],
                ],

//admin
                'admin/cambio/clave' =>[
                    'GET' => [
                        'controlador' => $nuevaClave,
                        'accion' => 'cambioClave'
                    ],
                    'POST' => [
                        'controlador' => $nuevaClave,
                        'accion' => 'saveCambioClave'
                    ],
                    'login' => true
                    
                ],

               'admin/inicio' =>[
                    "GET"=>[
                        "controlador"=> $publicar,
                        "accion"=>'publicarAnuncio'
                    ],
                    "POST"=>[
                        "controlador"=> $publicar,
                        "accion"=>'anuncio'
                    ],
                    
                    'login' => true, // loguedo
                    'rol' => Usuarios::ADMIN //rol
            
                ],

                'admin/listado/anuncios' =>[
                    "GET"=>[
                        "controlador"=> $publicar,
                        "accion"=>'listadoPublicacion'
                    ],
                    "POST"=>[
                        "controlador"=> $publicar,
                        "accion"=>'publica'
                    ],
                    
                    'login' => true, // loguedo
                    'rol' => Usuarios::ADMIN //rol
            
                ],


                'admin/imagen' =>[
                    "GET"=>[
                        "controlador"=>$imag,
                        "accion"=>'publicarImagen'
                    ],
                    "POST"=>[
                        "controlador"=> $imag,
                        "accion"=>'imagen'
                    ],
                    
                    'login' => true, // loguedo
                    'rol' => Usuarios::ADMIN //rol
            
                ],

                'admin/listado/imagen' =>[
                    "GET"=>[
                        "controlador"=> $imag,
                        "accion"=>'listadoImagen'
                    ],
                    "POST"=>[
                        "controlador"=> $imag,
                        "accion"=>'publicaimg'
                    ],
                    
                    'login' => true, // loguedo
                    'rol' => Usuarios::ADMIN //rol
            
                ],



                


//Salir 

                'logout' => [
                    'GET' => [
                        "controlador" => $iniciarSession,
                        "accion" => 'logOut'
                    ]
                    ],

//Error

                'error'=>[
                    "GET"=>[
                        "controlador"=> $inicio,
                        "accion"=>'error'
                    ],
                ],


        ];


    }

    public function aut(): Autentificacion
    {
        return $this->autenttificacion;
    }

    public function tieneRol($rol) {
        $usuario = $this->autenttificacion->usuarioLogueado();

        if($usuario){
           return $usuario->tieneRol($rol);
        }

        return false;
    }

}
