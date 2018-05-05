<style>
    .dropdown-item:hover {
        background-color: #404040;
    }
</style>


<section class="container user" id="#su-si">
    <ul class="list-inline float-right" style="margin:0">
        @guest
            <li class="list-inline-item"><a href="{{ route('register') }}" class="sign button">
                    <span class="fa fa-user"></span> {{ __('Register') }}
                </a>
            </li>

            <li class="list-inline-item"><a href="{{ route('login') }}" class="sign button">
                    <span class="fa fa-sign-in"></span> {{ __('Login') }}
                </a>
            </li>
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle"
                   href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false" v-pre>
                    {{ Auth::user()->username }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background:#353535;">
                    <a class="dropdown-item text-white" href="/account">My Account</a>

                    <a class="dropdown-item text-white" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>
</section>


<header class="site-header">
    <div class="container">
        <a href="/" id="branding">
            <img src="{{asset('/images/logo.png')}}" alt="Site Title">
            <small class="site-description">Only if you could reunite...</small>
        </a>

        <nav class="main-navigation">
            <button type="button" class="toggle-menu"><i class="fa fa-bars"></i></button>
            <ul class="menu">
                <li class="menu-item"><a href="/home">Home</a></li>
                <li class="menu-item"><a href="/about">About</a></li>
                <li class="menu-item"><a href="/gallery">Gallery</a></li>
                <li class="menu-item"><a href="/album">Album</a></li>
                <li class="menu-item"><a href="/blog">Blog</a></li>
                <li class="menu-item"><a href="/contact">Contact</a></li>
            </ul>
        </nav>
        <div class="mobile-menu"></div>
    </div>
</header>