@extends('landing.layout')

@section('content')
    @include('landing.includes.navbar')

    <style>
        .steps-segment:after {
            background-color: #3273DC !important;
        }
    </style>

    <section class="hero is-fullheight is-bold is-link">
        <div class="hero-body">
            <div class="container">
                <div class="columns">
                    <div class="column has-text-centered">
                        <p class="is-size-1 is-size-2-mobile has-shadow">
                            <i class="fas fa-money-check-alt"></i>
                        </p>
                        <h1 class="title is-size-1 is-size-3-mobile has-shadow">Não deixe parar o seu negócio.</h1>
                        <p class="subtitle is-size-6-mobile">Tem um negócio de portas fechadas? <br>Continue a receber pelos seus produtos ou serviços.
                    </div>
                </div>
                <br>
                <div class="columns is-centered">
                    <div class="column is-4-desktop">
                        <div class="buttons is-centered">
                            <a href="{{ route('register') }}" class="button is-light is-rounded">Criar página</a>
                            <a href="{{ route('exemplo') }}" target="_blank" class="button is-light is-rounded is-outlined">Ver exemplo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-foot" style="padding: 28px;">
            <div class="has-text-centered">
                <a href="#funcionamento" class="has-text-light">
                    Mais informações <br>
                    <i class="fas fa-angle-down is-size-4"></i>
                </a>
            </div>
        </div>
    </section>

    <section class="hero has-text-centered is-medium" id="funcionamento">
        <div class="hero-body">
            <div class="container">
                <h1 class="title has-text-dark is-size-4-mobile">Como funciona?</h1>
                <p class="subtitle has-text-grey is-size-6-mobile">Veja como é simples!</p>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <ul class="steps has-content-centered">
                        <li class="steps-segment">
                            <span class="steps-marker is-link">1</span>
                            <div class="steps-content">
                                <p class="is-size-4">Criar página</p>
                                <p class="has-text-grey">Crie a sua página e configure-a como quiser.</p>
                            </div>
                        </li>
                        <li class="steps-segment">
                            <span class="steps-marker is-link">2</span>
                            <div class="steps-content">
                                <p class="is-size-4">Cliente adquire cartão</p>
                                <p class="has-text-grey">O cliente adquire um cartão através da sua página.</p>
                            </div>
                        </li>
                        <li class="steps-segment">
                            <span class="steps-marker is-link">3</span>
                            <div class="steps-content">
                                <p class="is-size-4">Recebe o pagamento</p>
                                <p class="has-text-grey">O cliente transfere o montante diretamente para si.</p>
                            </div>
                        </li>
                        <li class="steps-segment">
                            <span class="steps-marker is-link">4</span>
                            <div class="steps-content">
                                <p class="is-size-4">Ativar cartão</p>
                                <p class="has-text-grey">Assim que confirmar o pagamento, entre na plataforma e ative o cartão.</p>
                            </div>
                        </li>
                        <li class="steps-segment">
                            <span class="steps-marker is-link">5</span>
                            <div class="steps-content">
                                <p class="is-size-4">Cliente recebe voucher</p>
                                <p class="has-text-grey">O cliente recebe o voucher no email com o respetivo código único de identificação.</p>
                            </div>
                        </li>
                    </ul>
                    <div class="has-text-centered">
                        <a href="{{ route('register') }}" class="button is-link is-rounded is-outlined">Começar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns is-variable is-8 is-vcentered">
                <div class="column">
                    <h1 class="title is-size-4-mobile">Crie a sua página.</h1>
                    <p class="subtitle has-text-grey is-size-6-mobile">
                        Crie a sua página, é simples, rápido e totalmente gratuito. <br>
                        Para cada página é gerada uma ligação única com base no nome que definir. Partilhe a ligação com os seus clientes.
                    </p>
                    <a href="{{ route('register') }}" class="button is-link is-rounded is-outlined">Criar página</a>
                </div>
                <div class="column is-hidden-mobile">
                    <div class="box">
                        <figure class="image is-16by9">
                            <img src="{{ asset('img/landing/registar.svg') }}">
                        </figure>
                    </div>
                </div>
            </div>
            <br>
            <div class="column"></div>
            <br>
            <div class="columns is-variable is-8 is-vcentered">
                <div class="column is-hidden-mobile">
                    <div class="box">
                        <figure class="image is-16by9">
                            <img src="{{ asset('img/landing/dashboard.svg') }}">
                        </figure>
                    </div>
                </div>
                <div class="column">
                    <h1 class="title is-size-4-mobile">Entre na plataforma.</h1>
                    <p class="subtitle has-text-grey is-size-6-mobile">
                        Faça a gestão dos cartões vendidos. <br>
                        Veja quanto já acumulou com a sua página. <br>
                    </p>
                    <a href="{{ route('login') }}" target="_blank" class="button is-link is-rounded is-outlined">Iniciar sessão</a>
                </div>
            </div>
            <br>
            <div class="column"></div>
            <br>
            <div class="columns is-variable is-8 is-vcentered">
                <div class="column">
                    <h1 class="title is-size-4-mobile">Configure a sua página.</h1>
                    <p class="subtitle has-text-grey is-size-6-mobile">
                        Escolha o seu logotipo. <br>
                        Defina a quantia dos seus cartões. <br>
                        Defina como pretende receber o dinheiro. <br>
                        Escreva um texto personalizado aos seus clientes. <br>
                    </p>
                    <a href="{{ route('exemplo') }}" target="_blank" class="button is-link is-rounded is-outlined">Ver página de exemplo</a>
                </div>
                <div class="column is-hidden-mobile">
                    <div class="box">
                        <figure class="image is-16by9">
                            <img src="{{ asset('img/landing/configurar.svg') }}">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hero has-text-centered is-medium">
        <div class="hero-body">
            <div class="container">
                <h1 class="title has-text-dark is-size-4-mobile">Quem pode aderir?</h1>
                <p class="subtitle has-text-grey is-size-6-mobile">Qualquer pessoa pode criar uma página!</p>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <div class="box">
                        <figure class="image is-5by4">
                            <img src="{{ asset('img/landing/hair.svg') }}">
                        </figure>
                        <br>
                        <h1 class="title has-text-centered is-size-5">Cabeleireiros/Barbeiros</h1>
                    </div>
                </div>
                <div class="column">
                    <div class="box">
                        <figure class="image is-5by4">
                            <img src="{{ asset('img/landing/food.svg') }}">
                        </figure>
                        <br>
                        <h1 class="title has-text-centered is-size-5">Restaurantes</h1>
                    </div>
                </div>
                <div class="column">
                    <div class="box">
                        <figure class="image is-5by4">
                            <img src="{{ asset('img/landing/bar.svg') }}">
                        </figure>
                        <br>
                        <h1 class="title has-text-centered is-size-5">Bares</h1>
                    </div>
                </div>
                <div class="column">
                    <div class="box">
                        <figure class="image is-5by4">
                            <img src="{{ asset('img/landing/shop.svg') }}">
                        </figure>
                        <br>
                        <h1 class="title has-text-centered is-size-5">Lojas locais</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hero has-text-centered is-medium" id="estabelecimentos">
        <div class="hero-body">
            <div class="container">
                <h1 class="title has-text-dark is-size-4-mobile">Estabelecimentos aderentes</h1>
                <p class="subtitle has-text-grey is-size-6-mobile">Junte-se aos estabelecimentos que já aderiram!</p>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column has-text-centered">
                    <p class="title">Seja dos primeiros a aderir!</p>
                    <a href="{{ route('register') }}" target="_blank" class="button is-link is-rounded">Criar página</a>
                </div>
            </div>
        </div>
    </section><br>
    <div style="height: 120px;"></div>

    @include('frontend.includes.footer')
@endsection
