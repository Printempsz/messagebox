<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class ListController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * [GET] message.list
     */
    public function index()
    {
        $messages = \App\Message;
        $messages = $messages>latest()->paginate($this->numberPerpage);
        return view('page.list',[
            'message' => $messages,
        ]);
    }
}
