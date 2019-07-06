<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Media extends Model
{
    use Notifiable;
    protected $fillable =[
        'id',
        'image_path',
        'description',
    ];
}
