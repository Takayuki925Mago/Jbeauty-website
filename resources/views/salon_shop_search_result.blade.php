@extends('layout.common')

@include('layout.header')
@section('top')
    <div class="news_wrapper">
        <div class="professional_search">
            <h1>Salon & Shop Search</h1>
            <p>You can find new and previously published information here.</p>    
        </div>
    </div>
    <div class="professional_search_body">
        <h1>Search</h1>
    </div>
    {!! Form::open(['url' => 'search', 'method' => 'get']) !!}
    <div class="form-floating mb-3"  style="width: 70%; margin: 2rem auto;">
        <!-- {!! Form::label('text') !!}
        {!! Form::text('shop_salon_search' ,'', ['class' => 'form-control', 'placeholder' => '指定なし'] ) !!} -->
        <input type="text" class="form-control" name="shop_salon_search" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Salon & Shop Search</label>
    </div>
    <div class="professional_search_body">
        <h1>Category</h1>
        <div class="body-list topic">
            <ul>
                @foreach ($kinds as $kind)
                <form method="get">
                <li><button type="submit" name="shop_salon_category" value="{{ $kind->name }}" class="btn btn-outline-danger">{{ $kind->name }}</li>
                </form>
                @endforeach
            </ul>
        </div>
    </div>
    {!! Form::close() !!}

    @if(!empty($posts))
    <div class="topic-wrapper">
    <?php $count = 0;?>
    @foreach ($posts as $post)
        <div class="topic-center">
        <a href="{{ route('salon_detail', ['id'=>$post->id]) }}">
            <div class="topic-vertical">
                <div class="topic-outer">
                    <div class="topic-detail-top">
                        <img src="{{ asset($salon->path) }}" width="60%" alt="No image">
                        <div class="topic-detail-list">
                            <p class="topic-detail-list-p-shop shop_list">{{ $post->main_category }}</p>
                        </div>
                    </div>
                </div>
                <p class="body-p2" style='margin: 1rem; font-size: 18px; font-family: Arial; padding: 0;'>{{ $post->salon_name }}</p>
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
    @endif

    @include('layout.footer')

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="./slide.js"></script>

    @endsection