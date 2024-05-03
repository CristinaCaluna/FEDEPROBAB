<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Lotaip_pri extends Model
{
    protected $table = 'lotaip_pri';
    protected $primaryKey = 'id'; 
    
    public const ADMIN = 'Admin';
    public const SUCURSAL = 'Sucursal';
    public const ESTADO_ACTIVO = 'activo';
    public const ESTADO_INACTIVO = 'inactivo';
   
    
    protected $fillable = ['anio', 'mes', 'lotaip_lis', 'lotaip_lisli', 'archivo'];

    /**
     * Inserta un nuevo registro en la tabla eventos_deportivos.
     *
     * @param array $data 
     * @return bool 
     */
    public function insertl($data)
    {
       
        return $this->insert($data);
    }
}
