<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';
    protected $fillable = [
        'ask_id','answer_id','question','answer'
    ];

    public function penanya(){
        return $this->hasOne('App\User','ask_id');
    }
    public function penjawab(){
        return $this->hasOne('App\User','answer_id');
    }
}
