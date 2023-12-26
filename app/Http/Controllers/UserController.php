<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationFormRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    const JOB_SEEKER = 'seeker';
    const JOB_EMPLOYER = 'employer';
    public function createSeeker() {
        return view('user.register-seeker');
    }

    public function storeSeeker(RegistrationFormRequest  $request) {

        $user = User::create([
            'full_name' => request('full_name'),
            'username' => request('username'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'user_type' => self::JOB_SEEKER

        ]);

        Auth::login($user);
        $user->sendEmailVerificationNotification();

        return redirect()->route('verification.notice')->with('message', 'Your account was created');
    }

    public function login()
    {
        return view('user.login');
    }


    public function loginPost(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string'],
            'password' => ['required']
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)) {

            return redirect()->intended('dashboard');
            
        }

        return 'Wrong credentials';

    }

    public function logout() 
    {
     auth()->logout();
     return redirect()->route('login');
    }


    public function createEmployer()
     {
        return view('user.register-employer');
    }

    public function storeEmployer(RegistrationFormRequest $request) {

        $user = User::create([
            'full_name' => request('full_name'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'user_type' => self::JOB_EMPLOYER,
            'user_trial' => now()->addWeek()

        ]);

        Auth::login($user);

        $user->sendEmailVerificationNotification();

        return redirect()->route('verification.notice')->with('message', 'Your account was created');
    }


}
