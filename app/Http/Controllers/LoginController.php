<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\login;
use Hash;

class LoginController extends Controller
{
    public function login(){
    	return view('login');
    }

    public function loginPost(Request $request){
        $username = $request->username;
        $password = $request->password;
        $data = login::where(['username' => $request->username , 'password' => $request->password])->first();
        if(count($data) > 0){ //apakah username tersebut ada atau tidak
                // echo ('masuk sebagai '. $username);
                return view('admin.index');
       		}

	        else{
	            echo('salah');
	        }
    }

    public function addregister(Request $request){
    	$data =  new login();
    	$data->username = $request->username;
    	$data->password = $request->password;
    	// dd($data);
    	$login = login::where(['username' => $request->username])->first();
    	if($login){
    		echo ('username'.$data->username.' ada');
        

    	}else{
            echo "username tidak ada";
    	$data->save();
        
        
    	// return redirect('login');

        }    
       

    	

    }
 
}
