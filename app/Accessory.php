<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Accessory extends Model
{
    use Notifiable;
    protected $fillable = [
        'id',
        'name',
        'description',
        'price',
        'img_path',
    ];
}
