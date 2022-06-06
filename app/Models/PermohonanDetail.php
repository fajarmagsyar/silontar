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
}
