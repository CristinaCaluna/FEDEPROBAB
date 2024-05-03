<?php

namespace App\Controladores\AdSucursales;

use Illuminate\Http\Request;
use App\Modelos\Categoria;
use App\Modelos\Canton;
use App\Modelos\Usuarios;
use App\Modelos\EventoDeportivo;

use App\Modelos\EventosDeportivos;

use App\Modelos\Genero;

use App\Modelos\Organizadores;

class RegistrarEventoad
{
    private $categoria;
    private $canton;
    private $organizadores;
    private $genero;
    private $eventos;
    private $usuarios;
    private $eventosdeportivos;

    public function __construct()
    {
        $this->canton = new Canton();
        $this->organizadores = new Organizadores();
        $this->genero = new Genero();
        $this->eventos = new EventoDeportivo();
        $this->usuarios = new Usuarios();
        $this ->categoria = new Categoria() ;
        $this->eventosdeportivos = new EventosDeportivos();

    }




    
    public function index()
    {
        
        $variables = [
            'categorias' => $this->categoria->select(),
           'organizadores' => $this->organizadores->select(),
            'generos' => $this->genero->select(),
            'eventos' => $this->eventos->select(),
            'usuarios' => $this->usuarios->select(),
            'cantones' => $this->canton->selectc(),

          
            
        ];

        return [
            'titulo' => 'Agregar Evento Deportivo',
            'template' => 'admin/agregar_evento_deportivo.html.php',
            'variables' => $variables
        ];
    }


    public function adde(){
      
            $data = [
                'fecha' => $_POST['fecha'],
                'idorganizador_organizador' => $_POST['idorganizador_organizador'],
                'idevento_eventos' => $_POST['idevento_eventos'],
                'categoria' => $_POST['categoria'], 
                'genero' => $_POST['genero'], 
                'canton' => $_POST['canton'], 
                'parroquia' => $_POST['parroquia'],
                'escenario' => $_POST['escenario'],
                'direccion' => $_POST['direccion'],
                'latitud' => $_POST ['latitud'], 
                'longitud' => $_POST['longitud'],
            ];
           
            try { 
                $this->eventosdeportivos->inserto($data);
                
                return $this->index(['exito' => "Se registró correctamente"]);
            } catch (\PDOException $e) {
                return $this->index(['error' => "No se pudo registrar"]);
            }
        
        
       // var_dump($data);
    
        try { 
            $this->eventosdeportivos->inserto($data);
            
            return $this->index(['exito' => "Se registró correctamente"]);
        } catch (\PDOException $e) {
            return $this->index(['error' => "No se pudo registrar"]);
        }
    }
    

   
}
