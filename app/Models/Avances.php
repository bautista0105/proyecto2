<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avances extends Model
{
    protected $table = 'Avances';
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'descripcion',
        'fecha',
        'url',
        'reportes',
        'Registro_id',
        
    ];
}
