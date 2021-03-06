<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }
    
    public function spare_parts(){
        return $this->hasMany('App\SparePart');
    }
}
