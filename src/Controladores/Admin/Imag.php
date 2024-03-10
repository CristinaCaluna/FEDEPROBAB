<?php

namespace App\Controladores\Admin;

use App\Modelos\Imagenes;


class Imag{
    private $imagenes;

    public function __construct(Imagenes $imagenes){
        $this->imagenes=$imagenes;
    }

    public function publicarImagen($variables=[]){
        return [
            'titulo' => 'Publicar Imagen',
            'template' => 'admin/imagen.html.php',
            'variables'=> $variables
        ];
    }


    public function imagen(){

        //Validacion de existencia de imagen 
        if(empty($_FILES['foto']['name'])){
            return $this->publicarImagen(
                ['error' => 'Error no ingreso ninguna imagen']
            );
        }

        //obtiene la informacion de la imagen
        $tmp = $_FILES['foto']['tmp_name'];
        $name = $_FILES['foto']['name'];

        //verifico la ruta donde sera guardada la imagen        
        $DirecionImage = './assets/img/';
        $outputImage = $DirecionImage . $name;
        
        //relacion de de los datos co la ruta y estado 
        $agr =[
            'foto' => ltrim($outputImage,'.'),
            'estado' => Imagenes::ESTADO_ACTIVO
            
        ];
        //var_dump($agr);

        try{

            if(!move_uploaded_file($tmp,$outputImage)){ // mueve la imagen guardada en el espacio temporal hacia la carpeta img permanentemente
                  
            }

            $this ->imagenes->insert($agr);
                         
            return $this->publicarImagen(['success'=>"Se ingreso correctamente los datos"]);
                
              
            
        }catch(\PDOException $e){
                
            return $this->publicarImagen(['error' => 'No se pudo registrar']);
        }
        
    }

    public function listadoImagen(){
  
        $imagenes = $this->imagenes->select();
     
            return [
                'titulo' => 'Listado de Imagenes',
                'template' => 'admin/listadoImagenes.html.php',
                'variables' => ['imagenes' => $imagenes]
        ];
    }
 

    public function publicaImg() {

           
        //creo in array que tendra la inf de las imagenes de seran cambiadas de estado 
        $dataImagen = [];
    
        foreach ($_POST as $imagen) {
            if (isset($imagen['estado'])) {
                array_push($dataImagen, $imagen);
            }
        }
    
        $error = ''; //variable error que se utiliza para manejar errores duerante la actualizacion

        // realizacion de la consuta, cambio de estado  y creacion de in array con los nevos valores     
        foreach ($dataImagen as $imagen) {
            
            $pub = $this->imagenes->selectFromColumn('idimagen', $imagen['idimagen'])[0];
    
            $estado = ($pub->estado === 'activo') ? 'inactivo' : 'activo';
    
            $dataFinalImagen = [
                'estado' => $estado,
                'idimagen' => $imagen['idimagen']
            ];


            //Actualizo la inf en la base de datos mediante el obj imagenes     
            try {
               $this->imagenes->updateValues($imagen['idimagen'], $dataFinalImagen);
    
            } catch(\PDOException $e) {
                $error = 'Error: ' . $e->getMessage();
            }
        }
    
        //redirijo a la lista actualizada 
        return $this->listadoImagen();
    }
    
}
