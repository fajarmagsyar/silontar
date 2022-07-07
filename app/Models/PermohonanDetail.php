<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermohonanDetail extends Model
{
    use HasFactory;
    protected $keyType = 'string';
    protected $primaryKey = 'pd_id';
    protected $table = 'permohonan_detail';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $guarded = ['pd_id'];

    static public function getDetailById($id)
    {
        return PermohonanDetail::where('permohonan_id', $id)->exists();
    }
    static public function getDetail($id)
    {
        return PermohonanDetail::where('permohonan_id', $id)->first();
    }
    static public function getBelumProses()
    {
        return PermohonanDetail::rightJoin('permohonan', 'permohonan.permohonan_id', '=', 'permohonan_detail.permohonan_id')
            ->whereNull('permohonan_detail.permohonan')
            ->count();
    }
}
