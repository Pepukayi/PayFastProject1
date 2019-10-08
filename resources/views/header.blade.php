<style>
    .navbar-item img {
        max-height: 5.75rem !important;
    }
</style>

<nav id="navbar" class="navbar has-shadow is-spaced">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item" href="">
                {{--<figure class="image is-64x64">  --}}{{--is-128x128--}}
                {{--<img src="img/logo_42.jpg">--}}
                {{--<img src="img/SANAC_New_logo_1.png">--}}
                {{--</figure>--}}
            </a>

            {{--<a class="navbar-item is-hidden-desktop" href="https://github.com/jgthms/bulma" target="_blank">--}}
            {{--<span class="icon" style="color: #333;">--}}
            {{--<i class="fab fa-lg fa-github-alt"></i>--}}
            {{--</span>--}}
            {{--</a>--}}

            {{--<a class="navbar-item is-hidden-desktop" href="https://twitter.com/jgthms" target="_blank">--}}
            {{--<span class="icon" style="color: #55acee;">--}}
            {{--<i class="fab fa-lg fa-twitter"></i>--}}
            {{--</span>--}}
            {{--</a>--}}

            <div id="navbarBurger" class="navbar-burger burger" data-target="navMenuDocumentation">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div id="navMenuDocumentation" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item bd-navbar-item-documentation  is-active" href="/">
                    <span class="icon has-text-primary">
                      <i class="fas fa-book"></i>
                    </span>
                    <span class="is-hidden-touch is-hidden-widescreen">
                        Home
                    </span>
                    <span class="is-hidden-desktop-only">
                        Home
                    </span>
                </a>


                <a class="navbar-item bd-navbar-item-videos " href="/guest-list">
                  <span class="icon has-text-success">
                    <i class="fas fa-star"></i>
                  </span>
                    <span>Our Star Guest List</span>
                </a>

                <a class="navbar-item bd-navbar-item-expo " href="/messages/create">
                  <span class="icon has-text-star">
                    <i class="fas fa-play-circle"></i>
                  </span>
                    <span>Create Message</span>
                </a>

                <a class="navbar-item bd-navbar-item-love " href="/messages">
                  <span class="icon has-text-danger">
                    <i class="fas fa-question-circle"></i>
                  </span>

                    <span>Messages</span>
                </a>

                {{--<a class="navbar-item bd-navbar-item-love " href="/analytics">--}}
                  {{--<span class="icon has-text-danger">--}}
                    {{--<i class="fas fa-area-chart"></i>--}}
                  {{--</span>--}}

                    {{--<span>Survey Data</span>--}}
                {{--</a>--}}



            </div>

            <div class="navbar-end">
                <a class="navbar-item is-hidden-touch is-hidden-desktop-only" href="https://github.com/jgthms/bulma" target="_blank">

                </a>

                {{--<div class="navbar-item">--}}
                {{--<div class="field is-grouped is-grouped-multiline">--}}
                {{--<p class="control">--}}
                {{--<a class="button is-primary" href="{{ route('login') }}">--}}
                {{--<strong>Login</strong>--}}
                {{--</a>--}}
                {{--</p>--}}
                {{--<p class="control">--}}
                {{--<a class="button is-primary" href="/register">--}}
                {{--<strong>Register</strong>--}}
                {{--</a>--}}
                {{--</p>--}}
                {{--<p class="control">--}}
                {{--<a class="button is-primary" href="/logout">--}}
                {{--<strong>Logout</strong>--}}
                {{--</a>--}}
                {{--</p>--}}
                {{--</div>--}}

                {{--<ul class="navbar-nav ml-auto">--}}
                {{--<!-- Authentication Links -->--}}
                {{--@guest--}}
                {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
                {{--</li>--}}
                {{--@if (Route::has('register'))--}}
                {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
                {{--</li>--}}
                {{--@endif--}}
                {{--@else--}}
                {{--<li class="nav-item dropdown">--}}
                {{--<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
                {{--{{ Auth::user()->first_name }} <span class="caret"></span>--}}
                {{--</a>--}}

                {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
                {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
                {{--onclick="event.preventDefault();--}}
                {{--document.getElementById('logout-form').submit();">--}}
                {{--{{ __('Logout') }}--}}
                {{--</a>--}}

                {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                {{--@csrf--}}
                {{--</form>--}}
                {{--</div>--}}
                {{--</li>--}}
                {{--@endguest--}}
                {{--</ul>--}}

                {{--{{Below Stuff works}}--}}

                {{--<div class="navbar-item has-dropdown is-hoverable">--}}
                {{--<a class="navbar-link">--}}
                {{--{{ Auth::user()->first_name }}--}}
                {{--</a>--}}

                {{--<div class="navbar-dropdown">--}}
                {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
                {{--onclick="event.preventDefault();--}}
                {{--document.getElementById('logout-form').submit();">--}}
                {{--{{ __('Logout') }}--}}
                {{--</a>--}}

                {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                {{--@csrf--}}
                {{--</form>--}}
                {{--<hr class="navbar-divider">--}}
                {{--<a class="navbar-item">--}}
                {{--De-Register--}}
                {{--</a>--}}
                {{--</div>--}}
                {{--</div>--}}
            </div>

            <div class="navbar-item">
                <div class="field is-grouped is-grouped-multiline">
                    <!-- Authentication Links -->
                    @guest
                        <p class="control">
                            <a class="button is-primary" href="{{ route('login') }}"><strong>{{ __('Login') }}</strong></a>
                        </p>
                        @if (Route::has('register'))
                            <p class="control">
                                <a class="button is-primary" href="{{ route('register') }}"><strong>{{ __('Register') }}</strong></a>
                            </p>
                        @endif
                    @else
                        {{--<li class="nav-item dropdown">--}}
                        {{--<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
                        {{--{{ Auth::user()->first_name }} <span class="caret"></span>--}}
                        {{--</a>--}}

                        {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
                        {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
                        {{--onclick="event.preventDefault();--}}
                        {{--document.getElementById('logout-form').submit();">--}}
                        {{--{{ __('Logout') }}--}}
                        {{--</a>--}}

                        {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                        {{--@csrf--}}
                        {{--</form>--}}
                        {{--</div>--}}
                        {{--</li>--}}
                        <div class="navbar-item has-dropdown is-hoverable">
                            <a class="navbar-link">
                                {{ Auth::user()->first_name }}
                            </a>

                            <div class="navbar-dropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                <hr class="navbar-divider">
                                <a class="navbar-item">
                                    De-Register
                                </a>
                            </div>
                        </div>
                    @endguest
                </div>
            </div>
        </div>
    </div>
    </div>
</nav>
