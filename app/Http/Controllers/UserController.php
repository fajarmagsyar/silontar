<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function tentang()
    {
        (User::get());
        return User::get();
    }
}
