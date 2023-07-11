<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function create(){
        return view('users.create');
    }

    public function store (Request $request){
        $formFields = $request->validate([
            'username' => ['required','min:3'],
            'email'=>['required','email', Rule::unique('users','email')],
            'password'=>['required','confirmed',"min:8"]
        ]);

        $formFields['password'] = bcrypt($formFields['password']);
        $formFields['isAdmin'] = False;
        $user = User::create($formFields);
        auth()->login($user);

        return redirect('./products')->with('success','User registered successfully');
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('./products')->with('success','Logged out!');;
    }
    
    public function login(){
        return view('users.login');
    }

    public function authenticate (Request $request){
        $formFields = $request->validate([
            'email'=>['required','email'],
            'password'=>'required'
        ]);

        if(auth()->attempt($formFields)){
            $request->session()->regenerate();

            return redirect('./products')->with('success','Successfully logged in!');
        }
        return back()->withErrors(['email'=>'Invalid credentials'])->onlyInput('email');
    }
}
