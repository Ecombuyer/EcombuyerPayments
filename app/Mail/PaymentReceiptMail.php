<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;
use App\Models\Order_details;

class PaymentReceiptMail extends Mailable
{
    use Queueable, SerializesModels;
    public $paymentreceipt;

    /**
     * Create a new message instance.
     */
    public function __construct(Order_details  $payment)
    {
        $this->paymentreceipt = $payment;

    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Payment Receipt Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {

        return new Content(markdown: 'emails.mailreceipt');
    }

    public function build()
    {
        return $this->markdown('emails.mailreceipt');
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
