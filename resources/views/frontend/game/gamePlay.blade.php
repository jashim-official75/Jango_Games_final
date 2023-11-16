@extends('layouts.frontend.app')
@section('header')
    <meta property="og:title" content="Play free online games on Jangogames {{ $game->name }} Games">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image"
        @if ($game->thumbnail) content="{{ asset('uploads/Games/' . $game->thumbnail) }}" @else content="{{ $game->image_link }}" @endif />
    <meta name="title" content=" Play free online games on Jangogames {{ $game->name }} Games" />
    <meta name="description"
        content="Play thousands of free online games on Jango Games. Find the best free games you will love to play. Play all your favorite games like puzzle games, word and trivia games, card games, multiplayer games and more." />
    <link rel="canonical" href="{{ url()->current() }}" />
    <title>Play free online games on Jangogames {{ $game->name }} Games</title>
@endsection
@section('frontend_content')
    <!-- ===================================== -->
    <!-- PLAYGROUND PART START -->
    <!-- ===================================== -->
    <section id="playground">
        <div class="container-fluid">
            <div class="row gx-3">

                <!-- left top sidebar -->
                <div class="col-xxl-2 col-xl-2 col-lg-2 left_side">
                    <div class="row gx-3">
                        <div class="square_add">

                        </div>
                        @foreach ($related_games->slice(1, 6) as $related_game)
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <div class="relatedgames sm-hide">
                                    <div class="gameImg gamereset">
                                        <a href="{{ route('gamePlay', $related_game?->Game->slug) }}"
                                            title="{{ $related_game?->Game->name }}">
                                            @if ($related_game?->Game->thumbnail)
                                                <img src="{{ asset('uploads/Games/' . $related_game?->Game->thumbnail) }}"
                                                    alt="{{ $related_game?->Game->name }} - Play Free Best {{ $related_game->category_name }} Online Game on JangoGames.com">
                                            @else
                                                <img src="{{ $related_game?->Game->image_link }}"
                                                    alt="{{ $related_game?->Game->name }} - Play Free Best {{ $related_game->category_name }} Online Game on JangoGames.com">
                                            @endif
                                        </a>
                                        <div class="gameImg_content contentreset">
                                            <a href="{{ route('gamePlay', $related_game?->Game->slug) }}"
                                                title="{{ $related_game?->Game->name }}">{{ $related_game?->Game->name }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!----ads left sidebar--------->
                        <div class="square_add">

                        </div>
                    </div>
                </div>
                <!-- end left sidebar -->

                <!---game play----->
                <div class="col-xxl-8 col-xl-9 col-lg-8 ">
                    <div class="playground spaces">
                        <iframe src="{{ $game->link }}" width="100%" height="100%" scrolling="none" frameborder="0"
                            id="fullScreen"></iframe>
                        <div class="playground_sidepannel sm-hide">
                            <div class="game_name">
                                <a href="{{ route('gamePlay', $game->slug) }}">{{ $game->name }}</a>
                            </div>
                            <div class="icons d-flex">
                                <div class="share_icon">
                                    <a href="#" id="share" title="Share" data-bs-toggle="tooltip"
                                        data-bs-placement="top"><i class="uil uil-share-alt"></i></a>
                                </div>

                                <div class="expand_icon">
                                    <a href="#" id="openScreen" title="Fullscreen" data-bs-toggle="tooltip"
                                        data-bs-placement="top"><i class="uil uil-expand-arrows-alt"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="socail_container sm-hide">
                            <div class="close_icon"><i class="uil uil-times"></i></div>
                            <div class="socail_share">
                                <!-- ShareThis BEGIN -->
                                <div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->
                            </div>
                        </div>
                    </div>
                    <div class="row mt-60">
                        <div class="col-md-12">
                            <div class="add_h sm-hide">

                            </div>
                        </div>
                    </div>
                </div>
                <!---end game play----->

                <!--- start right top sidebar---->
                <div class="col-xxl-2 col-xl-3 col-lg-4 right_side sm-hide">
                    <div class="row gx-3">
                        <div class="square_add">

                        </div>
                        @foreach ($related_games->slice(7, 6) as $related_game)
                            <div class="col-lg-6 col-md-3 col-sm-2 mb-3">
                                <div class="relatedgames sm-hide">
                                    <div class="gameImg gamereset">
                                        <a href="{{ route('gamePlay', $related_game?->Game->slug) }}"
                                            title="{{ $related_game?->Game->name }}">
                                            @if ($related_game?->Game->thumbnail)
                                                <img src="{{ asset('uploads/Games/' . $related_game?->Game->thumbnail) }}"
                                                    alt="{{ $related_game?->Game->name }} - Play Free Best {{ $related_game->category_name }} Online Game on JangoGames.com">
                                            @else
                                                <img src="{{ $related_game?->Game->image_link }}"
                                                    alt="{{ $related_game?->Game->name }} - Play Free Best {{ $related_game->category_name }} Online Game on JangoGames.com">
                                            @endif
                                        </a>
                                        <div class="gameImg_content contentreset">
                                            <a href="{{ route('gamePlay', $related_game?->Game->slug) }}"
                                                title="{{ $related_game?->Game->name }}">{{ $related_game?->Game->name }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="square_add">

                        </div>

                    </div>
                </div>
                <!--- end right top sidebar---->


            </div>
        </div>
    </section>
    <!-- ===================================== -->
    <!-- PLAYGROUND PART END -->
    <!-- ===================================== -->


    <!-- ===================================== -->
    <!-- VIDEO WALTKTHROUGH PART START -->
    <!-- ===================================== -->

    <section class="video_walkthrough sm-hide" >
        <div class="container-fluid">
            <h1 class=" content_title--fullwidth text-left text-light p-3 mb-3"
            style="border-radius:10px 10px 0 0; position:relative;"> <i
                class="fas fa-arrow-circle-right"></i> &nbsp; Video Walkthrough</h1>
            <div class="row gx-2">
                <div class="col-xl-2 col-lg-2 col-md-3">
                    <div class="add_v left_vertical sm-hide">
                    </div>
                </div>

                <div class="col-xl-8 col-lg-8 col-md-12 walkthrough sm-hide">


                    <div id="gamemonetize-video"></div>
                    <script type="text/javascript">
                        window.VIDEO_OPTIONS = {
                            game: "{{ $game->name }}",
                            width: "100%",
                            height: "600px",
                            color: "#6719B6"
                        };
                        (function(a, b, c) {
                            var d = a.getElementsByTagName(b)[0];
                            a.getElementById(c) || (a = a.createElement(b), a.id = c, a.src =
                                "https://api.gamemonetize.com/video.js?v=" + Date.now(), d.parentNode.insertBefore(a, d))
                        })(document, "script", "gamemonetize-video-api");
                    </script>
                </div>

                <div class="col-xl-2 col-lg-2 col-md-2">
                    <div class="add_v right_vertical sm-hide">


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===================================== -->
    <!-- VIDEO WALTKTHROUGH PART END -->
    <!-- ===================================== -->

    <!-- ===================================== -->
    <!--  GAMES CONTENT PART START -->
    <!-- ===================================== -->
            <section id="homepageContent" class="pb-5 sm-hide">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-md-12">
                            <h1 class=" content_title--fullwidth text-left text-light p-3 sm-hide"
                            style="border-radius:10px 10px 0 0; position:relative; "> <i
                                class="fas fa-arrow-circle-right"></i> &nbsp; Game Description</h1>
                            <div class="Content_wrapper pl-5 pt-5">
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="inner_content" id="content">
                                            <main>
                                                <article>
                                                    <h2>{{ $game->name }}</h2>
                                                    <p>
                                                        {!! $game->desc !!}
                                                    </p>
                                                    {{-- </article>
                                                    <h2>Platform</h2>
                                                    <p>Web Browser (desktop and mobile)</p>
                                                </article> --}}
                                                    <div class="game_genre mt-5">
                                                        <div class="game_genre-box"
                                                            id="genreBx">
                                                            <div class="game_genre-box-title">
                                                                <h2>Related Categories & Tags
                                                                </h2>
                                                            </div>
                                                            <div class="game_genre-box-icon">
                                                                <i class="fas fa-chevron-down"
                                                                    id="genreIcon"></i>
                                                            </div>
                                                            <div class="game_genre-items"
                                                                id="genreItem">
                                                                <h3>Categories</h3>
                                                                <ul>
                                                                    @foreach ($game_same_categories as $same_category)
                                                                        <li><a
                                                                                class="genreItem">{{ $same_category->category_name }}</a>
                                                                        </li>
                                                                    @endforeach

                                                                </ul>
                                                                <h3>Tags</h3>
                                                                <ul>
                                                                    @foreach ($game_same_tags as $same_tag)
                                                                        <li><a
                                                                                class="genreItem">{{ $same_tag->tag_name }}</a>
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>

                                                        </div>
                                                    </div>


                                            </main>

                                        </div>

                                    </div>
                                    <div class="col-md-2">
                                        <div class="content_img">
                                            <div class="swiper mySwiper2">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <a
                                                            href="{{ route('gamePlay', $single_game->slug) }}">
                                                            @if ($single_game->thumbnail)
                                                                <img src=""
                                                                    alt="" />
                                                            @else
                                                                <img src="{{ $single_game->image_link }}"
                                                                    alt="" />
                                                            @endif
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-pagination"></div>
                                            </div>
                                        </div>
                                        {{-- <div class="row pt-5">
                                            <div class="col-md-12 col-12">
                                                <div class="add_v-sm">
                                                    <h3>Ads.</h3>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                                {{-- <div class="back_to_game_btn">
                                    <a href="#top" class="back_to_game">Back To Game &nbsp;
                                        <i class="fa fa-chevron-up"></i> </a>
                                </div> --}}
                            </div>

                            <div class="bottom_bar">
                                <div class="bottom_bar-bar"></div>
                                <div class="see_more">
                                    <a class="see_more-btn"><i
                                            class="fas fa-chevron-down"></i> See More </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </section>
    <!-- ===================================== -->
    <!--  GAMES CONTENT PART END -->
    <!-- ===================================== -->


    <!-- ===================================== -->
    <!-- HOME PAGE CONTENT START -->
    <!-- ===================================== -->
    <section id="homepageContent" class="py-5 sm-hide">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class=" content_title--fullwidth text-left">{{ $single_game->name }} - Play Free Online
                        {{ $category->category_name }} Game | &nbsp; <i class="fas fa-arrow-circle-right"></i> &nbsp;
                        Jango Games</h1>
                    <div class="Content_wrapper pl-5 pt-5">
                        <div class="row ">
                            <div class="col-md-10">
                                <div class="inner_content" id="content">

                                    <main>
                                        <article>
                                            <p>
                                                Come and play the best <a
                                                    href="{{ route('categoryGame', $category->category_slug) }}">{{ $category->category_name }}</a>
                                                game. {{ $single_game->name }} is an amazing game, designed with one goal
                                                in mind - to have fun. All types of players will be able to enjoy this game,
                                                whether they are casual gamers or hardcore gamers. We have created a fun
                                                experience for all types of gamers to play this game.

                                            </p>
                                        </article>
                                        <article>
                                            <h2>Features</h2>
                                            <ol>

                                                <li>Easy to play </li>
                                                <li> Perfect for all ages people </li>
                                                <li>Amazing graphics and sound quality</li>
                                            </ol>
                                        </article>
                                        <article>
                                            <h2>Why is it the best game</h2>
                                            <p>
                                                {{ $single_game->name }} is the best<a
                                                    href="{{ route('categoryGame', $category->category_slug) }}">{{ $category->category_name }}</a>
                                                game to play that you can play anytime. With its’ easy and fun gameplay you
                                                can kill your free time without getting bored. There are many more games on
                                                <a href="{{ route('index') }}">Jango games</a> where you can find free
                                                games that you can enjoy in your free time.
                                            </p>
                                        </article>
                                        <article>
                                            <h2>The best games</h2>
                                            <ol>
                                                @foreach ($related_games->take(10) as $game)
                                                    <li><a
                                                            href="{{ route('gamePlay', $game->Game?->slug) }}">{{ $game->Game?->name }}</a>
                                                    </li>
                                                @endforeach
                                            </ol>
                                        </article>
                                        <article>
                                            <h2>Why Jango Games</h2>

                                            <p>
                                                <a href="{{ route('index') }}">Jango games</a> is the best and largest
                                                platform for online games. You don't have to worry about phone space and
                                                downloading. You can play the most popular games online without any hassle
                                                here.
                                            </p>
                                        </article>
                                    </main>

                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="content_img">
                                    <div>
                                        <div>
                                            <div>
                                                <a href="{{ route('gamePlay', $single_game->slug) }}">
                                                    @if ($single_game->thumbnail)
                                                        <img src="" alt="" />
                                                    @else
                                                        <img src="{{ $single_game->image_link }}" alt="" />
                                                    @endif
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="bottom_bar">
                        <div class="bottom_bar-bar"></div>
                        <div class="see_more">
                            <a class="see_more-btn"><i class="fas fa-chevron-down"></i> See More </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- ===================================== -->
    <!-- HOME PAGE CONTENT END -->
    <!-- ===================================== -->

    <script>
// ====================
// GENRE BOX ACTIVATION
// ====================

$(document).ready(function () {
  $("#genreBx").click(function () {
    $("#genreItem").toggleClass("active");
    $("#genreIcon").toggleClass("fa-chevron-up");
  });
});
    </script>

@endsection
