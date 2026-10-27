<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConsultationRequest extends Model
{
    protected $fillable = [
        'paket',
        'nama_lengkap',
        'jabatan',
        'nomor_whatsapp',
        'nama_sekolah',
        'jumlah_siswa',
        'jumlah_guru',
        'kebutuhan_fitur',
    ];

    protected $casts = [
        'kebutuhan_fitur' => 'array',
    ];
}
