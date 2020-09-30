<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginAdmin;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function login(){
        return view('admin.auth.login');
    }

    public function logged(LoginAdmin $request){

        if(auth()->guard('admin')->attempt(['email'=>$request->input("email") , 'password'=>$request->input("password")])){
            return redirect()->route('dash');//intended('/index');
        }

        return redirect()->back()->withInput($request->only('email'));
    }

    public function resetPassword(){
        return view('admin.auth.resetPassword');
    }
    public function reset(Request $request){

        $this->validate($request,['current'=>'required',
            'new'=>'required|min:8',
            'confirmNew'=>'required|min:8']);

        $check_pwd=Auth::user()->email;

        $admin = DB::table('admins')->where('email', $check_pwd)->first();

        $current_pwd=$request->current;

        if (Hash::check($current_pwd,$admin->password)){
            $newPassword= bcrypt($request->new);
            //$admin->password=$newPassword;
            DB::table('admins')->where('email', $check_pwd)->update(['password'=>$newPassword]);
            //$admin->save();
            return redirect()->route('adminLogin');
        }else{
            //echo "false";die;
            return redirect()->back();
        }

    }

    public function dash(){
        return view('admin.dashboard.books');
    }
    // see students
    public function getstudents(){
        $students=User::all();
        return view('students');
    }
}
