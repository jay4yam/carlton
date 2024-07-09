<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class BookingMail extends Mailable
{
    use Queueable, SerializesModels;

    public array $dataClient;

    /**
     * Create a new message instance.
     */
    public function __construct(array $dataClient)
    {
        $this->dataClient = $dataClient;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Booking Mail Michaël Zingraf Real Estate',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mails.booking',
            with:[
                'firstname' => $this->dataClient['firstname'] ?? 'not specified',
                'lastname' => $this->dataClient['lastname'],
                'email' => $this->dataClient['email'],
                'phone' => $this->dataClient['phone'],
                'guest_number' => $this->dataClient['guest_number'],
                'arrival_date' => $this->dataClient['arrival_date'],
            ]
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
}
