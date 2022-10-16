@extends('layout.common')

@include('layout.header')
@section('top')
<div class="membership_wrapper">
    <div class="membership_search">
        <h1>Membership</h1>
        <p>Information about J BEAUTY Resort's membership system.</p>    
    </div>
</div>
<div class="membership-body">
    <h1>Free Membership</h1>
    <p style="line-height: 4.5rem;">Information on "free membership registration".</p>
    <p>J BEAUTY Resort recommends free membe registration.</p>
    <p>Membership can use the following member-only services.</p>
    <div class="more-btn">
        <a href="https://forms.gle/K2KwCxfwzHKj2FX19" class="topic-btn" style="padding: 20px 80px; font-family:Ariel;">JOIN FREE</a>
    </div>
    <h1 style="margin:3rem 0;">Member Benefits</h1>
</div>
<div class="member-value-wrap">
    <ul>
        <li>
            <div style="height: fit-contents;"><h2 class="member-value-number">1</h2></div>
            <div class="value-detail-wrap">
                <div class="title">
                    <p style=" letter-spacing: 0.2rem;">2022.9.17-10.14 A limited quantity gift project!</p>
                </div>
                <h3 style="text-align: left;">2022.9.17-10.14 During the "pop-up event", a limited
                    number of "J BEAUTY Resort original folding fans" will
                    be presented!
                </h3>
                <p>
                    A limited nuber of "J BEAUTY Resort Original Fans" will be
                    presented to those who register for free during the member-only
                    "pop-up event" that will be held between September 17th and October
                    14th, 2022.. Quantities are limited, so please imprison as soon as posssible!
                </p>
                <img src="{{ asset('picture/img_sensu.jpg') }}" alt="none" width="70%">
                <p class="image-explane">
                    A folding fan is one of the Japanese tools that you can to cool yourself by looking at it.
                </p>
            </div>
        </li>
        <li>
            <div style="height: fit-contents;"><h2 class="member-value-number">2</h2></div>
            <div class="value-detail-wrap">
                <h3 style="text-align: left;">Be the first to receive information on member-only events and sales! You can
                    also participate in member-only events.
                </h3>
                <p>
                    information on events and sales held at J BEAUTY Resort for members only will 
                    be sent to your registered email. You can also participate in special events only for members.
                </p>
            </div>
        </li>
        <li>
            <div style="height: fit-contents;"><h2 class="member-value-number">3</h2></div>
            <div class="value-detail-wrap">
                <h3 style="text-align: left;">You can recreive exclusive member-only services and benefits when purchasing 
                    products at J BEAUTY Resort!
                </h3>
                <p>You can receive various benefits when you receive member-only services or purchase 
                    products at salons and shops in JBEAUTY Resort.
                </p>
            </div>
        </li>
    </ul>
</div>
<div class="more-btn" style="margin-bottom: 5rem;">
        <a href="https://forms.gle/K2KwCxfwzHKj2FX19" class="topic-btn" style="padding: 20px 80px; font-family:Ariel;">JOIN FREE</a>
</div>
@include('layout.footer')
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="./slide.js"></script>
@endsection