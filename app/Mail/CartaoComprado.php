<?php

namespace App\Mail;

use App\Cartao;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CartaoComprado extends Mailable
{
    use Queueable, SerializesModels;

    public $cartao;

    /**
     * Create a new message instance.
     *
     * @param Cartao $cartao
     */
    public function __construct(Cartao $cartao)
    {
        $this->cartao = $cartao;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('info@cartaoajuda.pt')
            ->subject('Obrigado por adquirir um cartão!')
            ->markdown('emails.cartaoComprado');
    }
}
