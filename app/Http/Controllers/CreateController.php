<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    /**
     * [POST] message.new:action
     */
    public function new(Request $request)
    {
        $message = new \App\Message;
        $message->title         =$request->title;
        $message->content       =$request->content;
        $message->from_user_id  =$request->from_user_id;
        $message->reply_message_id =$request->reply_message_id;
        $message->save();
        return redirect()->route('index');
    }
}
