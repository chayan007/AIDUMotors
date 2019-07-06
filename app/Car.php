<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Car extends Model
{
    use Notifiable;
    protected $fillable = [
        'model',
        'transmission',
        'emi',
        'mileage',
        'price',
        'img_path',
        'brochure_path',
        'description',
        'featured',
        'slug',
        ];
}
