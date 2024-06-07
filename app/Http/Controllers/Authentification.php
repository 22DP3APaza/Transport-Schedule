<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class Authentification extends Controller
{
    function Signin(){
        if(Auth::check()){
            return redirect(route('home'));
        }
        return view('Signin');

    }

    function Signup(){
        if(Auth::check()){
            return redirect(route('home'));
        }
        return view('Signup');
    }

    function signinPost(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            return redirect()->intended(route('home'));
        }
        return redirect(route('signin'))->with('Error','Nepareizi ievadīts epasts vai parole.');
    }

    function signupPost(Request $request){
        $data = $request->validate([
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8'
        ], [
            'password.min' => 'Parolei jābūt vismaz 8 rakstzīmju garumā.'
        ]);

        // Hash the password before saving
        $data['password'] = Hash::make($data['password']);

        $user = User::create($data);
        if(!$user){
            return redirect(route('signup'))->with('error', 'Reģistrēšanās neizdevās, meiģiniet vēlreiz.');
        }
        return redirect(route('signin'))->with('success', 'Reģistrācija izdevusies, lūdzu ielagojaties');
    }

    function logout(){
        Session::flush();
        Auth::logout();
        return redirect(route('signin'));
    }
}
