<?php

namespace App\Http\Controllers;

use App\Models\Permohonan;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function beranda()
    {
        return view('admin.beranda');
    }
    public function pengajuan()
    {
        $pengajuan = Permohonan::join('user', 'user.user_id', 'permohonan.user_id')->get();
        // dd($pengajuan);
        return view('admin.pengajuan', [
            'pengajuan' => $pengajuan,
        ]);
    }
    public function user()
    {
        $user = User::get();
        return view('admin.user', [
            'user' => $user,
        ]);
    }
    public function profil()
    {
        return view('admin.profil');
    }
}
