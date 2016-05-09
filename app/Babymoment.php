<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Babymoment extends Model
{
    protected  $table = 'babymoments';

    protected $fillable = [
        'baby_id', 'description'
    ];

    public function baby(){
        return $this->belongsTo('App\Baby', 'baby_id');
    }
}
