@extends('layouts.guest-book-layout')

@section('title', 'Register')

@section('content')


<br>
<h4 class="has-text-centered">Registraton Form</h4>


<form method="post" action="{{ route('register') }}">
    {{csrf_field()}}

    <div style="margin-left: 7em; margin-top: 2em">
        <div class="field">
            <label class="label" for="title">First Name</label>
            <div class="control">
                <input style="width:30em;" type="text" class="input is-primary {{$errors->has('first_name')? 'is-danger':''}}" size="10px" name="first_name" placeholder="First Name" value="{{old('first_name')}}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="title">Last Name</label>
            <div class="control">
                <input style="width:30em;" type="text" class="input is-primary {{$errors->has('last_name')? 'is-danger':''}}" name="last_name" placeholder="Last Name" value="{{old('last_name')}}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="title">Email</label>
            <div class="control">
                <p class="control has-icons-left has-icons-right">
                    <input type="text" class="input is-primary {{$errors->has('email')? 'is-danger':''}}" name="email" placeholder="Email" value="{{old('email')}}">
                    <span class="icon is-small is-left">
                        <i class="fas fa-envelope"></i>
                    </span>
                </p>
            </div>
        </div>

        <div class="field">
            <label class="label" for="title">Phone Number</label>
            <div class="control">
                <p class="control has-icons-left has-icons-right">
                    <input type="text" class="input is-primary {{$errors->has('phone_number')? 'is-danger':''}}" name="phone_number" placeholder="Phone Number" value="{{old('phone_number')}}">
                    <span class="icon is-small is-left">
                        <i class="fas fa-phone"></i>
                    </span>
            </div>
        </div>

        <div class="field">
            <label class="label" for="title">Password</label>
            <div class="control">
                <input style="width:30em;" type="password" class="input is-primary {{$errors->has('last_name')? 'is-danger':''}}" name="password" placeholder="Password" required autocomplete="new-password">
            </div>
        </div>

        <div class="field">
            <label class="label" for="title">Confirm Password</label>
            <div class="control">
                <input style="width:30em;" type="password" class="input is-primary {{$errors->has('last_name')? 'is-danger':''}}" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
            </div>
        </div>

        <br>
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-primary">Submit</button>
            </div>
        </div>
        @include('errors')
    </div>
</form>
@endsection
