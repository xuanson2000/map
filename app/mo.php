<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mo extends Model
{
    //

     protected $table ="mo";
     public $timestamps = false;

     public function toado(){
     	return $this->hasManey('App\toado','idMo','id');
     }
}
