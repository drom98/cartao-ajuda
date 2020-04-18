@extends('auth.layouts.layout')

@section('content')
    <section class="hero is-fullheight">
        <div class="hero-body" id="login-container">
            <div class="container">
                <div class="columns is-centered">
                    <div class="column is-4">
                        <div class="card">
                            <div class="card-content">
                                <h2 class="subtitle is-6 has-text-centered">Ajude o seu negocio a superar esta crise, é simples e rápido! 🙏️👋️</h2>
                                <h1 class="title has-text-link is-4 has-text-centered">Criar nova conta</h1>
                                @if ($errors->any())
                                    <div class="notification is-danger is-light" style="background-color: #feecf0; color: #cc0f35;">
                                        <button class="delete"></button>
                                        @foreach($errors->all() as $error)
                                            <ul>
                                                <li>{{ $error }}</li>
                                            </ul>
                                        @endforeach
                                    </div>
                                @endif
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="field">
                                        <label class="label">Nome:</label>
                                        <div class="control has-icons-left">
                                            <input name="name" type="text" class="input @error('name') is-invalid @enderror" placeholder="Insira o seu primeiro e último nome..." value="{{ old('name') }}" required>
                                            <span class="icon is-small is-left">
                                                <i class="fas fa-user"></i>
                                            </span>
                                        </div>
                                        <p id="nome" class="help is-danger is-hidden">O nome que introduziu não existe.</p>
                                    </div>
                                    <div class="field">
                                        <label class="label">Email:</label>
                                        <div class="control has-icons-left">
                                            <input name="email" type="email" class="input @error('email') is-invalid @enderror" placeholder="Insira o seu email..." value="{{ old('email') }}" required>
                                            <span class="icon is-small is-left">
                                                <i class="fas fa-envelope"></i>
                                            </span>
                                        </div>
                                        <p id="nome" class="help is-danger is-hidden">O nome que introduziu não existe.</p>
                                    </div>
                                    <div class="field">
                                        <label class="label">Nome do seu negócio:</label>
                                        <div class="control has-icons-left">
                                            <input name="nome" type="text" class="input @error('nome') is-invalid @enderror" placeholder="Insira o nome do seu negócio..." value="{{ old('nome') }}" required>
                                            <span class="icon is-small is-left">
                                                <i class="fas fa-briefcase"></i>
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
                                        <label class="label">Confirme a password:</label>
                                        <div class="control has-icons-left">
                                            <input name="password_confirmation" type="password" class="input" placeholder="Insira novamente a sua password..." required>
                                            <span class="icon is-small is-left">
                                                <i class="fas fa-lock"></i>
                                            </span>
                                        </div>
                                        <p id="password" class="help is-danger is-hidden">Password errada.</p>
                                    </div>

                                    <div class="field">
                                        <div class="control">
                                            <input type="submit" class="button is-link is-fullwidth" value="Criar conta">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <p class="has-text-centered">Já tem conta?</p>
                            <a href="{{ route('login') }}" class="button is-fullwidth is-text has-text-link has-text-centered">Iniciar sessão</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
