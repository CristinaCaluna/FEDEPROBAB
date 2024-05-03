<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class EventosDeportivos extends Model
{
    protected $table = 'eventos_deportivos';
    protected $primaryKey = 'id_evento'; 
    
    public const ADMIN = 'Admin';
    public const SUCURSAL = 'Sucursal';
    public const ESTADO_ACTIVO = 'activo';
    public const ESTADO_INACTIVO = 'inactivo';
   

    /**
     * 
     * @param array $data 
     * @return bool
     */
    public function inserto($data)
    {
        
        return $this->insert($data);
    }
}
