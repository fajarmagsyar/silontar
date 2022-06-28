<?php

namespace App\Http\Controllers;

use App\Exports\PengajuanExport;
use App\Models\Permohonan;
use App\Models\PermohonanDetail;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    public function beranda()
    {
        return view('admin.beranda');
    }
    public function pengajuan()
    {
        $pengajuan = Permohonan::join('user', 'user.user_id', 'permohonan.user_id')->leftJoin('permohonan_detail', 'permohonan.permohonan_id', '=', 'permohonan_detail.permohonan_id')->get(['user.*', 'permohonan.*', 'permohonan_detail.permohonan']);
        // dd($pengajuan);
        return view('admin.pengajuan', [
            'pengajuan' => $pengajuan,
        ]);
    }
    public function pengajuanDetail($id)
    {
        $pengajuan = Permohonan::join('user', 'user.user_id', 'permohonan.user_id')->where('permohonan.permohonan_id', $id)->first();
        return view('admin.pengajuan-detail', [
            'pengajuan' => $pengajuan,
            'pd' => PermohonanDetail::where('permohonan_id', $id)->first(),
        ]);
    }
    public function pengajuanDetailStore(Request $req, $id)
    {
        date_default_timezone_set("Asia/Makassar");
        $jenis = $req->input('jenis');

        $temp_berkas = $req->file('berkas')->getPathName();
        $file_berkas = $id . '-' . $jenis . time();
        $folder_berkas = "unggah/permohonan-detail/" . $file_berkas . ".pdf";
        move_uploaded_file($temp_berkas, $folder_berkas);
        $berkas = '/unggah/permohonan-detail/' . $file_berkas . '.pdf';

        PermohonanDetail::where('permohonan_id', $id)->update([$jenis => $berkas, $jenis . '_date' => date('d-m-Y H:i:s')]);

        return redirect('/admin/pengajuan/detail/' . $id)->with('success', 'yes');
    }
    public function pengajuanDetailTolak($id)
    {
        date_default_timezone_set("Asia/Makassar");
        PermohonanDetail::create(['permohonan_id' => $id, 'permohonan' => 'Kembalikan Berkas', 'permohonan_date' => date('d-m-Y H:i:s')]);
        return redirect('/admin/pengajuan/detail/' . $id)->with('success', 'yes');
    }
    public function pengajuanDetailTerima($id)
    {
        date_default_timezone_set("Asia/Makassar");
        PermohonanDetail::create(['permohonan_id' => $id, 'permohonan' => 'Setuju', 'permohonan_date' => date('d-m-Y H:i:s')]);
        return redirect('/admin/pengajuan/detail/' . $id)->with('success', 'yes');
    }
    public function pengajuanDetailUpdate(Request $req, $id)
    {
        date_default_timezone_set("Asia/Makassar");
        if ($req->input('permohonan')) {
            PermohonanDetail::where('permohonan_id', $id)->update([$req->input('jenis') => $req->input('permohonan'), 'permohonan_date' => date('d-m-Y H:i:s')]);
        } else if ($req->input('lengkapi_berkas')) {
            PermohonanDetail::where('permohonan_id', $id)->update([$req->input('jenis') => $req->input('lengkapi_berkas'), 'lengkapi_berkas_date' => date('d-m-Y H:i:s')]);
        }
        return redirect('/admin/pengajuan/detail/' . $id)->with('success', 'yes');
    }
    public function user()
    {
        $user = User::where('role', 'user')->get();
        return view('admin.user', [
            'user' => $user,
        ]);
    }
    public function profil()
    {
        return view('admin.profil', [
            'dataUser' => User::find(auth()->user()->user_id),
        ]);
    }

    public function cetak_laporan()
    {
        return view('admin.cetak_laporan');
    }

    public function edituser()
    {
        return view('admin.edituser');
    }
    public function komentarSimpan(Request $req, $id)
    {
        $data = [
            'komentar' => $req->input('komentar'),
        ];
        // MASUKKAN KE DATABASE
        PermohonanDetail::where('permohonan_id', $id)->update($data);

        return redirect('/admin/pengajuan/detail/' . $id);
    }
    public function dokumen()
    {
        return view('admin.dokumen');
    }
    public function exportExcel(Request $request)
    {
        return Excel::download(new PengajuanExport, 'Permohonan Detail.xlsx');
    }
}
