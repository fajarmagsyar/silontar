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
            $req->session()->regenerate();
            return redirect('/');
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
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'nama_perusahaan' => $request->input('nama_perusahaan'),
            'nama_direktur' => $request->input('nama_direktur'),
            'alamat_perusahaan' => $request->input('alamat_perusahaan'),
            'lokasi_permohonan' => $request->input('lokasi_permohonan'),
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
            return redirect('/');
        }
    }

    public function logout(Request $req)
    {
        Auth::logout();

        $req->session()->invalidate();

        $req->session()->regenerateToken();

        return redirect('/');
    }
}
