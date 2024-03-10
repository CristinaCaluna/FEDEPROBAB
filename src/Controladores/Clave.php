<?php
namespace App\Controladores;
use App\MarcoTrabajo\Autentificacion;
use App\Modelos\Usuarios;

class Clave{
    private $autentificacion;
    private $usuarios;

    public function __construct(Usuarios $usuarios, Autentificacion $autentificacion)
    {
        $this->autentificacion = $autentificacion;
        $this ->usuarios =$usuarios;
    }
    
    public function cambioClave($variables = []){
        return [
            'titulo' => 'Cambiar Clave',
            'template' => 'admin/cambioClave.html.php',
            'variables' => $variables
        ];
    }
   



  

    public function saveCambioClave(){
        if (empty($_POST['actual']) || empty($_POST['newpass']) || empty($_POST['repitpass'])) {
            return $this->cambioClave(['error' => 'Error: no se ingresó uno de los campos']);
        }
    
        $user = $this->autentificacion->usuarioLogueado();
    
        if (!password_verify($_POST['actual'], $user->clave)) {
            return $this->cambioClave(['error' => 'Error: la contraseña no coincide con el usuario actual']);
        }
    
        if ($_POST['newpass'] !== $_POST['repitpass']) {
            return $this->cambioClave(['error' => 'Error: las contraseñas nuevas no coinciden']);
        }
    
        $password = password_hash($_POST['newpass'], PASSWORD_DEFAULT);
    
        try {
            $dataUser = [
                'clave' => $password,
                'idusuarios' => $user->idusuarios
            ];
    
            
            $this->usuarios->updateValues($user->idusuarios, $dataUser);
    
            // Actualizar la contraseña en la sesión
            $_SESSION['password'] = $password;
    
            return $this->cambioClave(['success' => 'Contraseña cambiada correctamente']);
        } catch (\PDOException $e) {
            return $this->cambioClave(['error' => 'Error: ' . $e->getMessage()]);
        }
    }
    
}


