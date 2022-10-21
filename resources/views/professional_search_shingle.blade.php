@extends('layout.common')

@include('layout.header')
@section('top')
<div class="salon-shop-single-top-wrapper">
    <div class="salon-shop-single-top-return">
        <a href="professional-search"><p style="font-size: 20px; font-family: Arial; margin: 0; color: #6F6F6F;">↼ RETEURN</p></a>
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
<div class="professional-top">
    <div class="salon-shop-shingle-logo">
        <img src="{{ asset($professional->image_path) }}" width="150px">
    </div>
    <div class="salon-shop-shingle-title">
        <div class="salon-shop-shingle-title-category">
            <ul>
                @foreach ($professional->categories as $category)
                <li style="background-color: white;"><button type="button" name="shop_salon_category" class="btn btn-outline-danger">{{ $category->name }}</button></li>
                @endforeach
            </ul>
        </div>
        <div class="salon-shop-shingle-title-name">
            <h3>{{ $professional->professional_name }}</h3>
        </div>
        <div class="salon-shop-shingle-title-name" style="border: none;">
            <p style="margin: 0;">{{ $professional->diploma }}</p>
        </div>
    </div>
</div>
<div class="salon-shop-shingle-detail-wrap">
    <div class="salon-shop-shingle-detail-image">
        <div class="salon-shop-shingle-detail-image-1" style="margin-bottom: 0;">
            <img src="{{ asset($professional->main_path) }}" height="100%">
        </div>
    </div>
    <div class="salon-shop-shingle-detail-info-wrap">
        <div class="salon-shop-shingle-detail-info">
            <p style="padding: 2rem; font-size: 16px; color:#070707; text-align: justify; text-justify: inter-ideograph;">{{ $professional->message }}</p>
        </div>
        <ul class="salon-shop-share">
            <li class="sns"><a target="_blank" href="{{ $professional->professional_instagram }}"><img src="{{ asset('picture/sns/instagram.png') }}" width="75%"></a></li>
            <li class="sns"><a target="_blank" href="{{ $professional->professional_twitter }}"><img src="{{ asset('picture/sns/twitter.png') }}" width="75%"></a></li>
            <li class="sns"><a target="_blank" href="{{ $professional->professional_facebook }}"><img src="{{ asset('picture/sns/facebook.png') }}" width="75%"></a></li>
            <li class="sns"><a target="_blank" href="{{ $professional->professional_tiktok }}"><img src="{{ asset('picture/sns/tiktok.png') }}" width="75%"></a></li>
            <li class="sns"><a target="_blank" href="{{ $professional->professional_youtube }}"><img src="{{ asset('picture/sns/youtube.png') }}" width="75%"></a></li>
        </ul>
        <div class="salon-shop-shingle-detail-other" style="display: flex;">
            <img src="{{ asset('picture/link.png') }}" width="22px" height="22px">
            <a target="_blank" href="{{ $professional->salon_instagram }}" style="padding: 0; margin: 0 0 0 1.5rem; font-size: 16px; color:#070707;">{{ $professional->professional_instagram }}</a>
        </div>
    </div>
</div>

<!-- menu -->
    <div style="margin: 5rem auto 3rem auto;">
        <h3 style="text-align: center;">Menu</h3>
        <div class="blank-pink">
        </div>
    </div>
    <div class="topic-wrapper">
    <?php $count = 0;?>
    @foreach ($menus as $menu)
        <div class="topic-center">
        <a href="{{ route('menu_detail', ['id'=>$menu->id]) }}">
            <div class="topic-vertical-menu">
                <div class="topic-outer-menu">
                    <div class="topic-detail-top">
                    <img src="{{ asset($menu->path) }}" width="100%" height="100%" alt="No image" style="object-fit:cover;">
                        <div class="topic-detail-list">
                            <p class="topic-detail-list-p-shop shop_list">{{ $menu->category_name }}</p>
                        </div>
                    </div>
                </div>
                <div class="topic-outer" style="margin: 0;">
                    <p class="body-p" style='margin: 0; width: 20rem; text-align: left; font-size: 20px; font-family: Arial; overflow-wrap: normal;'>{{ $menu->name }}</p>
                    <p class="body-p2" style="margin: 0; text-align: left; padding: 1rem; font-size: 16px; font-family: Arial; color: gray;">{{ $menu->salon->salon_name }}</p>
                </div>
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
    
    <div style="margin: 5rem auto 3rem auto;">
        <h3 style="text-align: center;">News</h3>
        <div class="blank-pink">
        </div>
    </div>
    @include('layout.news_list')
    <div class="more-btn" style="margin-bottom: 2rem;">
        <a href="index" class="topic-btn">MORE</a>
    </div>
    <div class="salon-shop-top">
        <a href="{{ route('salon_detail', ['id'=>$professional->salon->id]) }}">
        <div class="salon-shop-shingle-logo">
            <img src="{{ asset($professional->salon->path) }}" width="150px" height="150px">
        </div>
        </a>
        <div class="salon-shop-shingle-title">
            <div class="salon-shop-shingle-title-category">
                <ul>
                    @foreach ($professional->salon->categories as $category)
                    <li style="background-color: white;"><button type="button" name="shop_salon_category" class="btn btn-outline-danger">{{ $category->name }}</button></li>
                    @endforeach
                </ul>
            </div>
            <div class="salon-shop-shingle-title-name">
                <h3>{{ $professional->salon->salon_name }}</h3>
            </div>
            <div class="salon-shop-shingle-title-name" style="border: none;">
                <p>店舗位置</p>
            </div>
        </div>
    </div>
    <div class="salon-shop-single-top-wrapper">
        <div class="salon-shop-single-top-return">
            <a href="professional-search"><p style="font-size: 20px; font-family: Arial; margin: 0; color: #6F6F6F;">↼ RETEURN</p></a>
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