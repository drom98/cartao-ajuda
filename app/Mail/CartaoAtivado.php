<?php

namespace App\Mail;

use App\Cartao;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CartaoAtivado extends Mailable
{
    use Queueable, SerializesModels;

    public $cartao;

    /**
     * Create a new message instance.
     *
     * @return void
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
        return $this->from('info@cartaoajuda.pt', $this->cartao->negocio->nome)
            ->subject('O seu cartão foi ativado!')
            ->markdown('emails.cartaoAtivado');
    }
}
