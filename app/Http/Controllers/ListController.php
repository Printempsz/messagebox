<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class ListController extends Controller
{
    /**
     * [GET] message.list
     */
    public function index()
    {
        $messages = \App\Message::latest()->paginate(20);
        return view('page.index',[
            'messages'      => $messages,
        ]);
    }

}
