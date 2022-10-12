@extends('layout.common')
@include('layout.header')
@section('top')
@foreach ($menus as $menu)
<a href="{{ route('s_menu_edit_detail', ['id'=>$menu->id]) }}">
<div class="professional-top" style="margin: 1rem auto 1rem auto; padding: 1rem;">
    <div class="salon-shop-shingle-logo" style="margin: 0;">
        <img src="{{ asset('picture/logo.png') }}" width="100px" height="100px">
    </div>
    <div class="salon-shop-shingle-title" style="margin: 0.5rem;">
        <div class="salon-shop-shingle-title-category">
            <ul>
                @foreach ($menu->categories as $category)
                <li style="background-color: white;"><button type="button" name="shop_salon_category" class="btn btn-outline-danger" style="font-size: 10px;">{{ $category->name }}</button></li>
                @endforeach
            </ul>
        </div>
        <div class="salon-shop-shingle-title-name">
            <h3 style="font-size: 16px; padding: 0;">{{ $menu->name }}</h3>
        </div>
        <div style="display: flex;">
            <div class="salon-shop-shingle-title-name" style="border: none;">
                <p style="margin: 0; padding: 0;">{{ $menu->salon->salon_name }}</p>
            </div>
        </div>
    </div>
</div>
</a>
@endforeach
@include('layout.footer')
@endsection