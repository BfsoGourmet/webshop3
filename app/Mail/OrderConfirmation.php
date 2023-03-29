<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Http\Controllers\CredentialController;

class OrderConfirmation extends Mailable
{
    use Queueable, SerializesModels;
    private CredentialController $credential;

    /**
     * Create a new message instance.
     * 
     * @param $credential CredentialController
     */
    public function __construct($credential)
    {
        $this->credential = $credential;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Order Confirmation',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }

    public function build()
    {
        return $this
            ->from('gourmet.wallis@gmail.com')
            ->to($this->credential->getEmail())
            ->subject('Your bads will be shipped!')
            ->view('mail')->with('credential', $this->credential);
    }
}
