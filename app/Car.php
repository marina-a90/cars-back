<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'brand',
        'model',
        'year',
        'maxSpeed',
        'isAutomatic',
        'engine',
        'numberOfDoors'
    ];

    const brand = [
        'VV', 
        'Mercedes',
        'Audi', 
        'Opel', 
        'Suzuki', 
        'Ferrari', 
        'Citroen'
    ];

    const model = [
        'limuzine', 
        'caravan',
        'cabriolet'
    ];

    const engine = [
        'diesel', 
        'petrol',
        'hybrid', 
        'electric'
    ];
}
