<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{
    protected $primaryKey = 'id_paq';

    protected $fillable = [
        'descripcion',
        'remitente',
        'id_camionero',
        'id_lugar_destino',
    ];

    // Relaciones
    public function camionero()
    {
        return $this->belongsTo(Camionero::class, 'id_camionero');
    }

    public function lugarDestino()
    {
        return $this->belongsTo(Lugar::class, 'id_lugar_destino');
    }
}
