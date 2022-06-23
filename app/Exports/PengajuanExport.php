<?php

namespace App\Exports;

use App\Models\PermohonanDetail;
use Maatwebsite\Excel\Concerns\FromCollection;

class PengajuanExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return PermohonanDetail::all();
    }
}
