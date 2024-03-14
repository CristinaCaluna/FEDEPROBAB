<?php

namespace App\MarcoTrabajo;
use App\Controladores\Clave;
use App\Controladores\Inicio;
use App\Controladores\Admin\Publicar;
use App\Controladores\Admin\RegistrarAdSucursal;
use App\Controladores\Admin\ModificarAdSucursal;
use App\Controladores\AdSucursales\Publicarad;
use App\Controladores\Web\Login;
use App\Modelos\Usuarios;
use App\Modelos\Publicaciones;

use App\Controladores\Admin\ListadoPublicaciones;

class RutasAplicacion{
    private $autenttificacion;
    private $usuarios;
    private $publicaciones;
 

    public function __construct()
    {
        $this->usuarios = new Usuarios;
        $this->publicaciones = new Publicaciones;
        $this->autenttificacion = new Autentificacion([$this->usuarios],['idusuarios'],'clave');
    }

    public function getRoutes(){
        
       
        $inicio = new Inicio($this->usuarios);
        $publicarad = new Publicarad ($this->publicaciones);
         
        $publicar = new Publicar ($this->publicaciones);
        $registrarSucursal = new RegistrarAdSucursal($this->usuarios);
        $modificarSucursal = new ModificarAdSucursal($this -> usuarios);          
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

            'direccion'=>[
                    "GET"=>[
                        "controlador"=> $inicio,
                        "accion"=>'organizaciondir'
                    ],
                ],

            'galeria'=>[
                    "GET"=>[
                        "controlador"=> $inicio,
                        "accion"=>'organizaciongal'
                    ],
                ],

            'historia'=>[
                    "GET"=>[
                        "controlador"=> $inicio,
                        "accion"=>'organizacionhis'
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


                'admin/registrar/adsucursal' =>[
                    "GET"=>[
                        "controlador"=>$registrarSucursal,
                        "accion"=>'index'
                    ],
                    "POST"=>[
                        "controlador"=> $registrarSucursal,
                        "accion"=>'add'
                    ],
                    
                    'login' => true, // loguedo
                    'rol' => Usuarios::ADMIN //rol
            
                ],

                'admin/listado/adsucursal' =>[
                    "GET"=>[
                        "controlador"=>$modificarSucursal,
                        "accion"=>'removeSucursal'
                    ],
                    "POST"=>[
                        "controlador"=>$modificarSucursal,
                        "accion"=>'saveRemoveSucrsal'
                    ],
                    
                    'login' => true, // loguedo
                    'rol' => Usuarios::ADMIN //rol
            
                ],

                'admin/auditoria/publicaciones' =>[
                    "GET"=>[
                        "controlador"=> $publicar,
                        "accion"=>'auditoriaPublicaciones'
                    ],
                    
                    'login' => true, // loguedo
                    'rol' => Usuarios::ADMIN //rol
            
                ],

 //AdSucursal

                'adsucursal/cambio/clave' =>[
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

                'adsucursal/inicio' =>[
                    "GET"=>[
                        "controlador"=> $publicarad,
                        "accion"=>'publicarAnuncio'
                    ],
                    "POST"=>[
                        "controlador"=> $publicarad,
                        "accion"=>'anuncio'
                    ],
                    
                    'login' => true, // loguedo
                    'rol' => Usuarios::SUCURSAL //rol

                ],

                'adsucursal/listado/anuncios' =>[
                    "GET"=>[
                        "controlador"=> $publicarad,
                        "accion"=>'listadoPublicacion'
                    ],
                    "POST"=>[
                        "controlador"=> $publicarad,
                        "accion"=>'publica'
                    ],
                    
                    'login' => true, // loguedo
                    'rol' => Usuarios::SUCURSAL //rol

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
