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
    <link rel="stylesheet" href="{{ asset('css/article.css') }}">

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
         $("#pro, #pro1").load("{{ asset('container_topic.php') }}");
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
                    <li class="nav-btn"><a href="member" class="header-btn">Membership</a></li>
                    <li class="nav-top"><img src="./picture/Twitter_logo.png" width="40px"></li>
                    <li class="nav-top"><img src="./picture/Instagram_logo.png" width="40px"></li>
                    <li class="nav-top"><img src="./picture/youtube_logo.png" width="40px"></li>
                </ul>
            </div>
        </div>
    </div>
</header>
    <div class="news_body">
        <div class="body-list topic" style=" width: 60%; text-align:left;">
            <ul>
                <li>Event</li>
            </ul>
            <h1>2022.9.17-10.14Pop-up event held!</h1>
            <p>2022.9.10</p>
            <div class="main-page-news-wrap" style="margin-top: 4rem;">
                <div class="main-page-news-area">
                    <h2  style="margin-bottom: 22rem; font-weight:500; font-size:45px; letter-spacing: 0.3rem;;">Welcome to the world of Japanese beauty.</h2>
                <div class="main-page-news-foot">
                    <h1 style="color:white;">2022.9.17-10.14<br>Pop-up event held!</h1>
                </div>
            </div>
            </div>
            <h2 class="article-detail-sentence-h2">J BEAUTY Resort ・ Pop-up Event</h2>
            <p class="article-detail-sentence-p">
            Before the official opening of J BEAUTY Resort, a pop-up event will be held on the following dates.
            Duaring the pop-up period, you can experience the treatment services that you can receive at the time 
            of the official opening, introduce the brands that open stores, introduce beauty professionals, and 
            experience Japanese culture. <br>There are also many benefits offered only to visitors. So please come and 
            visit us during the period!
            </p>
            <h2 class="article-detail-sentence-h2">The first 500 visitors who register as JBEAUTY members will recieve an "original folding fan" as a gift!</h2>
            <img src="{{ asset('picture/img_sensu.jpg') }}" alt="none" width="50%" style="margin: 2rem 0;">
            <p class="image-explane">
                A folding fan is one of the Japanese tools that creates a cool breeze.
            </p>
            <p class="article-detail-sentence-p">
            please register. You can also register at the venue on the day.
            <br>For advance registration, please register from the "Membership" page!
            </p>
            <div class="more-btn" style="float: left; margin:2rem 0 2rem 0;">
                <a href="member" class="topic-btn" style="margin:0; padding: 20px 80px; font-family:Ariel;">Membership</a>
            </div>
            <img src="{{ asset('picture/tirashi.jpg') }}" style="margin: 10rem 0 4rem 0;">
            <ul class="share">
                <li class="sns"><p class="share">Share → </p></li>
                <li class="sns"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://www.jbeauty-resort.com/" class="fb-xfbml-parse-ignore"><img src="{{ asset('picture/f_logo.png') }}" width="50px"></a></li>
                <li class="sns"><a target="_blank" href="https://twitter.com/share?url=https://www.jbeauty-resort.com/&text=Jbeauty Grand Opening in Autumn 2022" class="twitter-share-button"><img src="{{ asset('picture/Twitter.png') }}" width="55px"></a></li>
            </ul>
        </div>
    </div>
    <div id="footer" style="margin-top: 8rem;">
        ここにfooter.htmlが読み込まれる
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="./slide.js"></script>
</body>
</html>