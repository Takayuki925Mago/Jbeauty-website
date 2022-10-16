@extends('layout.common')

@include('layout.header')
@section('top')

<div class="news_wrapper">
    <div class="professional_search">
        <h1>Service</h1>
        <p>You can find new and previously information here.</p>    
    </div>
</div>
<ul>
    <li>
        <div class="floor_shop">
            <div class="salon-logo">
                <img src="">
            </div>
            <div class="salon_name">
                <div>
                    <p>Concierge</p>
                </div>
                <div>
                    <p style="text-align: left;">　Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo co（ダミーテキストです）</p>
                </div>
            </div>  
        </div>
    </li>
    <li>
        <div class="floor_shop">
            <div class="salon-logo">
                <img src="">
            </div>
            <div class="salon_name">
                <div>
                    <p>Concierge</p>
                </div>
                <div>
                    <p style="text-align: left;">　Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo co（ダミーテキストです）</p>
                </div>
            </div>        
        </div>
    </li>
</ul>

@include('layout.footer')
@endsection