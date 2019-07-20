<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Review extends Model
{
    use Notifiable;

    protected $fillable = [
        'name',
        'image_path',
        'video_path',
        'comment'
    ];
}
