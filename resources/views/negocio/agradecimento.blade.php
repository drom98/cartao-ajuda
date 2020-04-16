@extends('auth.layouts.layout')

@section('content')
    <section class="hero is-fullheight has-background-danger">
        <div class="hero-body" id="login-container">
            <div class="container">
                <div class="columns is-centered">
                    <div class="column is-8">
                        <div class="box has-text-centered">

                            <p class="has-text-centered is-size-1 has-text-danger">
                                <i class="fas fa-heart"></i>
                            </p>
                            <h1 class="title has-text-centered">Obrigado por nos ajudar!</h1>
                            <p class="subtitle has-text-centered">{{ $negocio->texto_agradecimento }}</p>

                            <p class="is-size-6 has-text-grey">
                                Não se esqueça de verificar o seu email.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
