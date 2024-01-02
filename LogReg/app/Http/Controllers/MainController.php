<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\WithEvents;

class MainController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function inregistrare()
    {
        return view('register');
    }

    public function layout()
    {
        return view('layout');
    }

    public function reviewinfo(Request $request)
    {
        $valid = $request->validate([
            'email'=>'required|min:3',
            'name'=>'required|min:3|max:15',
            'password'=>'required|min:5'
        ]);

        $input = $request->all();

        User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password'])
        ]);

        return view('register');

    }

    public function reviewceck(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);


        $cred = $request->validate([
            'email' => ['required','email'],
            'password' => ['required']
        ]);

        if(Auth::attempt($cred))
        {
            return view('ifreg');
        }
        return redirect()->back()->withInput()->withErrors(['message' => 'Invalid login or password']);
    }

}

