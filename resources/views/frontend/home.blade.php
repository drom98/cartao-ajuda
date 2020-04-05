@extends('frontend.layouts.app')

@section('content')
    <div class="container">
        @isset($lojaNaoConfigurada)
            @include('frontend.includes.mensagem-warning')
        @endisset

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
