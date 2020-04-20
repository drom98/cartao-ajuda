<style>
    * {
        font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", "Roboto", "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue", "Helvetica", "Arial", sans-serif !important;
    }
    .container {
        flex-grow: 1;
        margin: 0 auto;
        position: relative;
        width: auto;
    }

    @media screen and (min-width: 1024px) {
        .container {
            max-width: 960px;
        }
    }

    .has-background-light {
        background-color: whitesmoke !important;
    }

    .columns {
        margin-left: -0.75rem;
        margin-right: -0.75rem;
        margin-top: -0.75rem;
    }

    .columns:last-child {
        margin-bottom: -0.75rem;
    }

    .columns:not(:last-child) {
        margin-bottom: calc(1.5rem - 0.75rem);
    }

    .columns.is-centered {
        justify-content: center;
    }

    .column.is-offset-one-quarter, .column.is-offset-one-quarter-tablet {
        margin-left: 25%;
    }

    .column.is-half, .column.is-half-tablet {
        flex: none;
        width: 50%;
    }

    .has-text-weight-bold {
        font-weight: 700 !important;
    }

    .has-text-centered {
        text-align: center !important;
    }

    .box:not(:last-child), .content:not(:last-child), .notification:not(:last-child), .progress:not(:last-child), .table:not(:last-child), .table-container:not(:last-child), .title:not(:last-child),
    .subtitle:not(:last-child), .block:not(:last-child), .highlight:not(:last-child), .breadcrumb:not(:last-child), .level:not(:last-child), .list:not(:last-child), .message:not(:last-child), .pagination:not(:last-child), .tabs:not(:last-child) {
        margin-bottom: 1.5rem;
    }

    .box {
        background-color: white;
        border-radius: 6px;
        box-shadow: 0 0.5em 1em -0.125em rgba(10, 10, 10, 0.1), 0 0px 0 1px rgba(10, 10, 10, 0.02);
        color: #4a4a4a;
        display: block;
        padding: 1.25rem;
    }

    .is-size-5 {
        font-size: 1.25rem !important;
    }

    .is-size-6 {
        font-size: 1rem !important;
    }

    .has-text-weight-normal {
        font-weight: 400 !important;
    }

    h1 {
        color: #363636;
        font-weight: 600;
        line-height: 1.125;
    }

    .content p {
        margin-bottom: 1em;
    }

</style>

<body style="background-color: whitesmoke !important;">
    <div
        style=
        "flex-grow: 1;
        margin: 0 auto;
        position: relative;
        width: auto;">
        <div style="
        margin-left: -0.75rem;
        margin-right: -0.75rem;
        margin-top: -0.75rem;"
        >
            <div class="column is-half is-offset-one-quarter"
            style=
            "flex: none;
            width: 50%;">
                <p class="has-text-weight-bold has-text-centered" style="padding: 28px;">{{ $cartao->negocio->nome }}</p>
                <div class="box">
                    <p class="has-text-weight-bold is-size-5">O nosso muito obrigado por nos ajudar!</p>
                    <p class="is-size-6">Pode efetuar o pagamento através de um dos seguintes métodos:</p><br>
                    @foreach($cartao->negocio->metodos_pagamento as $metodo)
                        @if($metodo->descricao)
                            <p class="has-text-weight-bold">{{ $metodo->nome }}:
                                <span class="has-text-weight-normal">
                                    @if($metodo->nome == 'IBAN')
                                    PT50{{ $metodo->descricao }}
                                    @else
                                    {{ $metodo->descricao }}
                                    @endif
                                </span>
                            </p>
                        @endif
                    @endforeach
                    <br>
                    <p class="is-size-6 has-text-weight-bold">Dados do cartão:</p>
                    <p class="is-size-6 has-text-weight-bold">Nome: <span class="has-text-weight-normal">{{ $cartao->nome_cliente }} {{ $cartao->apelido_cliente }}</span></p>
                    <p class="is-size-6 has-text-weight-bold">Email: <span class="has-text-weight-normal">{{ $cartao->email }}</span></p>
                    <p class="is-size-6 has-text-weight-bold">Valor: <span class="has-text-weight-normal">€{{ $cartao->opcao_cartao->valor }} ({{ $cartao->opcao_cartao->descricao }})</span></p>
                    <br><p class="is-size-6">Assim que confirmarmos o seu pagamento, irá receber um email com o seu cartão e o respetivo código.</p><br>
                </div>
                <p class="has-text-centered" style="color: grey">Powered by <a href="{{ url('/') }}" target="_blank" style="color: dodgerblue">Cartão Ajuda</a></p>
            </div>
        </div>
    </div>
</body>
