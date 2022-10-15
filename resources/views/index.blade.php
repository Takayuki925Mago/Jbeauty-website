    @extends('layout.common')

    @include('layout.header')
    @section('top')
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
    <div class="topic-wrapper"  style="margin-top: 7rem;">
        <div class="topic-center">
        <a href="article">
            <div class="topic-outer">
                <div class="topic-detail-top">
                    <img src="{{ asset('picture/tenpo.jpeg') }}" width="100%" height="100%" alt="No image" style="object-fit:cover;">
                    <div class="topic-detail-list">
                        <p class="topic-detail-list-p">Event</p>
                    </div>
                </div>
                <div class="topic-detail-center">
                    <p style="padding: 0;">2022.9.17-10.14<br>Pop-up event held!</p>
                    <p style="font-size: 15px; padding:2rem 0;">2022.9.10</p>
                </div>
            </div>
        </a>
        </div>
        <div class="topic-center">
        <a href="member">
            <div class="topic-outer">
                <div class="topic-detail-top">
                    <img src="{{ asset('picture/img_sensu.jpg') }}" width="100%" height="100%" alt="No image" style="object-fit:contain;">
                    <div class="topic-detail-list">
                        <p class="topic-detail-list-p">Event</p>
                    </div>
                </div>
                <div class="topic-detail-center">
                    <p style="padding: 0;">Information on "free menbership registration".</p>
                    <p style="font-size: 15px; padding:2rem 0;">2022.9.10</p>
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
    <div class="more-btn">
        <a href="#" class="topic-btn">More</a>
    </div>
    <div class="body-center-text">
        <h1>Floor guide</h1>
        <p style="color: black;">The J Beauty floor has a total of 50 salons and shops.</p>
    </div>
    <div class="body-center">
        <img src="./picture/floor.jpg">
        <div class="more-btn">
            <a href="#" class="map-btn">View floor guide</a>
        </div>
        <h1>Professional</h1>
        <div class="blank">
        </div>
        <p style="color: black; font-size: 20px; text-align: center; margin: 2.5rem 0px;">I am a registered professional. Only a few are here.</p>
        <div class="body-list topic">
            <ul>
                @foreach ($kinds as $kind)
                <li style="border: none;"><button type="submit" name="shop_salon_category" value="{{ $kind->name }}" class="btn btn-outline-light">{{ $kind->name }}</button></li>
                @endforeach
            </ul>
        </div>
        <div class="topic-wrapper">
        <?php $count = 0;?>
        @foreach ($professionals as $professional)
            <div class="topic-center">
            <a href="{{ route('professional_detail', ['id'=>$professional->id]) }}">
                <div class="topic-vertical">
                    <div class="topic-outer">
                        <div class="topic-detail-top">
                        <img src="{{ $professional->professional_image }}" width="150px" alt="No image">
                            <div class="topic-detail-list">
                                @foreach ($professional->categories as $category)
                                <p class="topic-detail-list-p-shop shop_list">{{ $category->name }}</p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <p class="body-p2" style="margin: 0.5rem 0 0 0; font-size: 16px; font-family: Arial;">{{ $professional->salon->salon_name }}</p>
                    <p class="body-p" style='margin: 0; padding: 0; font-size: 20px; font-family: Arial;'>{{ $professional->professional_name }}</p>
                </div>
            </a>
            </div>
            <?php
             $count++;
            ?>
            @endforeach
            <?php 
            $answer = $count % 3;
            if($answer === 1) :
            ?>
            <div class="blank-center">
                <div class="blank-vertical">
                    <div class="topic-outer" style="box-shadow: none;">
                        <div class="blank-detail-top">
                            <div class="topic-detail-list">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blank-center">
                <div class="blank-vertical">
                    <div class="topic-outer" style="box-shadow: none;">
                        <div class="blank-detail-top">
                            <div class="topic-detail-list">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php elseif($answer == 2) : ?>
            <div class="blank-center">
                <div class="blank-vertical">
                    <div class="topic-outer" style="box-shadow: none;">
                        <div class="blank-detail-top">
                            <div class="topic-detail-list">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
        <div class="more-btn" style="margin-bottom: 2rem;">
            <a href="professional-search" class="topic-btn">PROFESSIONAL SEARCH</a>
        </div>
        <h1>Professional</h1>
        <div class="blank">
        </div>
        <p style="color: black; font-size: 20px; text-align: center; margin: 2.5rem 0px;">I am a registered professional. Only a few are here.</p>
        <div class="body-list topic">
            <ul>
                @foreach ($kinds as $kind)
                <li style="border: none;"><button type="submit" name="shop_salon_category" value="{{ $kind->name }}" class="btn btn-outline-light">{{ $kind->name }}</button></li>
                @endforeach
            </ul>
        </div>
        <div class="topic-wrapper">
            <?php $count = 0;?>
            @foreach ($salons as $salon)
            <div class="topic-center">
            <a href="{{ route('salon_detail', ['id'=>$salon->id]) }}">
                <div class="topic-vertical">
                    <div class="topic-outer">
                        <div class="topic-detail-top">
                            <img src="{{ asset('picture/salons/'.$salon->salon_logo) }}" width="60%" alt="No image">
                            <div class="topic-detail-list">
                                @foreach ($salon->categories as $category)
                                <p class="topic-detail-list-p-shop shop_list">{{ $category->name }}</p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <p class="body-p2" style='margin: 1rem; font-size: 18px; font-family: Arial; padding: 0;'>{{ $salon->salon_name }}</p>
                </div>
            </a>
            </div>
            <?php
             $count++;
            ?>
            @endforeach
            <?php 
            $answer = $count % 3;
            if($answer === 1) :
            ?>
            <div class="blank-center">
                <div class="blank-vertical">
                    <div class="topic-outer" style="box-shadow: none;">
                        <div class="blank-detail-top">
                            <div class="topic-detail-list">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blank-center">
                <div class="blank-vertical">
                    <div class="topic-outer" style="box-shadow: none;">
                        <div class="blank-detail-top">
                            <div class="topic-detail-list">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php elseif($answer == 2) : ?>
            <div class="blank-center">
                <div class="blank-vertical">
                    <div class="topic-outer" style="box-shadow: none;">
                        <div class="blank-detail-top">
                            <div class="topic-detail-list">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
        <div class="more-btn" style="margin-bottom: 2rem;">
            <a href="salon-shop-search" class="topic-btn">SALON&SHOP SEARCH</a>
        </div>
    </div>
    <div class="body-center-text">
        <h1>TopicsMenu</h1>
        <p style="display: block; color: black;">Menu topics. There are many other items on menu.</p>
    </div>
    <div class="topicsMenu-title" style="width: 45rem; margin-bottom: 3rem;">
    </div>
    <div class="topic-wrapper" style="margin-top: 7rem;">
    <?php $count = 0;?>
    @foreach ($menus as $menu)
        <div class="topic-center">
        <a href="{{ route('menu_detail', ['id'=>$menu->id]) }}">
            <div class="topic-vertical">
                <div class="topic-outer">
                    <div class="topic-detail-top sensu">
                        <div class="topic-detail-list">
                            @foreach ($menu->categories as $category)
                            <p class="topic-detail-list-p-shop shop_list">{{ $category->name }}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
                <p class="body-p" style='margin: auto; font-size: 20px; font-family: Arial; width: 20rem; overflow-wrap: normal;'>{{ $menu->name }}</p>
                <p class="body-p2" style="margin: 0; font-size: 16px; font-family: Arial; color: gray;">{{ $menu->salon->salon_name }}</p>
            </div>
        </a>
        </div>
        <?php
         $count++;
        ?>
        @endforeach
        <?php 
        $answer = $count % 3;
        if($answer === 1) :
        ?>
        <div class="blank-center">
            <div class="blank-vertical">
                <div class="topic-outer" style="box-shadow: none;">
                    <div class="blank-detail-top">
                        <div class="topic-detail-list">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blank-center">
            <div class="blank-vertical">
                <div class="topic-outer" style="box-shadow: none;">
                    <div class="blank-detail-top">
                        <div class="topic-detail-list">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php elseif($answer == 2) : ?>
        <div class="blank-center">
            <div class="blank-vertical">
                <div class="topic-outer" style="box-shadow: none;">
                    <div class="blank-detail-top">
                        <div class="topic-detail-list">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
    <div class="more-btn" style="margin-bottom: 2rem;">
        <a href="menu-search" class="topic-btn">MENU SEARCH</a>
    </div>

    </div>
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
    
    @include('layout.footer')

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="./slide.js"></script>

    @endsection