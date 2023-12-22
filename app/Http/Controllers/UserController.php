<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function createSeeker() {
        return view('user.register-seeker');
    }


    public function createEmployer() {
        return view('user.register-employer');
    }
}
