@extends('layout.common')
@include('layout.header')
@section('top')
@livewire('navigation-menu')
<div class="salon-shop-shingle-title-category" style="margin: 1rem 1rem 1rem auto;">
    <ul>
        <a href="s-salon-list"><li style="background-color: white;"><button type="button" name="shop_salon_category" class="btn btn-primary">Salon Detail</button></li></a>
        <a href="s-professional-list"><li style="background-color: white;"><button type="button" name="shop_salon_category" class="btn btn-outline-primary">Professional List</button></li></a>
        <a href="s-menu-list"><li style="background-color: white;"><button type="button" name="shop_salon_category" class="btn btn-outline-primary">Menu List</button></li></a>
    </ul>
</div>
@foreach ($salons as $salon)
<a href="{{ route('s_salon_edit_detail', ['id'=>$salon->id]) }}">
<div class="professional-top" style="margin: 1rem auto 1rem auto; padding: 1rem;">
    <div class="salon-shop-shingle-logo" style="margin: 0;">
        <img src="{{ asset($salon->path) }}" width="100px" height="100px">
    </div>
    <div class="salon-shop-shingle-title" style="margin: 0.5rem;">
        <div class="salon-shop-shingle-title-category">
            <ul>
                @foreach ($salon->categories as $category)
                <li style="background-color: white;"><button type="button" name="shop_salon_category" class="btn btn-outline-danger" style="font-size: 10px;">{{ $category->name }}</button></li>
                @endforeach
            </ul>
        </div>
        <div class="salon-shop-shingle-title-name">
            <h3 style="font-size: 16px; padding: 0;">{{ $salon->salon_name }}</h3>
        </div>
    </div>
</div>
</a>
@endforeach
@include('layout.footer')
@endsection