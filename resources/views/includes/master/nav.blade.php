<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="/">{{ config('app.name', 'Laravel') }}</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item {{ Request::is('/') ? 'active' : null }}">
                    <a class="nav-link" href="{{ route('welcome') }}">Welcome</a>
                </li>
                <li class="nav-item {{ Request::is('about') ? 'active' : null }}">
                    <a class="nav-link" href="{{ route('about') }}">About Us</a>
                </li>
                <li class="nav-item {{ Request::is('contact') ? 'active' : null }}">
                    <a class="nav-link" href="{{ route('contact.create') }}">Contact Us</a>
                </li>
            </ul>
        </div>
        @if (Route::has('login'))
            <ul class="navbar-nav ml-auto">
                @auth
                    <li class="nav-item {{ Request::is('home') ? 'active' : null }}">
                        <a class="nav-link" href="{{ url('/home') }}">Home</a>
                    </li>
                @else
                    <li class="nav-item {{ Request::is('login') ? 'active' : null }}">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>

                    @if (Route::has('register'))
                        <li class="nav-item {{ Request::is('register') ? 'active' : null }}">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li>
                    @endif
                @endauth
            </ul>
        @endif
    </div>
</nav>
