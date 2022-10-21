@extends('layout.common')
@include('layout.header')
@section('top')
<form method="POST" action="{{ route('salon_update', $salon->id) }}" enctype="multipart/form-data">
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
    <div>
        <div class="salon-shop-shingle-logo">
            <img src="{{ asset($salon->path) }}" width="150px" height="150px">
        </div>
        <div class="mb-3">
            <input class="form-control" type="file" id="image" name="path" style="margin: 0.5rem auto 0.5rem auto; width: 80%;">
        </div>
    </div>
    <div class="salon-shop-shingle-title">
        <div class="salon-shop-shingle-title-category">
            <ul>
                @foreach ($salon->categories as $category)
                <li style="background-color: white;"><button type="button" name="shop_salon_category" class="btn btn-outline-danger">{{ $category->name }}</button></li>
                @endforeach
            </ul>
            @foreach ($categories as $category)
                <div class="form-check">

                    @if ($salon->categories->contains('id', $category->id))
                        <input class="form-check-input" name="category_salon[]" type="checkbox" value="{{ $category->id }}" checked>{{ $category->name }}
                    @else
                        <input class="form-check-input" name="category_salon[]" type="checkbox" value="{{ $category->id }}">{{ $category->name }}
                    @endif
                </div>
            @endforeach
        </div>
        <div class="salon-shop-shingle-title-name">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Main Category</label>
                <input type="text" name="main_category" class="form-control" value="{{ $salon->main_category }}" id="exampleFormControlInput1" placeholder="Category">
            </div>
        </div>
        <div class="salon-shop-shingle-title-name">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Salon Name</label>
                <input type="text" name="salon_name" class="form-control" value="{{ $salon->salon_name }}" id="exampleFormControlInput1" placeholder="No name">
            </div>
        </div>
    </div>
</div>
<div class="salon-shop-shingle-detail-wrap">
    <div class="salon-shop-shingle-detail-image">
        <div class="salon-shop-shingle-detail-image-1" style="margin-bottom: 0;">
            <img src="{{ asset($salon->image_path) }}" height="100%">
        </div>
        <div class="mb-3">
            <input class="form-control" type="file" id="image" name="main_image" style="margin: 2rem auto 0.5rem auto; width: 80%;">
        </div>
        <div class="topic-wrapper" style="margin: 2rem 2rem 2rem 0;">
        @foreach ($salon->images as $image)
            <div class="topic-center" style="margin: 0.3rem 0.3rem 0.3rem 0;">
                <img src="{{ asset($image->image_path) }}" width="200px" alt="no image">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="delete_images[]" value="{{ $image->id }}" multiple>{{ $image->id }}
                </div>
            </div>
        @endforeach
       
        <input class="btn btn-primary" type="submit" value="選択した写真を削除" style="margin: 2rem auto 0.5rem auto; float: right;">
        </div>
        <div class="mb-3">
            <!-- <label for="formFile" class="form-label">Main Imaga Uploader</label> -->
            <input class="form-control" type="file" id="image" name="sub_image[]" style="margin: 2rem auto 0.5rem auto; width: 60%;" multiple>
        </div>
    </div>
    <div class="salon-shop-shingle-detail-info-wrap">
        <div class="salon-shop-shingle-detail-info">
            <div class="salon-shop-shingle-detail-info">
                <label for="exampleFormControlTextarea1" class="form-label">Salon Information</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name='salon_info' rows="20">{{ $salon->salon_info }}</textarea>
            </div>
            <div class="salon-shop-shingle-detail-other">
                <label for="exampleFormControlTextarea1" class="form-label">Salon Other</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name='salon_other' rows="20">{{ $salon->salon_other }}</textarea>
            </div>
        </div>
        <ul class="salon-shop-share">
            <li class="sns"><a target="_blank" href="{{ $salon->salon_instagram }}"><img src="{{ asset('picture/sns/instagram.png') }}" width="75%"></a></li>
            <li class="sns"><a target="_blank" href="{{ $salon->salon_twitter }}"><img src="{{ asset('picture/sns/twitter.png') }}" width="75%"></a></li>
            <li class="sns"><a target="_blank" href="{{ $salon->salon_facebook }}"><img src="{{ asset('picture/sns/facebook.png') }}" width="75%"></a></li>
            <li class="sns"><a target="_blank" href="{{ $salon->salon_tiktok }}"><img src="{{ asset('picture/sns/tiktok.png') }}" width="75%"></a></li>
            <li class="sns"><a target="_blank" href="{{ $salon->salon_youtube }}"><img src="{{ asset('picture/sns/youtube.png') }}" width="75%"></a></li>
        </ul>
        <div class="salon-shop-shingle-detail-other" style="padding: 0.5rem; margin-top: 0.5rem;">
            <div>
                <label for="exampleFormControlInput1" class="form-label">Instagram</label>
                <input type="text" name="instagram" class="form-control" value="{{ $salon->salon_instagram }}" id="exampleFormControlInput1" placeholder="URL">
            </div>
        </div>
        <div class="salon-shop-shingle-detail-other" style="padding: 0.5rem; margin-top: 0.5rem;">
            <div>
                <label for="exampleFormControlInput1" class="form-label">Facebook</label>
                <input type="text" name="facebook" class="form-control" value="{{ $salon->salon_facebook }}" id="exampleFormControlInput1" placeholder="URL">
            </div>
        </div>
        <div class="salon-shop-shingle-detail-other" style="padding: 0.5rem; margin-top: 0.5rem;">
            <div>
                <label for="exampleFormControlInput1" class="form-label">Twitter</label>
                <input type="text" name="twitter" class="form-control" value="{{ $salon->salon_twitter }}" id="exampleFormControlInput1" placeholder="URL">
            </div>
        </div>
        <div class="salon-shop-shingle-detail-other" style="padding: 0.5rem; margin-top: 0.5rem;">
            <div>
                <label for="exampleFormControlInput1" class="form-label">Tiktok</label>
                <input type="text" name="tiktok" class="form-control" value="{{ $salon->salon_tiktok }}" id="exampleFormControlInput1" placeholder="URL">
            </div>
        </div>
        <div class="salon-shop-shingle-detail-other" style="padding: 0.5rem; margin-top: 0.5rem;">
            <div>
                <label for="exampleFormControlInput1" class="form-label">Youtube</label>
                <input type="text" name="youtube" class="form-control" value="{{ $salon->salon_youtube }}" id="exampleFormControlInput1" placeholder="URL">
            </div>
        </div>
    </div>
</div>
<input class="btn btn-primary" type="submit" value="更新" style="margin: 1rem 0; float: right;">
</form>
@include('layout.footer')
@endsection