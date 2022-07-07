<?php

namespace App\Exports;

use App\Models\Permohonan;
use App\Models\PermohonanDetail;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class PengajuanExport implements FromCollection, WithHeadings, WithMapping, ShouldAutoSize
{

    public function __construct(int $year, int $month)
    {
        $this->year = $year;
        $this->month = $month;
    }
    public function headings(): array
    {
        return [
            'TANGGAL PERMOHONAN',
            'NAMA PEMOHON',
            'JENIS KELOMPOK PERIZINAN',
            'SURAT PERMOHONAN',
            'SURAT PERNYATAAN',
            'SITU & SIUP',
            'AKTA PERUSAHAAN',
            'NPWP ',
            'KSWP',
            'GAMBAR',
            'METODE PELAKSANAAN',
            'JADWAL PELAKSANAAN',
            'UNDANGAN PERSIAPAN SURVEI',
            'BA SURVEI',
            'BA PEMBAHASAN SURVEI',
            'PERSETUJUAN IZIN PRINSIP',
            'PERUBAHAN GAMBAR',
            'REKOMTEK',
            'SURAT PERMOHONAN KE KPKNL',
            'SURAT PERMOHONAN KE SETDITJEN',
            'SURAT PERNYATAAN SIAP MEMBAYAR',
            'SURAT IZIN PEMBANGUNAN',
        ];
    }

    public function collection()
    {
        return Permohonan::join('permohonan_detail', 'permohonan_detail.permohonan_id', '=', 'permohonan.permohonan_id')
            ->join('user', 'user.user_id', '=', 'permohonan.user_id')
            ->whereMonth('permohonan.created_at', $this->month)
            ->whereYear('permohonan.created_at', $this->year)
            ->get([
                'permohonan.created_at',
                'user.nama_direktur',
                'user.nama_perusahaan',
                'permohonan.jenis_permohonan',
                'permohonan.surat_permohonan',
                'permohonan.surat_permohonan_no',
                'permohonan.surat_pernyataan',
                'permohonan.surat_pernyataan_no',
                'permohonan.siup',
                'permohonan.akta_perusahaan',
                'permohonan.npwp',
                'permohonan.npwp_no',
                'permohonan.kswp',
                'permohonan.gambar_lokasi',
                'permohonan.jadwal_pelaksanaan',
                'permohonan.jadwal_pelaksanaan_b',
                'permohonan_detail.undangan',
                'permohonan_detail.undangan_no',
                'permohonan_detail.undangan_date',
                'permohonan_detail.ba',
                'permohonan_detail.ba_no',
                'permohonan_detail.ba_date',
                'permohonan_detail.ba_survey',
                'permohonan_detail.ba_survey_no',
                'permohonan_detail.ba_survey_date',
                'permohonan_detail.izin_prinsip',
                'permohonan_detail.izin_prinsip_no',
                'permohonan_detail.izin_prinsip_date',
                'permohonan_detail.rekom_teknis',
                'permohonan_detail.rekom_teknis_no',
                'permohonan_detail.rekom_teknis_date',
                'permohonan_detail.gambar_lokasi as gambar_lokasi_baru',
                'permohonan_detail.kpknl',
                'permohonan_detail.kpknl_no',
                'permohonan_detail.kpknl_date',
                'permohonan_detail.dirjen_bm',
                'permohonan_detail.dirjen_bm_no',
                'permohonan_detail.dirjen_bm_date',
                'permohonan_detail.sanggup_bayar',
                'permohonan_detail.surat_mulai_kerja',
                'permohonan_detail.surat_mulai_kerja_no',
                'permohonan_detail.surat_mulai_kerja_date',
            ]);
    }

    public function map($row): array
    {
        $fields = [
            ($row->created_at) ? '(' . $row->created_at . '/' . $row->nama_perusahaan . ')' : '',
            $row->nama_direktur,
            $row->jenis_permohonan,
            ($row->surat_permohonan) ? '✓ | (' . $row->surat_permohonan_no . ')' : '',
            ($row->surat_pernyataan) ? '✓ | (' . $row->surat_pernyataan_no . ')' : '',
            ($row->siup) ? '✓' : '',
            ($row->akta_perusahaan) ? '✓' : '',
            $row->npwp_no,
            ($row->kswp) ? '✓' : '',
            ($row->gambar_lokasi) ? '✓' : '',
            ($row->gambar_lokasi) ? '✓' : '',
            ($row->jadwal_pelaksanaan) ? '✓ | (' . $row->jadwal_pelaksanaan . 'sd' . $row->jadwal_pelaksanaan_b . ')' : '',
            ($row->undangan) ? '✓ | (' . $row->undangan_no . '/' . $row->undangan_date . ')' : '',
            ($row->ba) ? '✓ | (' . $row->ba_no . '/' . $row->ba_date . ')' : '',
            ($row->ba_survey) ? '✓ | (' . $row->ba_survey_no . '/' . $row->ba_survey_date . ')' : '',
            ($row->izin_prinsip) ? '✓ | (' . $row->izin_prinsip_no . '/' . $row->izin_prinsip_date . ')' : '',
            ($row->gambar_lokasi_baru) ? '✓' : '',
            ($row->rekom_teknis) ? '✓ | (' . $row->rekom_teknis_no . '/' . $row->rekom_teknis_date . ')' : '',
            ($row->kpknl) ? '✓ | (' . $row->kpknl_no . '/' . $row->kpknl_date . ')' : '',
            ($row->dirjen_bm) ? '✓ | (' . $row->dirjen_bm_no . '/' . $row->dirjen_bm_date . ')' : '',
            ($row->sanggup_bayar) ? '✓' : '',
            ($row->surat_mulai_kerja_no) ? '✓ | (' . $row->surat_mulai_kerja_no . '/' . $row->surat_mulai_kerja_date . ')' : '',
        ];
        return $fields;
    }
}
