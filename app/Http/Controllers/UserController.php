<?php

namespace App\Http\Controllers;

use App\Http\Requests\seekerRegistrationRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    const JOB_SEEKER = 'seeker';
    public function createSeeker() {
        return view('user.register-seeker');
    }

    public function storeSeeker(seekerRegistrationRequest $request) {

        User::create([
            'full_name' => request('full_name'),
            'username' => request('username'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'user_type' => self::JOB_SEEKER

        ]);
        return back();
    }

    public function login(){
        return view('user.login');
    }


    public function createEmployer() {
        return view('user.register-employer');
    }
}
