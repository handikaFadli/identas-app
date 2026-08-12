<?php

namespace App\Mail;

use App\Models\ClientTrial;
use App\Models\TrialRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TrialApprovedMail extends Mailable
{
    use Queueable, SerializesModels;

    public TrialRequest $trialRequest;

    public ClientTrial $clientTrial;

    public string $temporaryPassword;


    public function __construct(
        TrialRequest $trialRequest,
        ClientTrial $clientTrial,
        string $temporaryPassword
    ) {
        $this->trialRequest = $trialRequest;

        $this->clientTrial = $clientTrial;

        $this->temporaryPassword = $temporaryPassword;
    }


    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Akun Uji Coba IDENTAS Anda Telah Aktif',
        );
    }


    public function content(): Content
    {
        return new Content(
            view: 'emails.trial-approved',
        );
    }


    public function attachments(): array
    {
        return [];
    }
}
