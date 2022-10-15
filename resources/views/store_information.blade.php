@extends('layout.common')

@include('layout.header')
@section('top')

<div class="news_wrapper">
    <div class="professional_search">
        <h1>Service</h1>
        <p>You can find new and previously information here.</p>    
    </div>
</div>

<div style="width: 100%; text-align: center; margin: 2rem auto 1rem auto;">
    <img src="./picture/tenpo.jpeg" width="100%">
    <ul style="display: flex; width: 100%; height: 10rem; margin: 1rem 0 1rem 0;">
        <li><img src="./picture/tenpo.jpeg" width="100%" height="100%" style="padding-right: 1rem;"></li>
        <li><img src="./picture/exterior.jpg" width="100%" height="100%" style="padding-right: 1rem;"></li>
        <li><img src="./picture/tempo2.jpg" width="100%" height="100%" style="padding-right: 1rem;"></li>
        <li><img src="./picture/onesalon.jpg" width="100%" height="100%" style="padding-right: 1rem;"></li>
        <li><img src="./picture/salon_exterior.jpg" width="100%" height="100%" style="padding: 0rem;"></li>
    </ul>
</div>

<div style="margin-top: 4rem;">
    <ul>
        <li>
            <div class="floor_shop" style="border-top: 1px solid #707070;">
                <div>
                    <p style="margin: 0; font-size: 20px; width: 20rem; text-align: left;">Address</p>
                </div>
                <div class="salon_name">
                    <div>
                        <p style="text-align: left;">1-06, J Value Mall, Jalan Utara C, <br>46200 Petaling Jaya, <br>Selangor, Malaysia</p>
                    </div>
                </div>  
            </div>
        </li>
        <li>
            <div class="floor_shop">
                <div>
                    <p style="margin: 0; font-size: 20px; width: 20rem; text-align: left;">Operation Hours</p>
                </div>
                <div class="salon_name">
                    <div>
                        <p style="text-align: left;">9:00-21:00</p>
                    </div>
                </div>        
            </div>
        </li>
    </ul>
</div>

@include('layout.footer')
@endsection