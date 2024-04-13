<?php

namespace App\MarcoTrabajo;
use App\Controladores\Clave;
use App\Controladores\Inicio;
use App\Controladores\Admin\Publicar;
use App\Controladores\Admin\RegistrarAdSucursal;
use App\Controladores\Admin\ModificarAdSucursal;
use App\Controladores\AdSucursales\Publicarad;
use App\Controladores\Web\Login;
use App\Modelos\Organizadores;
use App\Modelos\Usuarios;
use App\Modelos\Publicaciones;

use App\Controladores\Admin\RegistrarEvento;
use App\Controladores\AdSucursales\RegistrarEventoad;

use App\Controladores\Admin\ListadoPublicaciones;
use App\Modelos\EventosDeportivos;

class RutasAplicacion{
    private $autenttificacion;
    private $usuarios;
    private $publicaciones;
    private $organizadores;
    private $eventosdeportivos;
 

    public function __construct()
    {
        $this->usuarios = new Usuarios;
        $this->publicaciones = new Publicaciones;
        $this->organizadores = new Organizadores;
        
        $this->autenttificacion = new Autentificacion([$this->usuarios],['idusuarios'],'clave');
    }

    public function getRoutes(){
        
       
        $inicio = new Inicio($this->usuarios, $this->eventosdeportivos);
        $publicarad = new Publicarad ($this->publicaciones);
         
        $publicar = new Publicar ($this->publicaciones);
        $registrarSucursal = new RegistrarAdSucursal($this->usuarios, $this->organizadores);
        $modificarSucursal = new ModificarAdSucursal($this -> usuarios);          
        $iniciarSession = new Login($this->autenttificacion);
        $nuevaClave = new Clave($this ->usuarios, $this->autenttificacion);
        $registrarEvento = new RegistrarEvento($this ->usuarios,$this ->eventosdeportivos);
        $registrarEventoad = new RegistrarEventoad($this ->usuarios, $this ->eventosdeportivos);
        
        

      
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
                'autoridades'=>[
                    "GET"=>[
                        "controlador"=> $inicio,
                        "accion"=>'organizacionau'
                    ],
                ],

            'historia'=>[
                    "GET"=>[
                        "controlador"=> $inicio,
                        "accion"=>'organizacionhis'
                    ],
                ],

            'futbol'=>[
                    "GET"=>[
                        "controlador"=>$registrarEvento,
                        "accion"=>'listarf'
                    ],
                ],
            'futbolsala'=>[
                    "GET"=>[
                        "controlador"=>$registrarEvento,
                        "accion"=>'listarfs'
                    ],
                ],
            'ecuavoly'=>[
                    "GET"=>[
                        "controlador"=>$registrarEvento,
                        "accion"=>'listarv'
                    ],
                ],

                'indor'=>[
                    "GET"=>[
                        "controlador"=>$registrarEvento,
                        "accion"=>'listari'
                    ],
                ],
                'bascket'=>[
                    "GET"=>[
                        "controlador"=>$registrarEvento,
                        "accion"=>'listarb'
                    ],
                ],
                'filial'=>[
                    "GET"=>[
                        "controlador"=> $inicio,
                        "accion"=>'filial'
                    ],
                ],
                'filial1'=>[
                    "GET"=>[
                        "controlador"=> $inicio,
                        "accion"=>'filial1'
                    ],
                ],
                'filial2'=>[
                    "GET"=>[
                        "controlador"=> $inicio,
                        "accion"=>'filial2'
                    ],
                ],
                'filial3'=>[
                    "GET"=>[
                        "controlador"=> $inicio,
                        "accion"=>'filial3'
                    ],
                ],
                'filial4'=>[
                    "GET"=>[
                        "controlador"=> $inicio,
                        "accion"=>'filial4'
                    ],
                ],
                'filial5'=>[
                    "GET"=>[
                        "controlador"=> $inicio,
                        "accion"=>'filial5'
                    ],
                ],
                'filial6'=>[
                    "GET"=>[
                        "controlador"=> $inicio,
                        "accion"=>'filial6'
                    ],
                ],
                'filial7'=>[
                    "GET"=>[
                        "controlador"=> $inicio,
                        "accion"=>'filial7'
                    ],
                ],
                'filial8'=>[
                    "GET"=>[
                        "controlador"=> $inicio,
                        "accion"=>'filial8'
                    ],
                ],
                'filial9'=>[
                    "GET"=>[
                        "controlador"=> $inicio,
                        "accion"=>'filial9'
                    ],
                ],
                'legislacion'=>[
                    "GET"=>[
                        "controlador"=> $inicio,
                        "accion"=>'legislacion'
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
                'admin/registrar/evento_deportivo' =>[
                  
                        "GET"=>[
                            "controlador"=> $registrarEvento,
                            "accion"=>'index'
                        ],
                        "POST"=>[
                            "controlador"=>$registrarEvento,
                            "accion"=>'adde'
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
                'adsucursal/registrar/evento_deportivo' =>[
                  
                    "GET"=>[
                        "controlador"=>$registrarEventoad,
                        "accion"=>'index'
                    ],
                    "POST"=>[
                        "controlador"=>$registrarEventoad,
                        "accion"=>'adde'
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
