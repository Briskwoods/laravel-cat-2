<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    //Variables
  
    
    public function fees(){
        return $this->hasMany('App\Fees');
    }
}
