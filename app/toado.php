<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class toado extends Model
{
    //

     protected $table ="toado";
     public $timestamps = false;
     
     public function mo(){
     	return $this->belongsTo('App\mo','idMo','id');
     }

}
