@extends('layouts.addressbooklayout')

@section('title', 'Home')

@section('content')
    {{--@if (session('message'))--}}
    {{--<p>{{session('message')}}</p>--}}
    {{--@endif--}}
    {{--<div>--}}
    {{--<p class="h3" style="margin-top: 1em; padding-left: 2em">Address Book</p>--}}
    {{--@if($contacts->isEmpty())--}}
    {{--<p style="margin-top: 1em; padding-left: 2em" class="notification">No Contacts in the list at the moment</p>--}}
    {{--@endif--}}
    {{--<ul>--}}
    {{--@foreach($contacts as $contact)--}}
    {{--<li>--}}
    {{--<a href="/contacts/{{$contact->id}}" class="">--}}
    {{--{{$contact->first_name}} {{$contact->last_name}}--}}
    {{--</a>--}}
    {{--</li>--}}
    {{--@endforeach--}}
    {{--</ul>--}}
    {{--</div>--}}

    {{--<div class="container">--}}
    {{--<div class="row justify-content-center">--}}
    {{--<div class="col-md-8">--}}
    {{--<div class="card">--}}
    {{--<div class="card-header">Dashboard</div>--}}

    {{--<div class="card-body">--}}
    {{--@if (session('status'))--}}
    {{--<div class="alert alert-success" role="alert">--}}
    {{--{{ session('status') }}--}}
    {{--</div>--}}
    {{--@endif--}}

    {{--You are logged in!--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    <p class="subtitle is-3 has-text-centered" style="margin-top: 2em;">Welcome to the PayFast Guest Book Application</p>
    <p class="subtitle is-5 has-text-centered">Please register and be part of South Africa's best online payment solutions company</p>

    </p>


@endsection
