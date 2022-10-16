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
<div class="professional-top">
    <div class="salon-shop-shingle-logo">
        <img src="{{ asset($menu->logo_path) }}" width="150px" height="150px">
    </div>
    <div class="salon-shop-shingle-title">
        <div class="salon-shop-shingle-title-category">
            <ul>
                @foreach ($menu->categories as $category)
                <li style="background-color: white;"><button type="button" name="shop_salon_category" class="btn btn-outline-danger">{{ $category->name }}</button></li>
                @endforeach
            </ul>
        </div>
        <div class="salon-shop-shingle-title-name">
            <h3>{{ $menu->name }}</h3>
        </div>
        <div style="display: flex;">
            <div class="salon-shop-shingle-title-name" style="border: none;">
                <p style="margin: 0;">Price : {{ $menu->price }}</p>
            </div>
            <div class="more-btn" style="margin: 0 0 0 auto;">
                <a href="#" class="btn-red" style="margin-bottom: 0;">RESERVATION</a>
            </div>
        </div>
    </div>
</div>
<div class="salon-shop-shingle-detail-wrap">
    <div class="salon-shop-shingle-detail-image">
        <div class="salon-shop-shingle-detail-image-1" style="margin-bottom: 0;">
            <img src="{{ asset($menu->path) }}" height="100%">
        </div>
        <div class="topic-wrapper" style="margin: 1rem 1rem 1rem 0;">
        @foreach ($menu->images as $image)
            <div class="topic-center" style="margin: 0.3rem 0.3rem 0.3rem 0;">
                <img src="{{ asset($image->image_path) }}" width="200px" height="150px" alt="no image">
            </div>
        @endforeach
        </div>
    </div>
    <div class="salon-shop-shingle-detail-info-wrap">
        <div class="salon-shop-shingle-detail-info">
            <p style="padding: 2rem; font-size: 16px; color:#070707; text-align: justify; text-justify: inter-ideograph;">{!! nl2br(e($menu->menu_detail)) !!}</p>
        </div>
        <div class="salon-shop-shingle-detail-other">
            <p style="padding: 1rem; margin: 0; font-size: 16px; color:#070707; text-align: justify; text-justify: inter-ideograph;">{!! nl2br(e($menu->other)) !!}</p>
        </div>
        <ul class="salon-shop-share">
            <li class="sns"><a target="_blank" href="#"><img src="{{ asset('picture/sns/instagram.png') }}" width="75%"></a></li>
            <li class="sns"><a target="_blank" href="#"><img src="{{ asset('picture/sns/twitter.png') }}" width="75%"></a></li>
            <li class="sns"><a target="_blank" href="#"><img src="{{ asset('picture/sns/facebook.png') }}" width="75%"></a></li>
            <li class="sns"><a target="_blank" href="#"><img src="{{ asset('picture/sns/tiktok.png') }}" width="75%"></a></li>
            <li class="sns"><a target="_blank" href="#"><img src="{{ asset('picture/sns/youtube.png') }}" width="75%"></a></li>
        </ul>
        <div class="salon-shop-shingle-detail-other" style="display: flex;">
            <img src="{{ asset('picture/link.png') }}" width="22px" height="22px">
            <a target="_blank" href="#" style="padding: 0; margin: 0 0 0 1.5rem; font-size: 16px; color:#070707;">{{ $menu->name }}</a>
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
                    <div class="topic-detail-top">
                    <img src="{{ asset($professional->image_path) }}" width="100%" height="100%" alt="No image" style="object-fit:cover;">
                        <div class="topic-detail-list">
                            <p class="topic-detail-list-p-shop shop_list">{{ $professional->main_category }}</p>
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
                    <div class="topic-detail-top">
                    <img src="{{ asset($menu->path) }}" width="100%" height="100%" alt="No image" style="object-fit:cover;">
                        <div class="topic-detail-list">
                            <p class="topic-detail-list-p-shop shop_list">{{ $menu->category_name }}</p>
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
    <div class="more-btn">
        <a href="menu-search" class="topic-btn">MENU SEARCH</a>
    </div>
    <div style="margin: 5rem auto 3rem auto;">
        <h3 style="text-align: center;">News</h3>
        <div class="blank-pink">
        </div>
    </div>
    @include('layout.news_list')
    <div class="more-btn" style="margin-bottom: 2rem;">
        <a href="#" class="topic-btn">MORE</a>
    </div>
    <div class="salon-shop-top">
        <a href="{{ route('salon_detail', ['id'=>$menu->salon->id]) }}">
        <div class="salon-shop-shingle-logo">
            <img src="{{ asset('picture/salons/'.$menu->salon->salon_logo) }}" width="150px" height="150px">
        </div>
        </a>
        <div class="salon-shop-shingle-title">
            <div class="salon-shop-shingle-title-category">
                <ul>
                    @foreach ($menu->salon->categories as $category)
                    <li style="background-color: white;"><button type="button" name="shop_salon_category" class="btn btn-outline-danger">{{ $category->name }}</button></li>
                    @endforeach
                </ul>
            </div>
            <div class="salon-shop-shingle-title-name">
                <h3>{{ $menu->salon->salon_name }}</h3>
            </div>
            <div class="salon-shop-shingle-title-name" style="border: none;">
                <p>店舗位置</p>
            </div>
        </div>
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