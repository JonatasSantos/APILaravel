<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weather extends Model
{
    protected $fillable = [
        'date',
        'text',
        'temperature_min',
        'temperature_max',
        'rain_probability',
        'rain_precipitation'
    ];


}
