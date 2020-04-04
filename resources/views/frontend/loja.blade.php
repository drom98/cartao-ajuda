@extends('frontend.layouts.app')

@section('content')
    <div class="container">

        <div class="columns">
            <div class="column">
                @include('frontend.includes.menu')
            </div>
        </div>

        <div class="columns">
            <div class="column is-6">
                @include('frontend.includes.form-loja')
            </div>
        </div>
    </div>

@endsection
