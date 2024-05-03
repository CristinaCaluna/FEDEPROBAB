<?php

namespace App\Controladores\Admin;

use Illuminate\Http\Request;
use App\Modelos\Categoria;
use App\Modelos\Canton;
use App\Modelos\Usuarios;
use App\Modelos\EventoDeportivo;

use App\Modelos\EventosDeportivos;

use App\Modelos\Genero;

use App\Modelos\Organizadores;

class RegistrarEvento
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
    


    public function listarf()
    {
        // Recuperar eventos deportivos de fútbol con latitud y longitud
        $consulta = EventosDeportivos::where('idevento_eventos', 1)->where('idorganizador_organizador', 1)->distinct()->get();
        //var_dump($consulta);
        return [
            'template' => 'front/eventos/futbol.html.php',
            'titulo' => 'Eventos de Fútbol',
            'variables' => ['eventosdeportivos' => $consulta]
        ];
    }
    
    public function listarb()
    { 
        $consulta = EventosDeportivos::where('idevento_eventos', 2)->where('idorganizador_organizador', 1)->distinct()->get();
        
      
        return [
            'template' => 'front/eventos/bascket.html.php',
            'titulo' => 'Eventos de Bascketbol',
            'variables' => ['eventosdeportivos' => $consulta]
        ];
    }

    public function listarv()
    {
       
        $consulta = EventosDeportivos::where('idevento_eventos', 3)->where('idorganizador_organizador', 1)->distinct()->get();

        return [
            'template' => 'front/eventos/voly.html.php',
            'titulo' => 'Eventos de Voly',
            'variables' => ['eventosdeportivos' => $consulta]
        ];
    }
    public function listari()
    {
        
        $consulta = EventosDeportivos::where('idevento_eventos', 4)->where('idorganizador_organizador', 1)->distinct()->get();
       
        return [
            'template' => 'front/eventos/indor.html.php',
            'titulo' => 'Eventos de Indor',
            'variables' => ['eventosdeportivos' => $consulta]
        ];
    }
    public function listarfs()
    {
      
        $consulta = EventosDeportivos::where('idevento_eventos', 5)->where('idorganizador_organizador', 1)->distinct()->get();
      
        return [
            'template' => 'front/eventos/futsa.html.php',
            'titulo' => 'Eventos Fultbol Sala',
            'variables' => ['eventosdeportivos' => $consulta]
        ];
    }
    
    
    


   
  






    
}
