@extends('layout.common')

@include('layout.header')
@section('top')
    <div class="news_wrapper">
        <div class="professional_search">
            <h1>Menu Search</h1>
            <p>You can find new and previously published information here.</p>    
        </div>
    </div>
    <div class="professional_search_body">
        <h1>Search</h1>
    </div>
    {!! Form::open(['url' => 'menu_search', 'method' => 'get']) !!}
    <div class="form-floating mb-3"  style="width: 70%; margin: 2rem auto;">
        <!-- {!! Form::label('text') !!}
        {!! Form::text('shop_salon_search' ,'', ['class' => 'form-control', 'placeholder' => '指定なし'] ) !!} -->
        <input type="text" class="form-control" name="menu_search" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Menu Search</label>
    </div>
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

    <div class="topic-wrapper">
    <?php $count = 0;?>
    @foreach ($menus as $menu)
        <div class="topic-center">
        <a href="{{ route('menu_detail', ['id'=>$menu->id]) }}">
            <div class="topic-vertical-menu">
                <div class="topic-outer-menu">
                    <div class="topic-detail-top">
                    <img src="{{ asset($menu->path) }}" width="100%" height="100%" alt="No image" style="object-fit:cover;">
                        <div class="topic-detail-list">
                            @foreach ($menu->categories as $category)
                            <p class="topic-detail-list-p-shop shop_list">{{ $category->name }}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="topic-outer" style="margin: 0;">
                    <p class="body-p" style='margin: 0; width: 20rem; text-align: left; font-size: 20px; font-family: Arial; overflow-wrap: normal;'>{{ $menu->name }}</p>
                    <p class="body-p2" style="margin: 0; text-align: left; padding: 1rem; font-size: 16px; font-family: Arial; color: gray;">{{ $menu->salon->salon_name }}</p>
                </div>
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
    <!-- <div id="pro">
        ここにcontainer_topic.phpが読み込まれる
    </div> -->
    @include('layout.footer')

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="./slide.js"></script>
    @endsection