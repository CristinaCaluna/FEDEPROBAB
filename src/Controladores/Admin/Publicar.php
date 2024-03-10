<?php

namespace App\Controladores\Admin;
use App\Modelos\Publicaciones;

class Publicar{
    private $publicaciones;

    public function __construct(Publicaciones $publicaciones){
        $this->publicaciones=$publicaciones;
    }

    public function publicarAnuncio($variables=[]){
        return [
            'titulo' => 'Publicar Anuncio',
            'template' => 'admin/publicar.html.php',
            'variables'=> $variables
        ];
    }


    public function anuncio(){

        if(empty($_FILES['foto_publicacion']['name'])){
            return $this->publicarAnuncio(
                ['error' => 'Error no ingreso ninguna imagen']
            );
        }

        $tmp = $_FILES['foto_publicacion']['tmp_name'];
        $name = $_FILES['foto_publicacion']['name'];
       
        $DirecionImage = './assets/img/';
        $outputImage = $DirecionImage . $name;
        

        $agr =[
            'titulo' => ($_POST['titulo']),
            'publicacion' => ($_POST['publicacion']), 
            'fecha' => ($_POST['fecha']),
            'foto_publicacion' => ltrim($outputImage,'.'),
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
                'template' => 'admin/listadoAnuncio.html.php',
                'variables' => ['publicaciones' => $publicaciones]
        ];
    }
 

    public function publica() {
        //var_dump($_POST);
       // var_dump($_POST['publicaciones']);
        
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
    
            try {
               $this->publicaciones->updateValues($publicacion['idpublicaciones'], $dataFinalPublicacion);
    
            } catch(\PDOException $e) {
                $error = 'Error: ' . $e->getMessage();
            }
        }
    
        return $this->listadoPublicacion();
    }
    
    

   
    
    
}
