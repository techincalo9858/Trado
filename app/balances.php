<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class balances extends Model
{

  /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    public function users(){
    	return $this->belongsTo('App\users', 'user');
    }
}
