<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $table = 'Proyecto';
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'nombre',
        'descripcion',
        'requisitos',
        'inicio',
        'fin',
        'responsable',
        'pdf',
        'repositorio',
        
    ];
}
