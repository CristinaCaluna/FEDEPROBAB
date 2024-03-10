<?php

namespace App\MarcoTrabajo;


use App\Modelos\DatabaseTable;
use App\Modelos\Usuarios;
use Illuminate\Support\Collection;

class Autentificacion {
    private  $modelo;
    private  $column;
    private  $password;
    /**
     * @param array<Usuarios> $modelos
     * @param array<string> $column
     */
    public function __construct(array $modelos, array $column,string $clave)
    {
        
        session_start();

        

        $this->modelo = $modelos;
        $this->column = $column;
        $this->password = $clave;
    }

    public function verificacion($usuario, $password) {
        $usuarioV = $this->modelo[0]->selectFromColumn($this->column[0],$usuario);

        $usuarioV = count($usuarioV) > 0 ? $usuarioV : $this->modelo[1]->selectFromColumn($this->column[1],$usuario);
        
        // select where cedula = '025018665'
        if($usuarioV && password_verify($password, $usuarioV[0]->{$this->password})&& $usuarioV[0]->estado !== 'inactivo'){
            session_regenerate_id();
            $_SESSION['usuario'] = $usuario;
            $_SESSION['password'] = $usuarioV[0]->{$this->password};
            $_SESSION['rol'] = $usuarioV[0]->rol;
            return true;
            
        }
        
        return false;


    }

    public function estaLoguedo(){
        if(!isset($_SESSION['usuario'])){
            return false;
        }

        $usuarioV = $this->modelo[0]->selectFromColumn($this->column[0],$_SESSION['usuario']);
        $usuarioV = count($usuarioV) > 0 ? $usuarioV : $this->modelo[1]->selectFromColumn($this->column[1],$_SESSION['usuario']);
        if($usuarioV && $usuarioV[0]->{$this->password} === $_SESSION['password']){
          
            return true;
        }
        return false;
    }

    public function usuarioLogueado():Usuarios 

    {
        if($this->estaLoguedo()){
            $usuarioV = $this->modelo[0]->selectFromColumn($this->column[0],$_SESSION['usuario']);
            $result= count($usuarioV) > 0 ? new Usuarios : new Usuarios;
            $usuarioV = $usuarioV ? $usuarioV : $this->modelo[1]->selectFromColumn($this->column[1],$_SESSION['usuario']);
            
            if($result instanceof Usuarios){
                $result->idusuarios = $usuarioV[0]->idusuarios;
                $result->nombres = $usuarioV[0]->nombres;
                $result->apellidos = $usuarioV[0]->apellidos;
                $result->clave = $usuarioV[0]->clave;
                $result->rol = $usuarioV[0]->rol;
                $result->estado = $usuarioV[0]->estado;
               
            }else{

                $result->idusuarios = $usuarioV[0]->idusuarios;
                $result->nombres = $usuarioV[0]->nombres;
                $result->apellidos = $usuarioV[0]->apellidos;
                $result->clave = $usuarioV[0]->clave;
                $result->rol = $usuarioV[0]->rol;
                $result->estado = $usuarioV[0]->estado;
   
            }

            return $result;
        }

        return false;
    }


}