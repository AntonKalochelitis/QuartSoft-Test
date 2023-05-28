<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResetPasswordEmail extends Mailable
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
        $url = env('APP_FRONTEND_URL', '') . 'reset-password/' . $this->token;

        return $this->subject(env('APP_NAME', '') . ' | Reset Password')
            ->markdown('emails.reset_password', [
                'url' => $url
            ]);
    }
}
