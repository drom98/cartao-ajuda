@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="columns">
            <div class="column">
                @include('includes.menu')
            </div>
        </div>

        <div class="columns">
            <div class="column is-three-quarters">
                @include('includes.table')
            </div>
            <div class="column">
                @include('includes.status-card')
            </div>
        </div>
    </div>

@endsection
