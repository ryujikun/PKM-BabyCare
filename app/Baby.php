<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Baby extends Model
{

    protected $table = 'babies';
    protected $dates = ['birth_date'];

    protected $fillable = [
        'name','birth_date', 'height', 'weight', 'condition',
        'id_picture', 'document_index','mother_id'
    ];

    public function mother()
    {
        return $this->hasOne('App\User','baby_id','id');
    }
}
