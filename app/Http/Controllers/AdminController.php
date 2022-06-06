<?php

namespace App\Http\Controllers;

use App\Models\Permohonan;
use App\Models\PermohonanDetail;
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
        $pengajuan = Permohonan::join('user', 'user.user_id', 'permohonan.user_id')->join('permohonan_detail', 'permohonan.permohonan_id', '=', 'permohonan_detail.permohonan_id')->get();
        // dd($pengajuan);
        return view('admin.pengajuan', [
            'pengajuan' => $pengajuan,
        ]);
    }
    public function pengajuanDetail($id)
    {
        $pengajuan = Permohonan::join('user', 'user.user_id', 'permohonan.user_id')->where('permohonan.permohonan_id', $id)->first();
        $pd = PermohonanDetail::where('permohonan_id', $id)->first();
        return view('admin.pengajuan-detail', [
            'pengajuan' => $pengajuan,
            'pd' => $pd,
        ]);
    }
    public function pengajuanDetailStore(Request $req, $id)
    {
        $jenis = $req->input('jenis');

        $temp_berkas = $req->file('berkas')->getPathName();
        $file_berkas = $id . '-' . $jenis . time();
        $folder_berkas = "unggah/permohonan-detail/" . $file_berkas . ".pdf";
        move_uploaded_file($temp_berkas, $folder_berkas);
        $berkas = '/unggah/permohonan-detail/' . $file_berkas . '.pdf';

        PermohonanDetail::where('permohonan_id', $id)->update([$jenis => $berkas]);

        return redirect('/admin/pengajuan/detail/' . $id)->with('success', 'yes');
    }
    public function pengajuanDetailTolak($id)
    {
        PermohonanDetail::create(['permohonan_id' => $id, 'permohonan' => 'Kembalikan Berkas']);
        return redirect('/admin/pengajuan/detail/' . $id)->with('success', 'yes');
    }
    public function pengajuanDetailTerima($id)
    {
        PermohonanDetail::create(['permohonan_id' => $id, 'permohonan' => 'Setuju']);
        return redirect('/admin/pengajuan/detail/' . $id)->with('success', 'yes');
    }
    public function pengajuanDetailUpdate(Request $req, $id)
    {
        if ($req->input('permohonan')) {
            PermohonanDetail::where('permohonan_id', $id)->update([$req->input('jenis') => $req->input('permohonan')]);
        } else if ($req->input('lengkapi_berkas')) {
            PermohonanDetail::where('permohonan_id', $id)->update([$req->input('jenis') => $req->input('lengkapi_berkas')]);
        }
        return redirect('/admin/pengajuan/detail/' . $id)->with('success', 'yes');
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
    public function edituser()
    {
        return view('admin.edituser');
    }
}
