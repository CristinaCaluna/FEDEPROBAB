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
        // Verifica si el modelo en el índice 0 no es nulo y tiene el método selectFromColumn
        if (!is_null($this->modelo[0]) && method_exists($this->modelo[0], 'selectFromColumn')) {
            $usuarioV = $this->modelo[0]->selectFromColumn($this->column[0], $usuario);
        } elseif (!is_null($this->modelo[1]) && method_exists($this->modelo[1], 'selectFromColumn')) {
            // Si el modelo en el índice 0 es nulo o no tiene el método, intenta con el modelo en el índice 1
            $usuarioV = $this->modelo[1]->selectFromColumn($this->column[1], $usuario);
        } else {
            // Si ninguno de los modelos tiene el método selectFromColumn, retorna falso
            return false;
        }
    
        // Verifica si se encontró un usuario y si la contraseña coincide y el estado no es 'inactivo'
        if ($usuarioV && isset($usuarioV[0]->{$this->password}) && password_verify($password, $usuarioV[0]->{$this->password}) && $usuarioV[0]->estado !== 'inactivo') {
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