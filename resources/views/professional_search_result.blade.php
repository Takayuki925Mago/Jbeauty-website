@extends('layout.common')

@include('layout.header')
@section('top')
    <div class="news_wrapper">
        <div class="professional_search">
            <h1>Professional Search</h1>
            <p>I am a registered professional. Only a few are here.</p>    
        </div>
    </div>
    <div class="professional_search_body">
        <h1>Search</h1>
    </div>
    {!! Form::open(['url' => 'professional_search', 'method' => 'get']) !!}
    <div class="form-floating mb-3"  style="width: 70%; margin: 2rem auto;">
        <!-- {!! Form::label('text') !!}
        {!! Form::text('shop_salon_search' ,'', ['class' => 'form-control', 'placeholder' => '指定なし'] ) !!} -->
        <input type="text" class="form-control" name="professional_search" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Professional Search</label>
    </div>
    <div class="professional_search_body">
        <h1>Category</h1>
        <div class="body-list topic">
            <ul>
                @foreach ($kinds as $kind)
                <li><button type="submit" name="professional_category" value="{{ $kind->name }}" class="btn btn-outline-danger">{{ $kind->name }}</button></li>
                @endforeach
            </ul>
        </div>
    </div>
    <!-- {!! Form::submit('検索', ['class' => 'btn btn-primary btn-block']) !!} -->
    {!! Form::close() !!}

    <div class="topic-wrapper">
    <?php $count = 0;?>
    @foreach ($posts as $professional)
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
        <?php elseif($answer == 2) : ?>
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
        <?php endif; ?>
    </div>
    <!-- <div id="pro">
        ここにcontainer_topic.phpが読み込まれる
    </div> -->
    @include('layout.footer')

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="./slide.js"></script>
    @endsection