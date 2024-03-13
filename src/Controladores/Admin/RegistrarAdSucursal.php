<?php

namespace App\Controladores\Admin;

use App\Modelos\Usuarios;

class RegistrarAdSucursal{

    private $funciones;

    public function index($variables=[]){

        return[

            'titulo'=>'Agregar Presidente',
            'template'=>'admin/agregar_sucursal.html.php',
            'variables'=> $variables
        ];

    }


    public function __construct( Usuarios $funciones  )
    {
        $this->funciones=$funciones;
    }

    
    public function add(){

     
        $data = [
            'idusuarios' => $_POST['id'],
            'nombres' => $_POST['nombres'],
            'apellidos' => $_POST['apellidos'],
            'clave' => password_hash($_POST['id'],PASSWORD_DEFAULT),
            'estado' => Usuarios::ESTADO_ACTIVO,
            'rol' => Usuarios::SUCURSAL,

        ];

        

        try { 
            $this->funciones->insert($data);
            return $this->index(['exito'=>"Se registro correctamente "]);
        } catch (\PDOException $e) {
            return $this->index(['error'=>"No se pudo registrar"]);
        }

    }


    
}