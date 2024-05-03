<?php 
namespace App\Controladores\Admin;

use App\Modelos\Usuarios;

class ModificarAdSucursal{

    private $sucursales;



    public function __construct(
        Usuarios $sucursales
    )
    {
        $this->sucursales=$sucursales;
    }

    public function index(){

        return[
            'titulo' => 'Modificar lista de Sucursales',
            'template'=> 'admin/modificar_sucursal.html.php'
        ];


    }

    public function removeSucursal(){
        $sucursales =  $this->sucursales->selectFromColumn('rol',Usuarios::SUCURSAL);
        return [
            'titulo' => 'Habilitar - Deshabilitar Sucursales',
            'template' => 'admin/modificar_sucursal.html.php',
            'variables' => [
                'sucursales' => $sucursales
            ]
        ];
        
    }
    public function saveRemoveSucrsal(){
                  
            $dataSucursales = [];
        
            foreach($_POST as $usuario){
                if(isset($usuario['rol'])){
                    array_push($dataSucursales, $usuario);
                }
            }
        
            $error = '';
            foreach($dataSucursales as $personal){

                $person = $this->sucursales->selectFromColumn('idusuarios', $personal['idusuarios'])[0];
        
                $estado = ($person->estado === 'activo') ? 'inactivo' : 'activo';
    
                $dataFinal = [
                    'estado' => $estado,
                    'idusuarios' => $personal['idusuarios']
                ];

                try{
                          
                    $this->sucursales->updateValues($personal['idusuarios'], $dataFinal);
        
                } catch(\PDOException $e){
                    $error = 'Error: ' . $e->getMessage();
                    // Maneja el error de manera apropiada, por ejemplo, regístralo o muestra un mensaje
                }
            }
        
    
        
        return $this->removeSucursal();
    }

}