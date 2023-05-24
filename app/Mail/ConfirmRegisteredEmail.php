<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ConfirmRegisteredEmail extends Mailable
{
    use Queueable, SerializesModels;

    private string $token;

    /**
     * Create a new message instance.
     *
     * @param string $token
     * @return void
     */
    public function __construct(string $token)
    {
        $this->token = $token;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $url = config('site.frontend-url') . '/confirm-email/' . $this->token;

        return $this->subject(config('site.subject') . ' | Email confirmation')
            ->markdown('emails.confirm_registered_email', [
                'url' => $url
            ]);
    }
}
