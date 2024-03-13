<?php

namespace App\Controladores\AdSucursales;
use App\Modelos\Publicaciones;

class Publicarad{
    private $publicaciones;

    public function __construct(Publicaciones $publicaciones){
        $this->publicaciones=$publicaciones;
    }

    public function publicarAnuncio($variables=[]){
        return [
            'titulo' => 'Publicar Anuncio',
            'template' => 'adsucursal/publicar.html.php',
            'variables'=> $variables
        ];
    }


    public function anuncio(){

        if(empty($_FILES['foto_publicacion']['name'])){
            return $this->publicarAnuncio(
                ['error' => 'Error no ingreso ninguna archivo']
            );
        }

        $tmp = $_FILES['foto_publicacion']['tmp_name'];
        $name = $_FILES['foto_publicacion']['name'];

        $extension = pathinfo($name, PATHINFO_EXTENSION);
       
        $DirecionImage = './assets/publicaciones/';
        $outputImage = $DirecionImage . $name;
        $databasePath = ltrim($outputImage, '.');
        
        if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif'])) {
            // Es una imagen
            move_uploaded_file($tmp, $outputImage);
        } elseif (in_array($extension, ['mp4', 'mov', 'avi'])) {
            // Es un video
            move_uploaded_file($tmp, $outputImage);
        } else {
            // Extensión no permitida
            return $this->publicarAnuncio(
                ['error' => 'Error: extensión de archivo no permitida.']
            );
        }


        $agr =[
            'titulo' => ($_POST['titulo']),
            'publicacion' => ($_POST['publicacion']), 
            'fecha' => ($_POST['fecha']),
            'foto_publicacion' =>$databasePath,
            'estado' => Publicaciones::ESTADO_ACTIVO
            
        ];

        // var_dump($agr);
 
        try{    

            if(!move_uploaded_file($tmp,$outputImage)){ // mueve la imagen guardada en el espacio temporal hacia la carpeta img permanentemente
                  
            }

            $this ->publicaciones->insert($agr);

         

            return $this->publicarAnuncio(['success'=>"Se ingreso correctamente los datos"]);
                
              
            
        }catch(\PDOException $e){
                
            return $this->publicarAnuncio(['error' => 'No se pudo registrar']);
        }
        
    }

    public function listadoPublicacion(){
  
        $publicaciones = $this->publicaciones->select();
     
            return [
                'titulo' => 'Listado de Anuncios',
                'template' => 'adsucursal/listadoAnuncio.html.php',
                'variables' => ['publicaciones' => $publicaciones]
        ];
    }
 

    public function publica() {
        
        //var_dump($_POST);
       // var_dump($_POST['publicaciones']);
       date_default_timezone_set('America/Guayaquil');
        $dataPublicaciones = [];
    
        foreach ($_POST['publicaciones'] as $publicacion) {
            if (isset($publicacion['estado'])) {
                array_push($dataPublicaciones, $publicacion);
            }
        }
    
        $error = '';
    
        foreach ($dataPublicaciones as $publicacion) {
            $pub = $this->publicaciones->selectFromColumn('idpublicaciones', $publicacion['idpublicaciones'])[0];
    
            $estado = ($pub->estado === 'activo') ? 'inactivo' : 'activo';
    
            $dataFinalPublicacion = [
                'estado' => $estado,
                'idpublicaciones' => $publicacion['idpublicaciones']
            ];
            
            if ($estado === 'inactivo') {
                $dataFinalPublicacion['fecha_fin'] = date('Y-m-d'); // Fecha actual en la zona horaria de Ecuador
                $dataFinalPublicacion['usuario_desactiva'] = $_SESSION['usuario'] ;
                $dataFinalPublicacion['rol_desactiva'] = $_SESSION['rol'] ;
            }
    
            try {
               $this->publicaciones->updateValues($publicacion['idpublicaciones'], $dataFinalPublicacion);
    
            } catch(\PDOException $e) {
                $error = 'Error: ' . $e->getMessage();
            }
        }
    
        return $this->listadoPublicacion();
    }
    
    

   
    
    
}
