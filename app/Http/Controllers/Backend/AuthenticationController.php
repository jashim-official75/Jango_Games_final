<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthenticationController extends Controller
{
    //--login--
    public function login()
    {
        return view('auth.login');
    }
    //--login_store
    public function login_store(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password])){
            return redirect()->route('dashboard')
            ->with('message', 'You are successfully logged in');
        }
        else{
            return redirect()->route('login')->with('error','Login details are not valid');
        }
    }
    //---register--
    public function register()
    {
        return view('auth.register');
    }
    //---register_store
    public function register_store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('user.index')->with('message','Registration Has Been Successfully !');
    }
}
