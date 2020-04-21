@component('mail::message')
## {{ $cartao->negocio->nome }}
# O nosso muito obrigado por nos ajudar!

### Pode efetuar o pagamento através de um dos seguintes métodos:
<p>
@foreach($cartao->negocio->metodos_pagamento as $metodo)
    @if($metodo->descricao)
        @if( $metodo->nome == 'IBAN')
            <span style="font-weight: bold">{{ $metodo->nome }}:</span> PT50 {{ $metodo->descricao }} <br>
        @else
            <span style="font-weight: bold">{{ $metodo->nome }}:</span> {{ $metodo->descricao }} <br>
        @endif
    @endif
@endforeach
    <span style="font-weight: bold">Valor:</span> €{{ $cartao->opcao_cartao->valor  }}
</p>
<p>Caso tenha alguma dúvida, não hesite em contactar-nos em: <a href="mailto:{{ $cartao->negocio->user->email }}">{{ $cartao->negocio->user->email }}</a></p>
Obrigado,<br>
{{ $cartao->negocio->nome }}
@endcomponent
