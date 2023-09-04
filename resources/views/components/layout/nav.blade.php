<header>
    <div class="header-box">
        <div class="logo-box">
            <img src="{{ asset('images/Frame 52.png') }}" alt="" class="logo" />
        </div>
        <nav>
            <ul>
                <li><a href="" class="active">Home</a></li>
                <li class="drop">
                    <a href="">Common Problems</a>
                    <img src="{{ asset('images/chevron-down.png') }}" alt="" />
                </li>
                <li><a href="{{ route('doctors') }}">book appointment</a></li>
                <li><a href="">FAQs</a></li>
                <li><a href="">Contact us</a></li>
            </ul>
        </nav>
        <div class="sign-box">
            @if(Auth::check())
                <a href="{{ route('logout') }}" class="sign-in">logout</a> )

            @else
                <a href="{{ route('login') }}" class="sign-in">sign in</a>


            @endif
        </div>
    </div>
</header>
