<style>
    .navbar-item img {
        max-height: 5.75rem !important;
    }
</style>

<nav id="navbar" class="navbar has-shadow is-spaced">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item" href="">
            </a>

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
                      <i class="fas fa-home"></i>
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
                    <i class="fas fa-pen"></i>
                  </span>
                    <span>Create Message</span>
                </a>

                <a class="navbar-item bd-navbar-item-love " href="/messages">
                  <span class="icon has-text-danger">
                    <i class="fas fa-book"></i>
                  </span>

                    <span>Messages</span>
                </a>



            </div>

            <div class="navbar-end">
                <a class="navbar-item is-hidden-touch is-hidden-desktop-only" href="https://github.com/jgthms/bulma" target="_blank">

                </a>
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

                                {{--<a class="navbar-item">--}}
                                    {{--De-Register--}}
                                {{--</a>--}}
                            </div>
                        </div>
                    @endguest
                </div>
            </div>
        </div>
    </div>
    </div>
</nav>
