<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class EventosDeportivos extends Model
{
    protected $table = 'eventos_deportivos'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'id_evento'; // Nombre de la clave primaria
    
    public const ADMIN = 'Admin';
    public const SUCURSAL = 'Sucursal';
    public const ESTADO_ACTIVO = 'activo';
    public const ESTADO_INACTIVO = 'inactivo';
   
    // No es necesario el constructor vacío
    // public function __construct(){
    //     parent::__construct();
    // }
    
    /**
     * Inserta un nuevo registro en la tabla eventos_deportivos.
     *
     * @param array $data Los datos a insertar.
     * @return bool True si la inserción fue exitosa, false en caso contrario.
     */
    public function inserto($data)
    {
        // Inserta los datos en la tabla eventos_deportivos
        return $this->insert($data);
    }
}
