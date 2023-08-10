<header class="main-header clearfix" role="header">
    <div class="logo">
        <a href="#"><em>Grad</em> School</a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
        <ul class="main-menu">
            @guest
                <li><a href="#section1">Home</a></li>
                <li class="has-submenu"><a href="#section2">About Us</a>
                    <ul class="sub-menu">
                        <li><a href="#section2">Who we are?</a></li>
                        <li><a href="#section3">What we do?</a></li>
                        <li><a href="#section3">How it works?</a></li>
                        <li><a href="https://templatemo.com/about" rel="sponsored" class="external">External URL</a></li>
                    </ul>
                </li>
                <li><a href="#section4">Courses</a></li>
                <!-- <li><a href="#section5">Video</a></li> -->
                <li><a href="#section6">Contact</a></li>
                <li><a href="#" class="external">Exam</a></li>
                @if (Route::has('login'))
                    <li><a href="{{ route('login') }}" class="external">login</a></li>
                @endif
                @if (Route::has('register'))
                    <li><a href="{{ route('register') }}" class="external">Register</a></li>
                @endif
            @else
                <li><a href="#section1">Home</a></li>
                <li class="has-submenu"><a href="#section2">About Us</a>
                    <ul class="sub-menu">
                        <li><a href="#section2">Who we are?</a></li>
                        <li><a href="#section3">What we do?</a></li>
                        <li><a href="#section3">How it works?</a></li>
                        <li><a href="https://templatemo.com/about" rel="sponsored" class="external">External URL</a></li>
                    </ul>
                </li>
                <li><a href="#section4">Courses</a></li>
                <!-- <li><a href="#section5">Video</a></li> -->
                <li><a href="#section6">Contact</a></li>
                <li><a href="{{ route('frontEnd.exam.view') }}" class="external">Exam</a></li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="has-submenu" aria-labelledby="navbarDropdown">
                        <a class="sub-menu" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </nav>
</header>
