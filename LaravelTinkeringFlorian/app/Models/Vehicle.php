<?php

namespace App\Models;

use Database\Factories\VehicleFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    /** @use HasFactory<VehicleFactory> */
    use HasFactory;

    protected $fillable = ['marca', 'model', 'any_fabricacio', 'color_fabrica', 'preu', 'info_adicional'];
}
