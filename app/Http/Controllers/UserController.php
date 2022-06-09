<?php

namespace App\Http\Controllers;

use App\Models\Permohonan;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function login()
    {
        return view('login');
    }

    public function pengajuan()
    {
        return view('pengajuan', [
            'dataUser' => User::find(auth()->user()->user_id),
        ]);
    }

    public function pengajuanList()
    {
        return view('pengajuan-list', [
            'dataUser' => User::find(auth()->user()->user_id),
            'pengajuan' => Permohonan::join('user', 'user.user_id', '=', 'permohonan.user_id')->where('permohonan.user_id', auth()->user()->user_id)->orderBy('permohonan.created_at', 'desc')->paginate(10),
        ]);
    }


    public function pengajuanStore(Request $request)
    {
        $administrasi = ['surat_permohonan', 'surat_pernyataan', 'ktp', 'npwp', 'kswp', 'nib', 'siup', 'akta_perusahaan'];
        $teknis = ['gambar_lokasi', 'gambar_konstruksi'];
        // dd($request->file('npwp'));
        foreach ($administrasi as $key => $r) {
            $temp_berkas = $request->file($r)->getPathName();
            $file_berkas = auth()->user()->user_id . '-' . $r . time();
            $folder_berkas = "unggah/administrasi-permohonan/" . $file_berkas . ".pdf";
            move_uploaded_file($temp_berkas, $folder_berkas);
            $berkas[$key] = '/unggah/administrasi-permohonan/' . $file_berkas . '.pdf';
        }

        foreach ($teknis as $key2 => $s) {
            $temp_berkas = $request->file($s)->getPathName();
            $file_berkas = auth()->user()->user_id . '-' . $s . time();
            $folder_berkas = "unggah/teknis-permohonan/" . $file_berkas . ".pdf";
            move_uploaded_file($temp_berkas, $folder_berkas);
            $foto[$key2] = '/unggah/teknis-permohonan/' . $file_berkas . '.pdf';
        }

        $data = [
            'surat_permohonan' => $berkas[0],
            'surat_pernyataan' => $berkas[1],
            'ktp' => $berkas[2],
            'npwp' => $berkas[3],
            'kswp' => $berkas[4],
            'nib' => $berkas[5],
            'siup' => $berkas[6],
            'akta_perusahaan' => $berkas[7],
            'gambar_lokasi' => $foto[0],
            'gambar_konstruksi' => $foto[1],
            'jadwal_pelaksanaan' => $request->input('jadwal_pelaksanaan'),
            'user_id' => auth()->user()->user_id,
        ];

        Permohonan::create($data);

        return redirect('/')->with('success', 'Pengajuan berhasil dilakukan');
    }
    public function profil()
    {
        return view('profil');
    }
}
