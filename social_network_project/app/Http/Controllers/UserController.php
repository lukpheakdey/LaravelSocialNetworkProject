<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
    public function postSignUp(Request $request){
        $email = $request['email'];
        $first_name = $request['first_name'];
        $password = bcrypt($request['password']);
        $user = new User();

        $user->email = $email;
        $user->first_name = $first_name;
        $user->password = $password;

        $user->save();

        return redirect()->back();

    }

    public function postSignIn(Request $request){
        // $this->validate($request, [
        //     'email' => 'required',
        //     'password' => 'required'
        // ]);

        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
            return redirect()->route('dashboard');
        }
        return redirect()->back();
    }


    public function getDashboard(){
        return view("dashboard");
    }
}
