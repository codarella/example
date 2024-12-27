<?php

namespace App\Http\Controllers;
use App\Models\User;
use Auth;

use Illuminate\Http\Request;

class RegisteredUserController extends Controller
{
    public function create(){
return view ('auth.register')   ;

}
public function store(){
    //validate 
    $attributes=request()->validate(
        [
            'first_name'=>['min:3','required'],
            'last_name'=>['min:3','required'],
            'email'=>['email','required'],
            'password'=>['required','min:3','confirmed'],
        ]
        );
        // return dd($attributes);
        $user=User::create([
            'first_name' => $attributes['first_name'],
            'last_name' => $attributes['last_name'],
            'email' => $attributes['email'],
            'password' => $attributes['password'],
            'admin' => 0, // Default to non-admin
        ]);
       ( Auth::login($user));

        return redirect('/jobs');

}

    
}
