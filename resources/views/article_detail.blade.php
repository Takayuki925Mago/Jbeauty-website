@extends('layout.common')

@include('layout.header')
@section('top')
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
            <div class="salon-shop-single-top-wrapper">
                <div class="salon-shop-single-top-return">
                    <a href="../s"><p style="font-size: 20px; font-family: Arial; margin: 0; color: #6F6F6F;">↼ RETEURN</p></a>
                </div>
                <div class="salon-shop-single-top-share">
                    <ul class="salon-shop-share">
                        <li class="sns"><p class="share" style="margin: 0; font-size: 20px; font-family: Arial; color: #6F6F6F;">Share → </p></li>
                        <li class="sns"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://www.jbeauty-resort.com/" class="fb-xfbml-parse-ignore"><img src="{{ asset('picture/f_logo.png') }}" width="50px"></a></li>
                        <li class="sns"><a target="_blank" href="https://twitter.com/share?url=https://www.jbeauty-resort.com/&text=Jbeauty Grand Opening in Autumn 2022" class="twitter-share-button"><img src="{{ asset('picture/Twitter.png') }}" width="55px"></a></li>
                        <li class="sns"><a target="_blank" href="#"><img src="{{ asset('picture/whatsapp.png') }}" width="50px"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @include('layout.footer')

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="./slide.js"></script>
    @endsection