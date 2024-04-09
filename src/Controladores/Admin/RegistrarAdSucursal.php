<?php

namespace App\Controladores\Admin;

use App\Modelos\Usuarios;
use App\Modelos\Organizadores;

class RegistrarAdSucursal{

    private $funciones;
    
    private $organizadores;

    public function index($variables=[]){
        $variables = [

        'organizadores' => $this->organizadores->select()];
      
        return[

            'titulo'=>'Agregar Sucursal',
            'template'=>'admin/agregar_sucursal.html.php',
            'variables'=> $variables
        ];

    }


    public function __construct( Usuarios $funciones , Organizadores $organizadores )
    {
        $this->funciones=$funciones;
        $this->organizadores=$organizadores;
    }

    
    public function add(){
        

        if(empty($_POST['id']) || empty($_POST['nombres']) || empty($_POST['apellidos']) || empty($_POST['idorganizador'])) {
            return $this->index(['error'=>"Por favor, complete todos los campos."]);
        }
     
        $data = [
            'idusuarios' => $_POST['id'],
            'nombres' => $_POST['nombres'],
            'apellidos' => $_POST['apellidos'],
            'clave' => password_hash($_POST['id'],PASSWORD_DEFAULT),
            'estado' => Usuarios::ESTADO_ACTIVO,
            'rol' => Usuarios::SUCURSAL,
            'idorganizador' => $_POST['idorganizador'],

        ];

        


        try{    

            $this->funciones->insert($data);
            return $this->index(['success'=>"Se ingresaron correctamente los datos"]);
            
        }catch(\PDOException $e){
                
            return $this->index (['error' => 'No se pudo registrar']);
        }

       

    }


    
}