@extends('layout.common')
@include('layout.header')
@section('top')
@extends('layout.common')

@include('layout.header')
@section('top')
<form method="POST" action="{{ route('menu_update', $menu->id) }}" enctype="multipart/form-data">
{{ csrf_field() }}
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
        <img src="{{ asset('picture/logo.png') }}" width="150px" height="150px">
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
                <p style="margin: 0;">{{ $menu->salon->salon_name }}</p>
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
            <img src="{{ asset($menu->path) }}" width="100%">
        </div>
        <div class="mb-3">
            <!-- <label for="formFile" class="form-label">Main Imaga Uploader</label> -->
            <input class="form-control" type="file" id="image" name="main_image" style="margin: 1rem; width: 80%;">
        </div>
        <div class="salon-shop-shingle-detail-image-2"><img src="{{ asset('picture/logo.png') }}"></div>
    </div>
    <div class="salon-shop-shingle-detail-info-wrap">
        <div class="salon-shop-shingle-detail-info">
            <p style="padding: 2rem; font-size: 16px; color:#070707; text-align: justify; text-justify: inter-ideograph;">{!! nl2br(e($menu->menu_detail)) !!}</p>
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
<input class="btn btn-primary" type="submit" value="更新" style="margin: 1rem 0; float: right;">
</form>
@include('layout.footer')
@endsection
@include('layout.footer')
@endsection