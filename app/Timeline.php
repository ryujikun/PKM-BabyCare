<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timeline extends Model
{
    protected $table = 'timelines';

    protected $fillable=[
        'image_id'
    ];
}
