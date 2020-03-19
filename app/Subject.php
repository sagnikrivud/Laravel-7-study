<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    //----Make a relation with Users-------//
    protected $fillable = ['subject'];

    public  function subject_user()
    {
    	return $this->hasOne('App\User','id','user_id');
    }
    
}
