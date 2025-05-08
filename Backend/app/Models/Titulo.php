<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Titulo extends Model
{
    
    protected $fillable=[
        'nombre', 'estado', 'descripcion'
    ];

    public $table = "titulo";

    public static function getAllTitulos(){
        $titulos = self::all();
        return $titulos;
    }

    use HasFactory;
}