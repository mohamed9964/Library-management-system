<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        /*$this->validate([
            'email'=>['required']['email'],
            'password'=>['required'],
        ]);*/
        if(Auth::guard('admin')->attempt(['email'=>$request->input("email") , 'password'=>$request->input("password")])){
            dd($request);
            return redirect()->intended('/index');
        }
        //return $next($request);
        dd($request);
        return back()->withInput($request->only('email'));
    }
}
