<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Parametros para el correo
     *
     * @var array $params
     */
    private $params;

    /**
     * Create a new message instance.
     *
     * @param array $params
     */
    public function __construct(array $params = null)
    {
        if (! is_null($params)) {
            $this->params = $params;
        }
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->to([
                'emilioaor@gmail.com',
                //$this->params['email']
            ])
            ->subject('Contacto con Emilio Ochoa')
            ->view('mail.contact')
            ->with([
                'email' => $this->params['email'],
                'name' => $this->params['name'],
                'goals' => $this->params['goals'],
                'references' => $this->params['references'],
                'references2' => $this->params['references2'],
                'msg' => $this->params['message'],
                'amount' => $this->params['amount'],
                'endTime' => $this->params['endTime']
            ])
        ;
    }
}
