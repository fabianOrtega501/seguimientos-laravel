<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seguimientos extends Model
{
    use HasFactory;

    public $table = "seguimientos";
    protected $fillable = [
        'Nombres',
        'Apellidos',
        'Asunto',
        'Correo',
        'Telefono',
        'Fecha',
        'Dias',
        'fecha_proximo_seguimiento',
        'id'
    ];
}
