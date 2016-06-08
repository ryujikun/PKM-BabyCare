<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table = 'answers';

    protected $fillable = [
        'user_id','question_id','body'
    ];

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }

    public function question(){
        return $this->hasOne('App\Question','question_id');
    }

}
