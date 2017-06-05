<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegController extends Controller
{
    public function reg(Request $request)
    {
        $user = new \App\User;
        $user->name         =$request->name;
        $user->password     =bcrypt($request->password);
        $user->save();
        return redirect()->route('login');
    }
}
