<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    // Сюда мы передадим данные из формы
    public function __construct($data)
    {
        $this->data = $data;
    }

    // Настройка самого письма
    public function build()
    {
        return $this->subject('Новая заявка с сайта Realty_M!')
                    ->view('emails.contact');
    }
}