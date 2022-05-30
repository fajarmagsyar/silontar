<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function beranda()
    {
        return view('admin.beranda');
    }
    public function user()
    {
        $user = User::get();
        return view('admin.user', [
            'user' => $user,
        ]);
    }
}
