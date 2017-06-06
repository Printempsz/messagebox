<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    protected $table = 'messages';
//    public function user()
//    {
//          return $this->hasOne('App\User','id','from_user_id');
//    }
    public function messages()
    {
        return $this->hasMany('App\Message','reply_message_id','message_id');
    }

    public function message()
    {
        return $this->belongsTo('App\Message','reply_message_id','message_id');
    }

}
