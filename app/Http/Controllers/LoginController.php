<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\login;
use App\User;
use Hash;
use Auth;
use Session;

class LoginController extends Controller
{
    public function login(){
    	return view('auth.login');
    }

    public function register(){
        return view('auth.register');
    }

    public function addregister(Request $data){
         $this->validate($data, [
            'name' => 'required', 'string', 'max:255',
            'alamat' => 'required',
            'kota' => 'required', 'string', 'max:255',
            'postal_code' => 'required', 'string', 'max:255',
            'phone' => 'required', 'string', 'max:255',
            'email' => 'required', 'string', 'email', 'max:255', 'unique:users',
            'password' => 'required', 'string', 'min:6', 'confirmed',
        ]);

         // dd($data->all());

        $user = new User;
        $user->name = $data->name;
        $user->email = $data->email;
        $user->alamat = $data->alamat;
        $user->kota = $data->kota;
        $user->postal_code = $data->postal_code;
        $user->phone = $data->phone;
        $user->remember_token = $data->_token;
        $user->password = Hash::make($data->password);

        // dd($user);
        $user->save();
        return redirect('/')->with('success','Anda Berhasil register');

    }

    public function posts(Request $request){
        $this->validate($request, [
            'email' => 'email|exists:users,email',
            'password' => 'required',
        ]);

        $attempts = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($attempts, (bool) $request->remember)) {
            return redirect()->intended('/');
        }

        return redirect()->back();
    }

    public function logout()
        {
            Auth::logout();

            return redirect('/new_login')
                ->with('message', 'You have been logged out');
        }
 
}
