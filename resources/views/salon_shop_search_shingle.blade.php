@extends('layout.common')

@include('layout.header')
@section('top')
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
<div class="salon-shop-top">
    <div class="salon-shop-shingle-logo">
        <img src="{{ asset('picture/salons/'.$salon->salon_logo) }}" width="150px" height="150px">
    </div>
    <div class="salon-shop-shingle-title">
        <div class="salon-shop-shingle-title-category">
            <ul>
                @foreach ($salon->categories as $category)
                <li style="background-color: white;"><button type="button" name="shop_salon_category" class="btn btn-outline-danger">{{ $category->name }}</button></li>
                @endforeach
            </ul>
        </div>
        <div class="salon-shop-shingle-title-name">
            <h3>{{ $salon->salon_name }}</h3>
        </div>
        <div class="salon-shop-shingle-title-name" style="border: none;">
            <p>店舗位置</p>
        </div>
    </div>
</div>
<div class="salon-shop-shingle-detail-wrap">
    <div class="salon-shop-shingle-detail-image">
        <div class="salon-shop-shingle-detail-image-1"><p>img</p></div>
        <div class="salon-shop-shingle-detail-image-2"><p>img</p></div>
    </div>
    <div class="salon-shop-shingle-detail-info-wrap">
        <div class="salon-shop-shingle-detail-info">
            <p style="padding: 2rem; font-size: 16px; color:#070707; text-align: justify; text-justify: inter-ideograph;">{{ $salon->salon_info }}</p>
        </div>
        <div class="salon-shop-shingle-detail-other">
            <p style="padding: 1rem; margin: 0; font-size: 16px; color:#070707; text-align: justify; text-justify: inter-ideograph;">{{ $salon->salon_other }}</p>
        </div>
        <ul class="salon-shop-share">
            <li class="sns"><a target="_blank" href="{{ $salon->salon_instagram }}"><img src="{{ asset('picture/sns/instagram.png') }}" width="75%"></a></li>
            <li class="sns"><a target="_blank" href="#"><img src="{{ asset('picture/sns/twitter.png') }}" width="75%"></a></li>
            <li class="sns"><a target="_blank" href="#"><img src="{{ asset('picture/sns/facebook.png') }}" width="75%"></a></li>
            <li class="sns"><a target="_blank" href="#"><img src="{{ asset('picture/sns/tiktok.png') }}" width="75%"></a></li>
            <li class="sns"><a target="_blank" href="#"><img src="{{ asset('picture/sns/youtube.png') }}" width="75%"></a></li>
        </ul>
        <div class="salon-shop-shingle-detail-other" style="display: flex;">
            <img src="{{ asset('picture/link.png') }}" width="22px" height="22px">
            <a target="_blank" href="{{ $salon->salon_instagram }}" style="padding: 0; margin: 0 0 0 1.5rem; font-size: 16px; color:#070707;">{{ $salon->salon_instagram }}</a>
        </div>
    </div>
</div>

<!-- professionals -->
<div style="margin: 8rem auto 3rem auto;">
    <h3 style="text-align: center;">Enrolled Professional</h3>
    <div class="blank-pink">
    </div>
</div>
<div class="topic-wrapper">
    <?php $count = 0;?>
    @foreach ($professionals as $professional)
        <div class="topic-center">
        <a href="{{ route('professional_detail', ['id'=>$professional->id]) }}">
            <div class="topic-vertical">
                <div class="topic-outer">
                    <div class="topic-detail-top sensu">
                        <div class="topic-detail-list">
                            @foreach ($professional->categories as $category)
                            <p class="topic-detail-list-p-shop shop_list">{{ $category->name }}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
                <p class="body-p" style='margin: 0.5rem 0; font-size: 20px; font-family: Arial;'>{{ $professional->professional_name }}</p>
                <p class="body-p2" style="margin: 0; font-size: 16px; font-family: Arial; color: gray;">{{ $professional->salon->salon_name }}</p>
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

    <!-- other menu -->
    <div style="margin: 5rem auto 3rem auto;">
        <h3 style="text-align: center;">Other menu</h3>
        <div class="blank-pink">
        </div>
    </div>
    <div class="topic-wrapper">
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
                <p class="body-p" style='overflow-wrap: normal; width: 20rem; margin: 0.5rem 0; font-size: 20px; font-family: Arial;'>{{ $menu->name }}</p>
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

    <!-- news -->
    <div style="margin: 5rem auto 3rem auto;">
        <h3 style="text-align: center;">News</h3>
        <div class="blank-pink">
        </div>
    </div>
    <div class="more-btn">
        <a href="#" class="topic-btn">MORE</a>
    </div>
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
@include('layout.footer')
@endsection