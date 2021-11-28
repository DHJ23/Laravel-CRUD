<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehical extends Model
{
    use HasFactory;
    protected $table='vehicals';
    protected $fillable=[
        'name',
        'price',
        'fuel_capacity',
        'millage',
    ];
}
