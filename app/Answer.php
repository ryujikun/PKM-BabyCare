<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table = 'answers';

    protected $fillable = [
        'user_id','question_id','answer'
    ];

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }

    public function question()
    {
        return $this->belongsTo('App\Question','question_id');
    }
}
