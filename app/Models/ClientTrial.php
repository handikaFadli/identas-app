<?php

namespace App\Models;

use App\Models\Client;
use App\Models\TrialRequest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientTrial extends Model
{
    /** @use HasFactory<\Database\Factories\ClientTrialFactory> */
    use HasFactory;

    protected $fillable = [
        'client_id',
        'trial_request_id',
        'starts_at',
        'ends_at',
        'status',
        'approved_by'
    ];

    protected $casts = [
        'starts_at' => 'datetime',
        'ends_at' => 'datetime',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function trialRequest()
    {
        return $this->belongsTo(TrialRequest::class);
    }
}
