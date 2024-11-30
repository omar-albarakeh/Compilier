<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CollaborationInvitationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $invitationLink;

    public function __construct($invitationLink)
    {
        $this->invitationLink = $invitationLink;
    }

    public function build()
    {
        return $this->subject('Collaboration Invitation')
                    ->view('emails.invitation')
                    ->with('invitationLink', $this->invitationLink);
    }
}
