<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable{
    //
    protected $table = 'users';
    protected $fillable = [
        'first_name', 
        'last_name',
        'email',
        'password'
    ];
    public $timestamps = false;

    public function friends(){
    	return $this->belongstoMany('App\friends');
    }

    public function messagesFrom(){
    	return $this->hasMany('App\messages');
    }

    public function messagesTo(){
    	return $this->hasMany('App\messages');
    }

    public function profile(){
    	return $this->hasOne('App\Profile');
    }

    public function hobbies(){
    	return $this->hasOne('App\hobbies');
    }

    public function posts(){
    	return $this->hasMany('App\posts');
    }
}
