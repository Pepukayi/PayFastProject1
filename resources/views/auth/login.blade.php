@extends('layouts.guest-book-layout')

@section('title', 'Login')

@section('content')

<form method="POST" action="{{ route('login') }}">
    {{csrf_field()}}

    <div style="margin-left: 7em; margin-top: 2em">
        <h4 class="">Login</h4>
        <div style="margin-top: 1em"></div>

        <div class="field">
            <label class="label" for="title">Email</label>
            <div class="control">
                <p class="control has-icons-left has-icons-right">
                    <input type="text" class="input is-primary {{$errors->has('email')? 'is-danger':''}}" name="email" placeholder="Email" value="{{old('email')}}" required autofocus>
                    <span class="icon is-small is-left">
                        <i class="fas fa-envelope"></i>
                    </span>
                </p>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div style="margin-top: 1em"></div>
        <div class="field">
            <label class="label" for="password">Password</label>
            <div class="control">
                <input style="width:30em;" type="password" class="input is-primary {{$errors->has('last_name')? 'is-danger':''}}"  name="password" required>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div style="margin-top: 1em"></div>
        <div class="field">
            <div class="control form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-primary">Login</button>
            </div>
        </div>
        @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                <span style="font-size: medium">Forgot Your Password?</span>
            </a>
        @endif
        @include('errors')
    </div>
</form>
@endsection
