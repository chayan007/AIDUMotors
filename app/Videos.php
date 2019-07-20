<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Videos extends Model
{
    use Notifiable;

    protected $fillable = [
        'id',
        'video_path'
    ];
}
