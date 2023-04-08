<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SPM extends Model 
{
    protected $table = "spm";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'tanggal',
        'nama_puskesmas',
        'pelayanan_kesehatan_ibu_hamil',
        'pelayanan_kesehatan_ibu_bersalin', 
        'pelayanan_kesehatan_Bayi_baru_lahir',
        'pelayanan_kesehatan_balita',
        'pelayanan_kesehatan_pada_usia_pendidikan_dasar' 
    ];
}