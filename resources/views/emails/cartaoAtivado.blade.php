@component('mail::message')
## {{ $cartao->negocio->nome }}
# O seu cartão foi ativado e está pronto a ser usado!

## Dados do cartão:
<span style="font-weight: bold">De: </span> {{ $cartao->negocio->nome }} <br>
<span style="font-weight: bold">Valor: </span> €{{ $cartao->opcao_cartao->valor }} ({{ $cartao->opcao_cartao->descricao }}) <br>
<span style="font-weight: bold">Validade: </span> {{ $cartao->created_at->addYears(1)->format('d / m / Y') }}<br>
<span style="font-weight: bold">Nome: </span> {{ $cartao->nome_cliente }} <br>
<span style="font-weight: bold">Email: </span> {{ $cartao->email }} <br>

@component('mail::panel')
    <p style="font-weight: bold; text-align: center">Código do seu cartão:</p>
    <p style="text-align: center; font-family: monospace">{{ $cartao->codigo }}</p>
    <p style="text-align: center;">Não partilhe este código com mais ninguém para além dos colaboradores de {{ $cartao->negocio->nome }}</p>
@endcomponent

<p>Caso tenha alguma dúvida, não hesite em contactar-nos em: <a href="mailto:{{ $cartao->negocio->user->email }}">{{ $cartao->negocio->user->email }}</a></p>
Obrigado,<br>
{{ $cartao->negocio->nome }}
@endcomponent
