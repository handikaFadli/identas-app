<?php

namespace App\Models;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrialRequest extends Model
{
    /** @use HasFactory<\Database\Factories\TrialRequestFactory> */
    use HasFactory;

    protected $fillable = [
        'nama',
        'email',
        'nomor_handphone',
        'nama_lembaga',
        'client_type_id',
        'jenjang',
        'jumlah_murid',
        'alamat',
        'status',
        'reviewed_by',
        'client_id',
    ];

    protected $casts = [
        'reviewed_at' => 'datetime',
    ];

    public function clientType()
    {
        return $this->belongsTo(
            ClientType::class,
            'client_type_id'
        );
    }

    public function reviewer()
    {
        return $this->belongsTo(
            User::class,
            'reviewed_by'
        );
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
