<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    public function User(){
    return $this->belongsTo('App\User')->orderBy('id', 'desc');
    }
}
