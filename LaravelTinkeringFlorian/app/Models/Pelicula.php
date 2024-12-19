<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{

    /** @use HasFactory<\Database\Factories\PeliculaFactory> */
    use HasFactory;

    protected $fillable = ['Nom_pelicula', 'Sinopsis', 'Pais_origen', 'Durada', 'Data_estreno'];
}
