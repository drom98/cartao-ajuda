@extends('auth.layouts.layout')

@section('content')
    <section class="hero is-fullheight">
        <div class="hero-body" id="login-container">
            <div class="container">
                <div class="columns is-centered">
                    <div class="column is-8">
                        <div class="box has-text-centered">

                            <p class="has-text-centered is-size-1 has-text-link">
                                <i class="fas fa-paper-plane"></i>
                            </p>
                            <h1 class="title has-text-centered">Bem vindo ao Cartão Ajuda!</h1>
                            <p class="subtitle has-text-centered">Para continuar necessita de ir ao seu email e clicar no link de confirmação.</p>

                            @if (session('resent'))
                            <div class="notification is-success" style="background-color: #effaf3; color: #257942;">
                                <p>Foi enviado um novo link de confirmação para o seu email.</p>
                            </div>
                            @endif

                            <p class="is-size-6 has-text-grey">
                                Não recebeu o email?
                            </p>
                            <form method="POST" action="{{ route('verification.resend') }}">
                                @csrf
                                <button type="submit" class="button is-text">Clique aqui para enviar novamente</button>.
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
