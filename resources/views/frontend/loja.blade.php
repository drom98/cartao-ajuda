@extends('frontend.layouts.app')

@section('content')
    <div class="container">

        <div class="columns">
            <div class="column">
                @include('frontend.includes.menu')
            </div>
        </div>

        <div class="columns is-centered">
            <div class="column is-6">
                @if ($errors->any())
                    <div class="notification is-danger is-light" style="background-color: #feecf0; color: #cc0f35;">
                        <button class="delete"></button>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @include('frontend.includes.form-loja-basic')
            </div>
        </div>
    </div>

@endsection
