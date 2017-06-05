<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controllser;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if(\Auth::attempt([
            'name'          => $request->name,
            'password'      => $request->password,
        ], $request->remember)){
            return redirect()->route('index');
        }
        $request->flash();
            return redirect()->route('login')->with('message-error','密码错误');
        }
}
