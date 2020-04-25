@extends('frontend.layouts.app')

@section('content')
    <div class="container">
        @if(count($negocio->metodos_pagamento) <= 0)
            <div class="notification" style="background-color: #fffbeb; color: #947600;">
                <button class="delete"></button>
                <strong>Importante!</strong>
                <p>Adicione pelo menos um método de pagamento <a href="{{ route('negocio.home') }}">aqui</a>.</p>
            </div>
        @endif

        @if (session('estado'))
            @include('frontend.includes.mensagem-sucesso')
        @endif
        <div class="columns">
            <div class="column">
                @include('frontend.includes.menu')
            </div>
        </div>

        <div class="columns">
            <div class="column is-three-quarters">
                @include('frontend.includes.code-modal')
                @if( count($negocio->cartoes) == 0)
                    <h3 class="title is-3">Ainda não vendeu nenhum cartão.</h3>
                    <p class="subtitle is-5">Copie a ligação da sua página e partilhe-a com os seus clientes e amigos!</p>
                    <input class="input is-small" type="text" value="{{ url('store/' . $negocio->url ) }}" readonly>
                    <br><br><p class="subtitle is-5 has-text-grey is-marginless">Partilhar a sua página diretamente no Facebook:</p>
                    <a class="button is-link is-small" href="https://www.facebook.com/sharer/sharer.php?u={{ url('/store',$negocio->url) }}&display=popup&ref=plugin&src=share_button" onclick="return !window.open(this.href, 'Facebook')">
                        <span class="icon">
                            <i class="fab fa-facebook"></i>
                          </span>
                          <span>Partilhar no Facebook</span>
                    </a>
                @else
                    @include('frontend.includes.table')
                @endif
            </div>
            <div class="column">
                @include('frontend.includes.status-card')
            </div>
        </div>
    </div>

@endsection
