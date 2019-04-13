<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';
    protected $primaryKey = 'id';
    protected $fillable = [
        'about_me', 
        'birth_date',
        'address',
        'gender',
        'phone',
        'status'
    ];
    public $timestamps = false;

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
