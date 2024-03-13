<?php

namespace App\Controladores\Web;

use App\MarcoTrabajo\Autentificacion;
use App\Modelos\Usuarios;

class Login {
    private $autentificacion;

    public function __construct(Autentificacion $autentificacion)
    {
        $this->autentificacion = $autentificacion;
    }   

    public function logueo(){
        $redireccion=[
         
            Usuarios::ADMIN=>'/admin/inicio',
            Usuarios::SUCURSAL =>'/adsucursal/inicio'

          
        ];

        if(isset($_SESSION['usuario'])){
            $rol=$_SESSION['rol'];
            $direccion=$redireccion[$rol];
            header('location: '.$direccion);
            exit();
        }
        return [
            'titulo' => 'Iniciar Sesión',
            
            'template' => 'front/login.html.php'
        ];
    }

    public function autentificacion(){
        $usuario = $_POST['usuario'];
        $clave = $_POST['password'];
        $comprobacion =  $this->autentificacion->verificacion($usuario, $clave);
        $rolesRedirecionamientos = [
          
            Usuarios::ADMIN=>'/admin/inicio',
            Usuarios::SUCURSAL => '/adsucursal/inicio'
            
        ];

        if($comprobacion){
            $ruta = $rolesRedirecionamientos[$_SESSION['rol']] ?? '/';
            header('location: '.$ruta );
            exit();
        }

        return [
            'titulo' => 'Iniciar Sesión',
            'template' => 'front/login.html.php',
            'variables' => [
                'error' => 'Usuario o contraseña incorrectos'
            ]
        ];
        
    }


    public function logOut(){

        unset($_SESSION);
        session_destroy();

        header('location: /');

        
    }
}