@extends('loja.layout')

@section('content')
    <div class="card has-text-centered">
        <div class="card-content">
            <div class="columns is-centered">
                <div class="column">
                    <figure class="image is-128x128" style="margin: 0 auto;">
                        <img src="{{ asset('logotipos_lojas/'. $loja->logo ) }}" class="is-vcentered">
                    </figure>
                </div>
            </div>

            <p class="title">
                {{ $loja->nome }}
            </p>
            <p class="subtitle">
                {{ $loja->texto_compra }}
            </p>
            <div class="column"></div>
            <form action="" method="post">
                <p class="has-text-grey">Seleciona a quantia do seu cartão:</p>
                <div class="field">
                    <input class="is-checkradio is-link" id="exampleRadioInline1" type="radio" name="exampleRadioInline" checked="checked">
                    <label for="exampleRadioInline1">10€</label>
                    <input class="is-checkradio is-link" id="exampleRadioInline2" type="radio" name="exampleRadioInline">
                    <label for="exampleRadioInline2">20€</label>
                    <input class="is-checkradio is-link" id="exampleRadioInline3" type="radio" name="exampleRadioInline">
                    <label for="exampleRadioInline3">30€</label>
                </div>
                <div class="box has-background-dark has-text-white">
                    <div class="columns has-text-left">
                        <div class="column is-10">
                            <p class="has-text-weight-bold is-paddingless is-marginless">Cartão ajuda para</p>
                            <p class="is-paddingless is-marginless">{{ $loja->nome }}</p>
                        </div>
                        <div class="column">
                            <span class="has-text-link is-size-1">
                                <i class="fas fa-gift"></i>
                            </span>
                        </div>
                    </div>
                    <div class="columns has-text-left">
                        <div class="column">
                            <p class="has-text-weight-bold is-size-4">€10</p>
                        </div>
                    </div>
                </div>

                <div class="field">
                    <label class="label has-text-grey has-text-left">Nome:</label>
                    <div class="control">
                        <input name="nome" class="input" type="text" placeholder="Insira o seu primeiro nome">
                    </div>
                </div>
                <div class="field">
                    <label class="label has-text-grey has-text-left">Apelido:</label>
                    <div class="control">
                        <input name="apelido" class="input" type="text" placeholder="Insira o seu apelido">
                    </div>
                </div>
                <div class="field">
                    <label class="label has-text-grey has-text-left">Email:</label>
                    <div class="control">
                        <input name="email" class="input" type="email" placeholder="Insira o seu email">
                    </div>
                </div>
                <div class="field">
                    <div class="control">
                        <button class="button is-link is-fullwidth">Comprar cartão</button>
                    </div>
                </div>

                <p class="has-text-grey is-size-7">Irá receber um email com as informações necessárias para efetuar o pagamento.</p>
                <p class="has-text-grey is-size-7">O cartão é válido por 1 ano.</p>
            </form>
        </div>
        <hr class="is-paddingless is-marginless">
        <footer class="has-background-light">
            <p class="has-text-weight-bold" style="display: inline-block;">
                Página criada através da aplicação <a href="#"> Cartão Ajuda</a>.
            </p>
            <p class="has-text-grey is-size-7" style="display: inline-block;">
                Comece a vender cartões para a sua loja, é totalmente grátis e simples!
            </p>
        </footer>
    </div>
@endsection
