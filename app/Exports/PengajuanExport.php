<?php

namespace App\Exports;

use App\Models\PermohonanDetail;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class PengajuanExport implements FromView
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function  view(): View
    {
        $pengajuan = PermohonanDetail::get();
        return view('exports.pengajuan', [
            'pengajuan' => $pengajuan
        ]);
    }
}
