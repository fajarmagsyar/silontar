<?php

namespace App\Http\Controllers;

use App\Models\Berkas;
use App\Models\Permohonan;
use App\Models\PermohonanDetail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index()
    {
        return view('index', [
            'pageTitle' => 'SILONTAR | Beranda',
            'page' => 'beranda',
        ]);
    }

    public function login()
    {
        return view('login');
    }

    public function lupaPassword()
    {
        return view('lupa-password');
    }

    public function pengajuan()
    {
        if (auth()->user()->email_verified_at == null) {
            return redirect('/verifikasi-akun')->with('error', 'Mohon verifikasi terlebih dahulu!');
        }
        return view('pengajuan', [
            'dataUser' => User::find(auth()->user()->user_id),
            'pageTitle' => 'SILONTAR | Pengajuan',
            'page' => 'pengajuan',
            'berkas' => Berkas::get(),
        ]);
    }

    public function pengajuanListAll()
    {
        return view('pengajuan-list', [
            'dataUser' => User::find(auth()->user()->user_id),
            'pengajuan' => Permohonan::join('user', 'user.user_id', '=', 'permohonan.user_id')->leftJoin('permohonan_detail', 'permohonan_detail.permohonan_id', '=', 'permohonan.permohonan_id')->where('permohonan.user_id', auth()->user()->user_id)->orderBy('permohonan.created_at', 'desc')->select(['permohonan.*', 'permohonan_detail.permohonan', 'user.user_id'])->paginate(10),
            'pageTitle' => 'SILONTAR | List Pengajuan',
            'page' => 'pengajuan',
        ]);
    }



    public function pengajuanList($id)
    {
        return view('pengajuan-single', [
            'dataUser' => User::find(auth()->user()->user_id),
            'pengajuan' => Permohonan::join('user', 'user.user_id', '=', 'permohonan.user_id')
                ->where('permohonan.user_id', auth()->user()->user_id)
                ->orderBy('permohonan.created_at', 'desc')
                ->where('permohonan.permohonan_id', '=', $id)
                ->paginate(1),
            'pageTitle' => 'SILONTAR | List Pengajuan',
            'page' => 'pengajuan',
        ]);
    }




    public function pengajuanStore(Request $request)
    {
        $expl = explode('to', $request->input('jadwal_pelaksanaan'));
        $administrasi = ['surat_permohonan', 'surat_pernyataan', 'ktp', 'npwp', 'kswp', 'nib', 'siup', 'akta_perusahaan'];
        $teknis = ['gambar_lokasi', 'gambar_konstruksi'];

        foreach ($administrasi as $key => $r) {
            $temp_berkas = $request->file($r)->getPathName();
            $file_berkas = auth()->user()->user_id . '-' . $r . time();
            $folder_berkas = "unggah/administrasi-permohonan/" . $file_berkas . ".pdf";
            move_uploaded_file($temp_berkas, $folder_berkas);
            $berkas[$key] = '/unggah/administrasi-permohonan/' . $file_berkas . '.pdf';
        }

        foreach ($teknis as $key2 => $s) {
            $temp_berkas = $request->file($s)->getPathName();
            $ex = $request->file($s)->extension();
            $file_berkas = auth()->user()->user_id . '-' . $s . time();
            $folder_berkas = "unggah/teknis-permohonan/" . $file_berkas . "." . $ex;
            move_uploaded_file($temp_berkas, $folder_berkas);
            $foto[$key2] = '/unggah/teknis-permohonan/' . $file_berkas . "." . $ex;
        }

        $data = [
            'jenis_permohonan' => $request->input('jenis_permohonan'),
            'kode' => Str::random(6),
            'surat_permohonan_no' => $request->input('surat_permohonan_no'),
            'surat_pernyataan_no' => $request->input('surat_pernyataan_no'),
            'npwp_no' => $request->input('npwp_no'),
            'surat_permohonan' => $berkas[0],
            'surat_pernyataan' => $berkas[1],
            'ktp' => $berkas[2],
            'npwp_no' => $request->input('npwp_no'),
            'npwp' => $berkas[3],
            'kswp' => $berkas[4],
            'nib' => $berkas[5],
            'siup' => $berkas[6],
            'akta_perusahaan' => $berkas[7],
            'gambar_lokasi' => $foto[0],
            'gambar_konstruksi' => $foto[1],
            'jadwal_pelaksanaan' => $expl[0],
            'jadwal_pelaksanaan_b' => $expl[1],
            'user_id' => auth()->user()->user_id,
        ];

        Permohonan::create($data);

        return redirect('/pengajuan/list')->with('success', 'Pengajuan berhasil dilakukan');
    }
    public function profil()
    {
        return view('profil', [
            'dataUser' => User::find(auth()->user()->user_id),
            'pageTitle' => 'SILONTAR | Profil',
            'page' => 'profil',
        ]);
    }

    public function ubahPassword(Request $request)
    {
        // auth()->user()->password == Hash::make($request->input('pasword-lama'))
        if (Auth::validate(['email' => auth()->user()->email, 'password' => $request->input('password-lama')])) {


            $data = [
                'password' => Hash::make($request->input('password-baru')),
            ];
            User::find(auth()->user()->user_id)->update($data);
            return redirect('/profil')->with('success', 'Password berhasil diubah');
        }
        return redirect('/profil')->with('error', 'Password lama anda salah');
    }

    public function mulaiKerjaUpload(Request $request, $id)
    {
        date_default_timezone_set("Asia/Makassar");
        $data = $request->input('surat_mulai_kerja_no');

        $temp_berkas = $request->file('berkas')->getPathName();
        $file_berkas = auth()->user()->user_id . '-' . 'Surat Mulai Kerja' . time();
        $folder_berkas = "unggah/permohonan-detail/" . $file_berkas . ".pdf";
        move_uploaded_file($temp_berkas, $folder_berkas);
        $berkas = '/unggah/permohonan-detail/' . $file_berkas . '.pdf';


        PermohonanDetail::where('permohonan_id', $id)->update(['surat_mulai_kerja_no' => $data, 'surat_mulai_kerja' => $berkas, 'surat_mulai_kerja_date' => date('d-m-Y H:i:s')]);

        return redirect('/pengajuan/list')->with('success', 'Surat Mulai Kerja berhasil di upload');
    }
    public function berkasUpload(Request $request, $id)
    {
        date_default_timezone_set("Asia/Makassar");
        $temp_lokasi = $request->file('gambar_lokasi')->getPathName();
        $ex_lokasi = $request->file('gambar_lokasi')->extension();
        $file_lokasi = auth()->user()->user_id . '-' . 'Gambar_Lokasi' . time();
        $folder_lokasi = "unggah/permohonan-detail/" . $file_lokasi . "." . $ex_lokasi;
        move_uploaded_file($temp_lokasi, $folder_lokasi);
        $lokasi = '/unggah/permohonan-detail/' . $file_lokasi . "." . $ex_lokasi;

        $temp_konstruksi = $request->file('gambar_konstruksi')->getPathName();
        $ex_konstruksi = $request->file('gambar_konstruksi')->extension();
        $file_konstruksi = auth()->user()->user_id . '-' . 'Gambar_Konstruksi' . time();
        $folder_konstruksi = "unggah/permohonan-detail/" . $file_konstruksi . "." . $ex_konstruksi;
        move_uploaded_file($temp_konstruksi, $folder_konstruksi);
        $konstruksi = '/unggah/permohonan-detail/' . $file_konstruksi . "." . $ex_konstruksi;

        $temp_sanggup = $request->file('sanggup_bayar')->getPathName();
        $file_sanggup = auth()->user()->user_id . '-' . 'Surat_Sanggup_Bayar' . time();
        $folder_sanggup = "unggah/permohonan-detail/" . $file_sanggup . ".pdf";
        move_uploaded_file($temp_sanggup, $folder_sanggup);
        $sanggup = '/unggah/permohonan-detail/' . $file_sanggup . '.pdf';

        $temp_jadwal = $request->file('jadwal_pelaksanaan')->getPathName();
        $file_jadwal = auth()->user()->user_id . '-' . 'Jadwal_Pelaksanaan' . time();
        $folder_jadwal = "unggah/permohonan-detail/" . $file_jadwal . ".pdf";
        move_uploaded_file($temp_jadwal, $folder_jadwal);
        $jadwal = '/unggah/permohonan-detail/' . $file_jadwal . '.pdf';

        $data = [
            'gambar_lokasi' => $lokasi,
            'gambar_konstruksi' => $konstruksi,
            'sanggup_bayar' => $sanggup,
            'jadwal_pelaksanaan_b' => $jadwal,
        ];

        PermohonanDetail::where('permohonan_id', $id)->update($data);

        return redirect('/pengajuan/list')->with('success', 'Surat Mulai Kerja berhasil di upload');
    }
    public function faq()
    {
        return view('faq', [
            'pageTitle' => 'SILONTAR | FAQ',
            'page' => 'faq',
            'berkas' => Berkas::get(),
        ]);
    }
}
