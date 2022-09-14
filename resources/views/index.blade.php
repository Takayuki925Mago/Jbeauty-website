<!DOCTYPE html>
<html lang="en">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/reset.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/6-1-7/css/6-1-7.css">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/topic.css') }}">
    <link rel="stylesheet" href="{{ asset('css/body-center.css') }}">
    <link rel="stylesheet" href="{{ asset('css/topicsMenu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/instagram.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/professinal_search.css') }}">
    <link rel="stylesheet" href="{{ asset('css/news.css') }}">

    <title>Jbeauty</title>

    <meta property="og:url" content="https://www.jbeauty-resort.com/" />
    <meta name="twitter:card" content="summary"/>
    <meta property="og:title" content="Jbeauty Grand Opening in Autumn 2022" />
    <meta property="og:description" content="日本発のプレミアムな化粧品を創造し、アジア・世界へと発信する。" />
    <meta property="og:image" content="https://www.jbeauty-resort.com/pic/twittershare.jpg" />

    <script src="//code.jquery.com/jquery-2.2.4.min.js"></script>
    <script>
        //共通パーツ読み込み
         $(function() {
        //  $("#pro, #pro1").load("{{ asset('container_topic.php') }}");
         $("#pro_name, #pro_name2").load("{{ asset('container_professional.php') }}");
         $("#footer").load("{{ asset('footer.html') }}");
        });
    </script>


</head>
<body>
<header>
    <div class="header-wrapper">
        <div class="header-outer-top">
            <a href="index"><img class="jbeauty-logo" src="./picture/logo.png"></a>
            <div class="header-outer-top-left">
                <ul class="header-nav">
                @if (Route::has('login'))
                    @auth
                        <li class="nav-btn"><a href="{{ url('/index') }}" class="header-btn">index</a></li>
                    @else
                        <li class="nav-btn"><a href="{{ route('login') }}" class="header-btn">Log in</a></li>

                        @if (Route::has('register'))
                        <li class="nav-btn"><a href="{{ route('register') }}" class="header-btn">Register</a></li>
                        @endif
                    @endauth
                @endif
                    <li class="nav-btn"><a href="member" class="header-btn">Membership</a></li>
                    <li class="nav-top"><img src="./picture/Twitter_logo.png" width="40px"></li>
                    <li class="nav-top"><img src="./picture/Instagram_logo.png" width="40px"></li>
                    <li class="nav-top"><img src="./picture/youtube_logo.png" width="40px"></li>
                </ul>
            </div>
        </div>
    </div>
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif
</header>
    <div class="main-page-news-wrap">
        <div class="main-page-news-area">
        <h2  style="margin-bottom: 22rem; font-weight:500; font-size:45px; letter-spacing: 0.3rem;;">Welcome to the world of Japanese beauty.</h2>
            <div class="main-page-news-foot">
                <h1>2022.9.17-10.14<br>Pop-up event held!</h1>
                <div class="more-btn main-page-news-foot-btn" style=" margin: auto 0 0 auto;">
                    <a href="article" class="topic-btn" style="padding: 15px 70px; margin: 0; font-family: Arial; font-size:25px; font-weight:700;">READ MORE ▶</a>
                </div>
            </div>
        </div>
    </div>
    <div class="body-center-text">
        <h1>Topics</h1>
        <p style="display: block; color: black;">Menu topics. There are many other items on menu.</p>
    </div>
    <div class="topicsMenu-title" style="width: 30rem; margin-bottom: 3rem;">
    </div>
    <div class="topic-wrapper">
        <div class="topic-center">
        <a href="article">
            <div class="topic-outer">
                <div class="topic-detail-top">
                    <div class="topic-detail-list">
                        <p class="topic-detail-list-p">Event</p>
                    </div>
                </div>
                <div class="topic-detail-center">
                        <p>2022.9.17-10.14<br>Pop-up event held!</p>
                        <p style="font-size: 15px; padding:2rem 0;">2022.9.10<p>
                </div>
            </div>
        </a>
        </div>
        <div class="topic-center">
        <a href="member">
            <div class="topic-outer">
                <div class="topic-detail-top sensu">
                    <div class="topic-detail-list">
                        <p class="topic-detail-list-p">Event</p>
                    </div>
                </div>
                <div class="topic-detail-center">
                        <p>Information on "free menbership registration".</p>
                        <p style="font-size: 15px; padding:2rem 0;">2022.9.10<p>
                </div>
            </div>
        </a>
        </div>
        <div class="topic-center">
            <div style="width: 22rem;">
                <div style="height:15rem;">
                    <div class="topic-detail-list">
                    </div>
                </div>
                <div class="topic-detail-center">
                </div>
            </div>
        </div>
    </div>
    <!-- <div id="pro">
        ここにcontainer_topic.phpが読み込まれる
    </div> -->
    <div class="body-center-text">
        <h1>Instagram</h1>
        <p style="color: black;">J BEAUTY Resort official account. We deliver the latest information.</p>
    </div>
    <div class="instagram">
        <div class="insta-scroll-contents">
            <div class="scroller-flex">
                <div class="insta-contents">
                </div>
                <div class="insta-contents">
                </div>
                <div class="insta-contents">
                </div>
                <div class="insta-contents">
                </div>
                <div class="insta-contents">
                </div>
                <div class="insta-contents">
                </div>
                <div class="insta-contents">
                </div>
                <div class="insta-contents">
                </div>
            </div>
        </div>
        <div class="more-btn">
            <a href="#" class="map-btn">Instagram</a>
        </div>
    </div>
    <div class="iframe-wrap">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.919951921169!2d101.66103741472004!3d3.1158786542252996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4981bc449525%3A0x403c9d9bc7af5066!2z44OX44Or44Oe44Oz44O744Kv44Ki44Op44O744Or44Oz44OX44Or44O744OQ44Oz44K144O8!5e0!3m2!1sja!2sus!4v1660706806910!5m2!1sja!2sus" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="more-btn map">
            <a href="#" class="topic-btn">Access</a>
        </div>
    </div>
    <div id="footer">
        ここにfooter.htmlが読み込まれる
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="./slide.js"></script>
</body>
</html>