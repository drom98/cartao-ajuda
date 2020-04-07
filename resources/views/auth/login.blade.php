@extends('auth.layouts.layout')

@section('content')
    <section class="hero is-fullheight">
        <div class="hero-body" id="login-container">
            <div class="container">
                <div class="columns is-centered">
                    <div class="column is-4">
                        <div class="card">
                            <div class="card-content">
                                <h2 class="subtitle is-6 has-text-centered">Bem vindo de volta!👋️</h2>
                                <h1 class="title has-text-link is-4 has-text-centered">Iniciar sessão</h1>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="field">
                                        <label class="label">Email:</label>
                                        <div class="control has-icons-left">
                                            <input name="email" type="email" class="input @error('email') is-invalid @enderror" placeholder="Insira o seu email..." value="{{ old('email') }}" autofocus required>
                                            <span class="icon is-small is-left">
                                                <i class="fas fa-envelope"></i>
                                            </span>
                                        </div>
                                        <p id="nome" class="help is-danger is-hidden">O nome que introduziu não existe.</p>
                                    </div>
                                    <div class="field">
                                        <label class="label">Password:</label>
                                        <div class="control has-icons-left">
                                            <input name="password" type="password" class="input" placeholder="Insira a sua password..." required>
                                            <span class="icon is-small is-left">
                            <i class="fas fa-lock"></i>
                          </span>
                                        </div>
                                        <p id="password" class="help is-danger is-hidden">Password errada.</p>
                                    </div>

                                    <div class="field">
                                        <div class="control">
                                            <input type="submit" class="button is-link is-fullwidth" value="Entrar">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <p class="has-text-centered">Ainda não tem conta? É rápido!</p>
                            <a href="{{ route('register') }}" class="button is-fullwidth is-text has-text-link has-text-centered">Criar nova conta</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
