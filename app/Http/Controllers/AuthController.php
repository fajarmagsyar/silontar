<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $req)
    {
        $credentials = $req->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $user = User::where('email', $req->input(('email')))->first();
            $req->session()->regenerate();
            if ($user->role == 'admin') {
                return redirect('/admin/dashboard');
            }
            return redirect('/beranda');
        }

        return back()->with('error', 'Email atau password anda salah!');
    }
    public function daftar()
    {
        return view('daftar');
    }
    public function daftarStore(Request $request)
    {
        $input = [
            'nik' => $request->input('nik'),
            'nama' => $request->input('nama'),
            'jk' => $request->input('jk'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'alamat' => $request->input('alamat'),
            'nama_perusahaan' => $request->input('nama_perusahaan'),
            'alamat_perusahaan' => $request->input('alamat_perusahaan'),
            'role' => 'user'
        ];

        if ($request->input('sdk') == null) {
            return redirect('/registrasi')->with('error', 'Centang syarat dan ketentuan sebelum registrasi!');
        }
        User::create($input);


        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/beranda');
        }
    }
}
