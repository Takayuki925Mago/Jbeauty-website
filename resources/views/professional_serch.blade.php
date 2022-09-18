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
        <div class="header-outer-under">
            <ul class="header-nav">
                <li class="nav"><a class="header-nav-bottom m-left" href="professional-serch">Professional<br>search</a></li>
                <li class="nav"><a class="header-nav-bottom" href="#">Menu<br>search</a></li>
                <li class="nav"><a class="header-nav-bottom" href="#">Salon & Shop<br>Search</a></li>
                <li class="nav"><a class="header-nav-bottom" href="#">Floor guide</a></li>
                <li class="nav"><a class="header-nav-bottom" href="#">Service</a></li>
                <li class="nav"><a class="header-nav-bottom" href="#">News</a></li>
                <li class="nav"><a class="header-nav-bottom" href="#">Store<br>information</a></li>
            </ul> 
        </div>
    </div>
</header>
    <div class="professional_search_wrapper">
        <div class="professional_search">
            <h1>Professional search</h1>
            <p>I am a registered professional. Only a few are here.</p>    
        </div>
    </div>
    <div class="professional_search_body">
        <h1>Category</h1>
        <div class="body-list topic">
            <ul>
                <li>Yoga</li>
                <li>Hair makeup</li>
                <li>Eyelash extension</li>
                <li>Esthtic</li>
                <li>Yoga</li>
                <li>Hair makeup</li>
                <li>Eyelash extension</li>
                <li>Yoga</li>
                <li>Hair makeup</li>
                <li>Eyelash extension</li>
                <li>Esthtic</li>
                <li>Yoga</li>
                <li>Hair makeup</li>
                <li>Eyelash extension</li>
            </ul>
        </div>
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
    <div id="footer">
        ここにfooter.htmlが読み込まれる
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="./slide.js"></script>
</body>
</html>