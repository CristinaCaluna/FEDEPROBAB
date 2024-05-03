<?php

namespace App\Controladores\Admin;

use App\Modelos\Anio;
use App\Modelos\Mes;
use App\Modelos\Lotaip;
use App\Modelos\Lotaip_pri;

class ReTransparencia {
    private $anio;
    private $mes;
    private $lotaip;
    private $lotaip_pri;

    public function __construct() {
        $this->anio = new Anio();
        $this->mes = new Mes();
        $this->lotaip = new Lotaip();
        $this ->lotaip_pri = new Lotaip_pri();
    }

    public function transparencia() {
        $variables = [
            'anios' => $this->anio->obtenerAnios(),
            'meses' => $this->mes->obtenerMeses(),
            'lotaip_lis' => $this->lotaip->obtenerLotaip(),
            'lotaip_lisli' => $this->lotaip->obtenerLotaipli()
        ];

        return [
            'titulo' => 'Publicar Transparencia LOTAIP',
            'template' => 'admin/agregar_transparencia.html.php',
            'variables' => $variables
        ];
    }



    public function agregar(){

        if(empty($_FILES['archivo']['name'])){
            return $this->transparencia(
                ['error' => 'Error: no se ingresó ningún archivo.']
            );
        }
    
        $tmp = $_FILES['archivo']['tmp_name'];
        $name = $_FILES['archivo']['name'];
    
        $extension = pathinfo($name, PATHINFO_EXTENSION);
       
        $allowedExtensions = ['pdf', 'doc', 'docx', 'xls', 'xlsx']; // Extensiones permitidas
    
        if (!in_array($extension, $allowedExtensions)) {
            // Extensión no permitida
            return $this->transparencia(['error' => 'Error: extensión de archivo no permitida.'] );
        }
    
        $DirecionImage = './assets/lotaip/';
        $outputImage = $DirecionImage . $name;
        $databasePath = ltrim($outputImage, '.');
    
        try{    
            if(!move_uploaded_file($tmp,$outputImage)){ // mueve la imagen guardada en el espacio temporal hacia la carpeta img permanentemente
                return $this->transparencia(['error' => 'Error: no se pudo mover el archivo.']);
            }
    
            $data=[
                'anio' => ($_POST['anio']),
                'mes' => ($_POST['mes']), 
                'lotaip_lis' => ($_POST['lotaip_lis']),
                'lotaip_lisli' => ($_POST['lotaip_lisli']),
                'archivo' =>$databasePath,
            ];
    
            $this->lotaip_pri->insert($data);
    
            return $this->transparencia(['success'=>"Se ingresaron correctamente los datos"]);
                
        } catch(\PDOException $e){        
            return $this->transparencia(['error' => 'No se pudo registrar los datos.']);
        }
        
    }


       //modulo de transsparencia

       public function transparencias() {
        $consulta = Lotaip_pri::select('anio', 'mes', 'lotaip_lis', 'lotaip_lisli', 'archivo')
                    ->groupBy('anio', 'mes', 'lotaip_lis', 'lotaip_lisli', 'archivo')
                    ->distinct('anio', 'mes')
                    ->get();
    
        return [
            'template' => 'front/transparencia.html.php',
            'titulo' => 'Transparencia LOTAIP', 
            'variables' => ['lotaip_pris' => $consulta]
        ];
    }
    
    
    
    

}
