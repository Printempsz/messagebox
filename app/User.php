<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'users';
//    public function message()
//    {
//       return $this->belongsTo('App\Message');
//       return $this->belongsTo('App\Message','','')
//    }
}
