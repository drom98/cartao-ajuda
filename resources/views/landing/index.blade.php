@extends('landing.layout')

@section('content')
    @include('landing.includes.navbar')

    <section class="hero is-fullheight is-bold is-link">
        <div class="hero-body">
            <div class="container">
                <div class="columns">
                    <div class="column has-text-centered">
                        <p class="is-size-1 is-size-2-mobile has-shadow">
                            <i class="fas fa-money-check-alt"></i>
                        </p>
                        <h1 class="title is-size-1 is-size-3-mobile has-shadow">Não deixe parar o seu negócio.</h1>
                        <p class="subtitle is-size-6-mobile">Tem um negócio de portas fechadas? <br>Venda cartões aos seus clientes para serem usados quando reabrir.</p>
                    </div>
                </div>
                <br>
                <div class="columns is-centered">
                    <div class="column is-4-desktop">
                        <div class="buttons has-addons is-centered">
                            <a href="{{ route('register') }}" class="button is-light is-rounded">Registo</a>
                            <a href="{{ route('login') }}" class="button is-light is-rounded is-outlined">Iniciar sessão</a>
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
            <div class="columns is-variable is-8 is-vcentered">
                <div class="column">
                    <h1 class="title is-size-4-mobile">Registe o seu negócio.</h1>
                    <p class="subtitle has-text-grey is-size-6-mobile">
                        Efetue o registo do seu negócio, é simples, rápido e totalmente gratuito. <br>
                        As transações são apenas entre si e os seus clientes. Não passam pela aplicação nem por nenhuma outra entidade, garantindo assim que recebe a totalidade do dinheiro.
                    </p>
                    <a href="{{ route('register') }}" class="button is-link is-rounded">Registo</a>
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
                            <img src="{{ asset('img/landing/configurar.svg') }}">
                        </figure>
                    </div>
                </div>
                <div class="column">
                    <h1 class="title is-size-4-mobile">Configure a sua página de compra.</h1>
                    <p class="subtitle has-text-grey is-size-6-mobile">
                        Escolha o seu logotipo. <br>
                        Defina os seus métodos de pagamento aceites. <br>
                        Escreva um texto personalizado aos seus clientes. <br>
                    </p>
                </div>
            </div>
            <br>
            <div class="column"></div>
            <br>
            <div class="columns is-variable is-8 is-vcentered">
                <div class="column">
                    <h1 class="title is-size-4-mobile">Defina a quantia dos seus cartões.</h1>
                    <p class="subtitle has-text-grey is-size-6-mobile">
                        Escolha a quantia que pretende para cada uma das três opções. <br>
                        Se pretender pode também escolher a finalidade de cada cartão. <br>
                    </p>
                </div>
                <div class="column is-hidden-mobile">
                    <div class="box">
                        <figure class="image is-16by9">
                            <img src="{{ asset('img/landing/cartoes.svg') }}">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hero has-text-centered is-medium is-light is-bold">
        <div class="hero-body">
            <div class="container">
                <h1 class="title has-text-dark is-size-4-mobile">E depois?</h1>
                <p class="subtitle has-text-grey is-size-6-mobile">Partilhe a sua página com os seus clientes!</p>
                <a href="{{ route('register') }}" class="button is-link is-rounded">Registo</a>
            </div>
        </div>
    </section>

    @include('frontend.includes.footer')
@endsection
