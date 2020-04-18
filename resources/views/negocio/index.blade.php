@extends('negocio.layout')

@section('content')
    <div class="card has-text-centered">
        <div class="card-content">
            @if( $negocio->logo )
            <div class="columns is-centered">
                <div class="column">
                    <figure class="image is-128x128" style="margin: 0 auto;">
                        <img src="{{ asset('storage/logotipos/'. $negocio->logo ) }}" class="is-vcentered">
                    </figure>
                </div>
            </div>
            @endif

            <p class="title">
                {{ $negocio->nome }}
            </p>
            <p class="subtitle">
                {{ $negocio->texto_compra }}
            </p>
            <div class="column"></div>
            <form action="/cartao" method="post">
                @csrf

                <nav class="level">
                    @foreach( $negocio->opcoes_cartoes as $key => $opcao)
                        @if( $opcao->descricao )
                    <div class="level-item has-text-centered">
                        <div>
                            <p class="heading">€{{ $opcao->valor }} equivale a:</p>
                            <p class="title is-size-5">{{ $opcao->descricao }}</p>
                        </div>
                    </div>
                        @endif
                    @endforeach
                </nav>

                <p class="has-text-grey">Seleciona a quantia do seu cartão:</p>
                <div class="field" id="opcoes">
                    @foreach( $negocio->opcoes_cartoes as $key => $opcao)
                        <input class="is-checkradio is-link" id="opcao.{{ $key }}" type="radio" name="opcao" value="{{ $opcao->id }}" checked>
                        <label for="opcao.{{ $key }}">€{{ $opcao->valor }}</label>
                    @endforeach
                </div>
                <div class="box has-background-dark has-text-white">
                    <div class="columns has-text-left">
                        <div class="column is-10">
                            <p class="has-text-weight-bold is-paddingless is-marginless">Cartão ajuda para</p>
                            <p class="is-paddingless is-marginless">{{ $negocio->nome }}</p>
                            <p class="is-paddingless is-marginless is-size-7"></p>
                        </div>
                        <div class="column">
                            <span class="has-text-link is-size-1">
                                <i class="fas fa-gift"></i>
                            </span>
                        </div>
                    </div>
                    <div class="columns has-text-left">
                        <div class="column">
                            <p class="has-text-weight-bold is-size-4" id="valor"></p>
                        </div>
                    </div>
                </div>

                @if ($errors->any())
                    <div class="notification is-danger is-light" style="background-color: #feecf0; color: #cc0f35;">
                        @foreach( $errors->all() as $erro)
                            {{ $erro }}
                        @endforeach
                    </div>
                @endif
                <input type="hidden" name="negocio_id" value="{{ $negocio->id }}">
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
        <div class="column"></div>
        <hr class="is-paddingless is-marginless">
        <footer class="has-background-light">
            <div class="column"></div>
            <p class="has-text-weight-bold" style="display: inline-block;">
                Página criada através da aplicação <a href="#"> Cartão Ajuda</a>.
            </p>
            <p class="has-text-grey is-size-7" style="display: inline-block;">
                Comece a vender cartões para a sua loja, é totalmente grátis e simples!
            </p>
        </footer>
    </div>
@endsection
