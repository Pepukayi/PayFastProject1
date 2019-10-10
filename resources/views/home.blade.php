@extends('layouts.guest-book-layout')

@section('title', 'Home')

@section('content')
    @if (session('message'))
        <p style="font-size: medium" class="has-text-centered">{{session('message')}}</p>
    @endif

    <p class="subtitle is-3 has-text-centered" style="margin-top: 2em;">Welcome to the PayFast Guest Book Application</p>
    <p class="subtitle is-5 has-text-centered">Please register and be part of South Africa's best online payment solutions company</p>

    </p>


@endsection
