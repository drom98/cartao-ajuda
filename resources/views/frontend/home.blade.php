@extends('frontend.layouts.app')

@section('content')
    <div class="container">
        @if(count($metodos_pagamento) <= 0)
            <div class="notification" style="background-color: #fffbeb; color: #947600;">
                <button class="delete"></button>
                <strong>Importante!</strong>
                <p>Adicione pelo menos um método de pagamento no separador "Configurar loja".</p>
            </div>
        @endif

        @isset($message)
            @include('frontend.frontend.includes.mensagem-sucesso')
        @endisset
        <div class="columns">
            <div class="column">
                @include('frontend.includes.menu')
            </div>
        </div>

        <div class="columns">
            <div class="column is-three-quarters">
                @include('frontend.includes.table')
            </div>
            <div class="column">
                @include('frontend.includes.status-card')
            </div>
        </div>
    </div>

@endsection
