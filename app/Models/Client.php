<?php

namespace App\Models;

use App\Models\ClientType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'kode',
        'nama',
        'email',
        'nomor_handphone',
        'nama_lembaga',
        'client_type_id',
        'jenjang',
        'jumlah_murid',
        'alamat',
        'status',
    ];
    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function trials()
    {
        return $this->hasMany(ClientTrial::class);
    }

    public function activeTrial()
    {
        return $this->hasOne(ClientTrial::class)
            ->where('status', 'active')
            ->latestOfMany();
    }

    public function clientType(): BelongsTo
    {
        return $this->belongsTo(ClientType::class, 'client_type_id');
    }
}
