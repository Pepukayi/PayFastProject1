@extends('layouts.addressbooklayout')

@section('title', 'Register')

@section('content')
{{--<div class="container">--}}
    {{--<div class="row justify-content-center">--}}
        {{--<div class="col-md-8">--}}
            {{--<div class="card">--}}
                {{--<div class="card-header">{{ __('Register') }}</div>--}}

                {{--<div class="card-body">--}}
                    {{--<form method="POST" action="{{ route('register') }}">--}}
                        {{--@csrf--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

                                {{--@error('name')--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $message }}</strong>--}}
                                    {{--</span>--}}
                                {{--@enderror--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

                                {{--@error('email')--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $message }}</strong>--}}
                                    {{--</span>--}}
                                {{--@enderror--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

                                {{--@error('password')--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $message }}</strong>--}}
                                    {{--</span>--}}
                                {{--@enderror--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row mb-0">--}}
                            {{--<div class="col-md-6 offset-md-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--{{ __('Register') }}--}}
                                {{--</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

<br>
<h4 class="has-text-centered">Registraton Form</h4>

{{--{{ route('register') }}--}}
<form method="post" action="{{ route('register') }}">
    {{csrf_field()}}
    {{--<div class="field is-horizontal">--}}
    {{--<label class="label" for="title">I confirm that I have read and understood the information sheet for the above study and have had the opportunity to ask questions</label>--}}
    {{--<div class="control">--}}
    {{--<input style="width:30em;" type="text" class="input is-primary {{$errors->has('first_name')? 'is-danger':''}}" size="10px" name="first_name" placeholder="First Name" value="{{old('first_name')}}">--}}
    {{--</div>--}}
    {{--</div>--}}
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

        {{--<div class="field">--}}
            {{--<label class="label" for="title">Name of Organisation</label>--}}
            {{--<div class="control">--}}
                {{--<input style="width:30em;" type="text" class="input is-primary {{$errors->has('last_name')? 'is-danger':''}}" name="organisation_name" placeholder="Name of Organisation" value="{{old('organisation_name')}}">--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="field">--}}
            {{--<label class="label" for="title">Website of Organisation</label>--}}
            {{--<div class="control">--}}
                {{--<input style="width:30em;" type="text" class="input is-primary {{$errors->has('last_name')? 'is-danger':''}}" name="organisation_website" placeholder="Website of Organisation" value="{{old('organisation_website')}}">--}}
            {{--</div>--}}
        {{--</div>--}}

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

        {{--<label class="checkbox">--}}
            {{--<input type="checkbox" name="understand_info_sheet">--}}
            {{--<span style="font-size: medium">I confirm that I have read and understood the information sheet for the above study and have had the opportunity to ask questions</span>--}}
        {{--</label>--}}

        {{--<label class="checkbox">--}}
            {{--<input type="checkbox" name="voluntary_participation">--}}
            {{--<span style="font-size: medium">I understand that my participation is voluntary and that I am free to withdraw at any time without giving reason</span>--}}
        {{--</label>--}}
        {{--<br>--}}
        {{--<label class="checkbox">--}}
            {{--<input type="checkbox" name="agree_to_study">--}}
            {{--<span style="font-size: medium">I agree to take part in the study</span>--}}
        {{--</label>--}}
        {{--<br><br>--}}
        {{--<div class="control">--}}
            {{--I agree to the use of anonymised quotes in publications&nbsp;--}}
            {{--<label class="radio">--}}
                {{--<input type="radio" name="agree_anonymise">--}}
                {{--Yes--}}
            {{--</label>--}}
            {{--<label class="radio">--}}
                {{--<input type="radio" name="agree_anonymise">--}}
                {{--No--}}
            {{--</label>--}}
        {{--</div>--}}
        {{--<br>--}}
        {{--<div class="control">--}}
            {{--I agree to the use of anonymised quotes in publications&nbsp;--}}
            {{--<label class="radio">--}}
                {{--<input type="radio" name="answer">--}}
                {{--Yes--}}
            {{--</label>--}}
            {{--<label class="radio">--}}
                {{--<input type="radio" name="answer">--}}
                {{--No--}}
            {{--</label>--}}
        {{--</div>--}}
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
