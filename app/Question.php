<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;

class Question extends Model
{
    protected $table = 'questions';
    protected $fillable = [
        'user_id','answer_id','question'
    ];
    
    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
    public function answer(){
        return $this->belongsTo('App\Answer','answer_id');
    }
}
