@extends('layout.common')

@include('layout.header')
@section('top')
    <div class="news_wrapper">
        <div class="professional_search">
            <h1>News</h1>
            <p>You can find new and previously published information here.</p>    
        </div>
    </div>
    {!! Form::open(['url' => 'menu_search', 'method' => 'get']) !!}
    <div class="professional_search_body">
        <h1>Category</h1>
        <div class="body-list topic">
            <ul>
                @foreach ($kinds as $kind)
                <li><button type="submit" name="menu_category" value="{{ $kind->name }}" class="btn btn-outline-danger">{{ $kind->name }}</button></li>
                @endforeach
            </ul>
        </div>
    </div>
    <!-- {!! Form::submit('検索', ['class' => 'btn btn-primary btn-block']) !!} -->
    {!! Form::close() !!}

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
    @include('layout.footer')

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="./slide.js"></script>
    @endsection