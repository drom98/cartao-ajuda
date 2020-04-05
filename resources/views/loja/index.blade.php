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
            </form>
        </div>
        <footer class="card-footer">
            <p class="card-footer-item">
      <span>
        View on <a href="https://twitter.com/codinghorror/status/506010907021828096">Twitter</a>
      </span>
            </p>
            <p class="card-footer-item">
      <span>
        Share on <a href="#">Facebook</a>
      </span>
            </p>
        </footer>
    </div>
@endsection
