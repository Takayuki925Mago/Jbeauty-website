@section('header')
<header>
    <div class="header-wrapper">
        <div class="header-outer-top">
            <a href="index"><img class="jbeauty-logo" src="{{ asset('picture/logo.jpg') }}"></a>
            <div class="header-outer-top-left">
                <ul class="header-nav">
                <!-- @if (Route::has('login'))
                    @auth
                        <li class="nav-btn"><a href="{{ url('/index') }}" class="header-btn">index</a></li>
                    @else
                        <li class="nav-btn"><a href="{{ route('login') }}" class="header-btn">Log in</a></li>

                        @if (Route::has('register'))
                        <li class="nav-btn"><a href="{{ route('register') }}" class="header-btn">Register</a></li>
                        @endif
                    @endauth
                @endif -->
                    <li class="nav-btn"><a href="member" class="header-btn">Membership</a></li>
                    <li class="nav-top"><a target="_blank" href="https://twitter.com/JBEAUTY_Resort"><img src="{{ asset('picture/Twitter_logo.png') }}" width="40px"></a></li>
                    <li class="nav-top"><a target="_blank" href="https://www.instagram.com/jbeauty.resort/"><img src="{{ asset('picture/Instagram_logo.png') }}" width="40px"></a></li>
                    <li class="nav-top"><a target="_blank" href="#"><img src="{{ asset('picture/youtube_logo.png') }}" width="40px"></a></li>
                </ul>
            </div>
        </div>
        <div class="header-outer-under">
            <ul class="header-nav">
                <li class="nav"><a class="header-nav-bottom m-left" href="professional-search">Professional<br>search</a></li>
                <li class="nav"><a class="header-nav-bottom" href="menu-search">Menu<br>search</a></li>
                <li class="nav"><a class="header-nav-bottom" href="salon-shop-search">Salon & Shop<br>Search</a></li>
                <li class="nav"><a class="header-nav-bottom" href="floor-guide">Floor guide</a></li>
                <li class="nav"><a class="header-nav-bottom" href="service">Service</a></li>
                <li class="nav"><a class="header-nav-bottom" href="news-search">News</a></li>
                <li class="nav"><a class="header-nav-bottom" href="store-information">Store<br>information</a></li>
            </ul> 
        </div>
    </div>
</header>
@endsection