@extends('layouts.frontend.app')
@section('header')
    <meta property="og:title" content="Play thousands of free online games on Jango Games">
    <meta property="og:description"
        content="Play thousands of free online games on Jango Games. Find the best free games you will love to play. Play all your favorite games like puzzle games, word and trivia games, card games, multiplayer games and more.">
    <meta property="og:image" content="{{ asset('assets/frontend/images/logo/jango-games-logo.png') }}" />
    <meta property="og:url" content="https://jangogames.com/">
    <meta name="title" content=" Play thousands of free online games on Jango Games" />
    <meta name="description"
        content="Play thousands of free online games on Jango Games. Find the best free games you will love to play. Play all your favorite games like puzzle games, word and trivia games, card games, multiplayer games and more.">

    <meta name="keywords"
        content="Play Free Online Games, Jango Games, Gaming Experience, Action-Packed Games, Puzzle-Based Games, Multiplayer Games, free online games,for free online games,play for free online games,free online games to play,the best free online games, play to free online games, free online games no downloads, free online games best, no download free online games, free online games multiplayer, free online games shooting, free online games on pc, free online games to play with friends, free online games pc, free online games for pc, free online games 2 player, free online games escape, free online games math, minecraft for free online games, free online games arcade" />

    <link rel="canonical" href="https://jangogames.com" />
    <title>Jango Games: Play Games Online</title>
@endsection
@section('frontend_content')
    <!-- ===================================== -->
    <!-- PRELOADER -->
    <!-- ===================================== -->
    {{-- <div id="preloader">
        <div class="preloader_content">
            <div class="animatate_container">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <div id="preloader" onload="preload()"> --}}
        {{-- <div class="preloader_content">
            <div class="animatate_container">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div></div> --}}
    <!-- ===================================== -->
    <!-- PRELOADER -->
    <!-- ===================================== -->
    <!-- ===================================== -->
    <!-- BEST GAMES SLIDER START -->
    <!-- ===================================== -->

    <section id="best_games-slider" class="mt-80">
        <div class="container-fluid">
            <div class="row gx-2">
                <div class="col-lg-6 col-md-12">
                    <div class="bestgame_video ">
                        <div class="best-gameVdo owl-carousel owl-theme">
                            @foreach ($left_banners as $banner)
                                <div class="vdoBx">
                                    <div class="vdoBx__imgBx">
                                        <a href="{{ route('gamePlay', $banner->slug) }}">
                                            <img src="{{ asset('uploads/banner/' . $banner->banner_image) }}"data-bs-toggle="tooltip"
                                                data-bs-placement="bottom" alt="{{ $banner->name }}">
                                        </a>

                                    </div>
                                    <div class="vdoBx__content">
                                        <div class="game_Content">
                                            <div class="game_name">
                                                <a href="#" title="Ubisoft All Star Blast" data-bs-toggle="tooltip"
                                                    data-bs-placement="top">{{ $banner->name }}</a>
                                            </div>
                                            <div class="stars">
                                                <lord-icon src="https://cdn.lordicon.com/surjmvno.json" trigger="loop"
                                                    delay="1000" style="width:30px;height:30px">
                                                </lord-icon>
                                                <lord-icon src="https://cdn.lordicon.com/surjmvno.json" trigger="loop"
                                                    delay="1000" style="width:30px;height:30px">
                                                </lord-icon>
                                                <lord-icon src="https://cdn.lordicon.com/surjmvno.json" trigger="loop"
                                                    delay="1000" style="width:30px;height:30px">
                                                </lord-icon>
                                                <lord-icon src="https://cdn.lordicon.com/surjmvno.json" trigger="loop"
                                                    delay="1000" style="width:30px;height:30px">
                                                </lord-icon>


                                                </lord-icon>
                                            </div>
                                            <div class="reviews">
                                                @if($banner->review)
                                                <span>{{ $banner->review }}+ Reviews</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="gamePlay">
                                            <a href="{{ $banner->video_url }}" class="glightbox">
                                                <div class="play_icon" title="Video Play" data-bs-toggle="tooltip"
                                                    data-bs-placement="right">

                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-lg-6  col-md-12">
                    <div class="bestgame__images ">
                        <div class="best-gameImg owl-carousel owl-theme">
                            @foreach ($right_banners as $banner)
                                <div class="imgBx">
                                    <a href="{{ route('gamePlay', $banner->slug) }}">
                                        <img src="{{ asset('uploads/banner/' . $banner->banner_image) }}"
                                            alt="{{ $banner->name }}">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================================== -->
    <!-- BEST GAMES SLIDER END -->
    <!-- ===================================== -->




    <!-- ===================================== -->
    <!-- FEATURED GAME START -->
    <!-- ===================================== -->
    <section id="featured_game" class="pt-5">
        <div class="section_title text-center">
            <div class="section_title-important">
                <div class="section_title-icon">
                    <lord-icon src="https://cdn.lordicon.com/ryyjawhw.json" trigger="loop" delay="500"
                        colors="primary:#5700ae" style="width:80px;height:50px">
                    </lord-icon>
                </div>
                <div class="section_title-heading">
                    <h1>Featured</h1>
                </div>
            </div>
            <div class="section_title-text text-center sm-hide">

                <p>We've got a great selection of featured games for you to choose from. Our featured games are perfect for a long weekend of gaming. Play free games online in your browser without downloading. </p>
            </div>
        </div>
        <div class="container-fluid">
        <div class="view_more text-right">
                <a href="{{ route('featured.games') }}" class="view-more-button text-dark"
                    data-bs-toggle="tooltip" data-bs-placement="top" title="View More Games">View More</a>
                <lord-icon src="https://cdn.lordicon.com/iifryyua.json" trigger="loop" colors="primary:#5700ae"
                    style="width:42px;height:32px">
                </lord-icon>
            </div>
            <div class="bar"></div>
            <div class="featured_game py-5">
                <div class="featured_game-wrapper owl-carousel owl-theme">
                    @foreach ($featured_games as $featured)
                        <div class="roundCard">
                            <a href="{{ route('gamePlay', $featured->slug) }}">
                                <div class="gameBx">
                                    @if ($featured->thumbnail)
                                        <img src="{{ asset('uploads/Games/' . $featured->thumbnail) }}"
                                            alt="{{ $featured->name }} - Play Free Best {{ $featured->gameCategory?->category_name }} Online Game on JangoGames.com"
                                            data-bs-toggle="tooltip" data-bs-placement="top">
                                    @else
                                        <img src="{{ $featured->image_link }}"
                                            alt="{{ $featured->name }} - Play Free Best {{ $featured->gameCategory?->category_name }} Online Game on JangoGames.com"
                                            data-bs-toggle="tooltip" data-bs-placement="top">
                                    @endif
                                </div>
                            </a>
                            <div class="game_content">
                                <a href="{{ route('gamePlay', $featured->slug) }}" title="{{ $featured->name }}"
                                    data-bs-toggle="tooltip" data-bs-placement="bottom">{{ strip_tags(Str::limit($featured->name, 16)) }}</a>
                            </div></a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </section>
    <!-- ===================================== -->
    <!-- FEATURED GAME END -->
    <!-- ===================================== -->

    <!-- ===================================== -->
    <!--RECOMENDED GAMES SLIDER START -->
    <!-- ===================================== -->
{{-- 
    <section id="game_slider" class="pt-5">
        <div class="section_title text-center">
            <div class="section_title-important">
                <div class="section_title-icon">
                    <lord-icon src="https://cdn.lordicon.com/wurbjznp.json" trigger="loop" delay="1000"
                        colors="primary:#5700ae" style="width:80px;height:50px">
                    </lord-icon>
                </div>
                <div class="section_title-heading">
                    <h1>Recommended for you</h1>
                </div>
            </div>
            <div class="section_title-text text-center">
                <p> Check out these free online games on Jango Games! In addition to multiplayer games, we also offer io
                    games, racing games, shooting games, and more. Besides dress-up and makeover games, we have online
                    games for girls in addition. It's easy to play! Just click!y</p>
            </div>
        </div>
        <div class="container-fluid">
            <div class="bar"></div>
            <div class="game pt-4">

                <div class=" game-slider owl-carousel owl-theme">
                    @foreach ($recommended_games as $recommended_game)
                        <div class="gameBx">
                            <a href="{{ route('gamePlay', $recommended_game->slug) }}" title="{{ $recommended_game->name }}" data-bs-toggle="tooltip"
                                data-bs-placement="bottom">
                                @if ($recommended_game->thumbnail)
                                    <img src="{{ asset('uploads/Games/' . $recommended_game->thumbnail) }}"
                                        alt="{{ $recommended_game->name }} - Play Free Best {{ $recommended_game->gameCategory?->category_name }} Online Game on JangoGames.com">
                                @else
                                    <img src="{{ $recommended_game->image_link }}"
                                        alt="{{ $recommended_game->name }} - Play Free Best {{ $recommended_game->gameCategory?->category_name }} Online Game on JangoGames.com">
                                @endif
                            </a>
                        </div>
                    @endforeach
                </div>
                {{-- <div class="swiper-button-next"></div>
                <!-- <div class="swiper-button-prev"></div> --> --}}
            {{-- </div>
        </div> --}}
    {{-- </section> --}}

    <!-- ===================================== -->
    <!--RECOMENDED GAMES SLIDER END -->
    <!-- ===================================== -->

    <!-- ===================================== -->
    <!--BEST GAMES SLIDER START -->
    <!-- ===================================== -->

    {{-- <section id="game_slider" class="pt-4">
        <div class="section_title text-center">
            <div class="section_title-important">
                <lord-icon src="https://cdn.lordicon.com/rjzlnunf.json" trigger="loop" delay="500"
                    colors="primary:#5700ae,secondary:#8c79ff" style="width:70px;height:70px">
                </lord-icon>
                <div class="section_title-heading">
                    <h1>Best Games</h1>
                </div>
            </div>
            <div class="section_title-text text-center">
                <p>Play Best free online games on Jango Games! For you to play, we've got action games, adventure games,
                    arcade games, Io games, multiplayer games, puzzle games, racing games, shooting games, and sports
                    games. As well as girls’ games, we have multiplayer online games you can play with your friends.</p>
            </div>
        </div>
        <div class="container-fluid">
            <div class="view_more text-right">
                <a href="{{ route('best.games') }}" class="view-more-button text-dark" data-bs-toggle="tooltip"
                    data-bs-placement="top" title="Viw More Games">View More</a>
                <lord-icon src="https://cdn.lordicon.com/iifryyua.json" trigger="loop" colors="primary:#5700ae"
                    style="width:42px;height:32px">
                </lord-icon>
            </div>
            <div class="bar "></div>
            <div class="swiper mySwiper game pt-4">

                <div class="swiper-wrapper game-wrapper">
                    @foreach ($best_games as $best_game)
                        <div class="swiper-slide gameCard">
                            <a href="{{ route('gamePlay', $best_game->slug) }}" title="{{ $best_game->name }}"
                                data-bs-toggle="tooltip" data-bs-placement="bottom">
                                @if ($best_game->thumbnail)
                                    <img src="{{ asset('uploads/Games/' . $best_game->thumbnail) }}"
                                        alt="{{ $best_game->name }} - Play Free Best {{ $best_game->c?->category_name }} Online Game on JangoGames.com">
                                @else
                                    <img src="{{ $best_game->image_link }}"
                                        alt="{{ $best_game->name }} - Play Free Best {{ $best_game->gameCategory?->category_name }} Online Game on JangoGames.com">
                                @endif
                            </a>
                            <div class="gameCard_bottom">
                                <a href="{{ route('gamePlay', $best_game->slug) }}">
                                    <div class="gameCard_bottom_img">
                                        @if ($best_game->thumbnail)
                                            <img src="{{ asset('uploads/Games/' . $best_game->thumbnail) }}"
                                                alt="{{ $best_game->name }} - Play Free Best {{ $best_game->gameCategory?->category_name }} Online Game on JangoGames.com">
                                        @else
                                            <img src="{{ $best_game->image_link }}"
                                                aalt="{{ $best_game->name }} - Play Free Best {{ $best_game->gameCategory?->category_name }} Online Game on JangoGames.com">
                                        @endif
                                    </div>
                                </a>
                                <div class="gameCard_bottom_name">
                                    <a href="{{ route('gamePlay', $best_game->slug) }}" title="Zombie Clash 3D"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom">{{ $best_game->name }}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-next"></div>
                <!-- <div class="swiper-button-prev"></div> -->
            </div>
        </div>
    </section> --}}

    <!-- ===================================== -->
    <!--BEST GAMES SLIDER END -->
    <!-- ===================================== -->

    <!-- ===================================== -->
    <!--ACTION GAMES SLIDER START -->
    <!-- ===================================== -->
    {{-- <section id="action_games" class="pt-5">
        <div class="section_title text-center">
            <div class="section_title-important">
                <div class="section_title-icon">
                    <lord-icon src="https://cdn.lordicon.com/rqsvgwdj.json" trigger="loop" delay="500"
                        colors="primary:#5700ae,secondary:#8c79ff" style="width:80px;height:70px">
                    </lord-icon>
                </div>
                <div class="section_title-heading">
                    <h1>{{ $action_category->title }}</h1>
                </div>
            </div>
            <div class="section_title-text text-center">
                <p>{{ $action_category->sub_title }} </p>
            </div>
        </div>
        <div class="container-fluid">
            <div class="view_more text-right">
                <a href="{{ route('categoryGame', $action_category->slug) }}" class="view-more-button text-dark"
                    data-bs-toggle="tooltip" data-bs-placement="top" title="Viw More Games">View More</a>
                <lord-icon src="https://cdn.lordicon.com/iifryyua.json" trigger="loop" colors="primary:#5700ae"
                    style="width:42px;height:32px">
                </lord-icon>
            </div>
            <div class="bar mb-4"></div>
            <div class="row ">
                @foreach ($action_categories->take(36) as $action)
                    <div class="col-xl-1 col-lg-2 col-md-3 col-4">
                        <div class="actiongames">
                            <div class="action__card">
                                <div class="action__card-img">
                                    <a href="{{ route('gamePlay', $action->Game?->slug) }}"
                                        title="{{ $action->Game?->name }}" data-bs-toggle="tooltip"
                                        data-bs-placement="top">
                                        @if ($action?->Game->thumbnail)
                                            <img src="{{ asset('uploads/Games/' . $action?->Game->thumbnail) }}"
                                                alt="{{ $action->Game?->name }} - Play Free Best {{ $action->category_name }} Online Game on JangoGames.com"
                                                class="img-fluid">
                                        @else
                                            <img src="{{ $action?->Game->image_link }}"
                                                alt="{{ $action->Game?->name }} - Play Free Best {{ $action->category_name }} Online Game on JangoGames.com"
                                                class="img-fluid">
                                        @endif

                                    </a>
                                </div>
                                <div class="action__card-bottom">
                                    <div class="game_name">
                                        <a href="{{ route('gamePlay', $action->Game?->slug) }}"
                                            title="{{ $action->Game?->name }}" data-bs-toggle="tooltip"
                                            data-bs-placement="top">{{ strip_tags(Str::limit($action->Game?->name, 20)) }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section> --}}
    <!-- ===================================== -->
    <!--ACTION GAMES SLIDER END -->
    <!-- ===================================== -->

    <!-- COMMON -->
    <!-- ===================================== -->
    <!--ADVENTURE GAMES SLIDER START -->
    <!-- ===================================== -->

    {{-- <section id="game_slider" class="pt-4">
        <div class="section_title text-center">
            <div class="section_title-important">
                <div class="section_title-icon">
                    <lord-icon src="https://cdn.lordicon.com/ihiyrlio.json" trigger="loop" delay="500"
                        colors="primary:#5700ae,secondary:#8c79ff" style="width:80px;height:80px">
                    </lord-icon>
                </div>
                <div class="section_title-heading">
                    <h1>Adventure</h1>
                </div>
            </div>
            <div class="section_title-text text-center">
                <p>Our collection of adventure games includes some exclusive games with exclusive features & ideas for
                    you. During those online adventure games, you will enjoy a different world. Start the free online
                    adventure games to enjoy each adventure game with completely different and unique features.</p>
            </div>
        </div>
        <div class="container-fluid">
            <div class="view_more text-right">
                <a href="{{ route('categoryGame', $adventure_category->slug) }}" class="view-more-button text-dark"
                    data-bs-toggle="tooltip" data-bs-placement="top" title="Viw More Games">View More</a>
                <lord-icon src="https://cdn.lordicon.com/iifryyua.json" trigger="loop" colors="primary:#5700ae"
                    style="width:42px;height:32px">
                </lord-icon>
            </div>
            <div class="bar "></div>
            <div class="swiper mySwiper game pt-4">

                <div class="swiper-wrapper game-wrapper">
                    @foreach ($adventure_categories as $adventure)
                        <div class="swiper-slide gameCard">
                            <a href="{{ route('gamePlay', $adventure->Game?->slug) }}" title="Zombie Clash 3D"
                                data-bs-toggle="tooltip" data-bs-placement="bottom">
                                @if ($adventure?->Game?->thumbnail)
                                    <img src="{{ asset('uploads/Games/' . $adventure?->Game?->thumbnail) }}"
                                        alt="{{ $adventure->Game?->name }} - Play Free Best {{ $adventure->category_name }} Online Game on JangoGames.com">
                                @else
                                    <img src="{{ $adventure?->Game->image_link }}"
                                        alt="{{ $adventure->Game?->name }} - Play Free Best {{ $adventure->category_name }} Online Game on JangoGames.com">
                                @endif
                            </a>
                            <div class="gameCard_bottom">
                                <div class="gameCard_bottom_img">
                                    @if ($adventure?->Game?->thumbnail)
                                        <img src="{{ asset('uploads/Games/' . $adventure?->Game?->thumbnail) }}"
                                            alt="{{ $adventure->Game?->name }} - Play Free Best {{ $adventure->category_name }} Online Game on JangoGames.com">
                                    @else
                                        <img src="{{ $adventure?->Game->image_link }}"
                                            alt="{{ $adventure->Game?->name }} - Play Free Best {{ $adventure->category_name }} Online Game on JangoGames.com">
                                    @endif
                                    <div class="gameCard_bottom_name">
                                        <a href="{{ route('gamePlay', $adventure->Game?->slug) }}"
                                            title="Zombie Clash 3D" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom">{{ $adventure->Game?->name }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-next"></div>
                <!-- <div class="swiper-button-prev"></div> -->
            </div>
        </div>
    </section> --}}

    <!-- ===================================== -->
    <!--ADVENTURE GAMES SLIDER END -->
    <!-- ===================================== -->

    <!-- ===================================== -->
    <!--SPORTS GAMES SLIDER START -->
    <!-- ===================================== -->

    {{-- <section id="game_slider" class="pt-5">
        <div class="section_title text-center">
            <div class="section_title-important">
                <lord-icon src="https://cdn.lordicon.com/fvkdonkw.json" trigger="loop" delay="500"
                    colors="primary:#5700ae,secondary:#7c89ff" style="width:80px;height:70px">
                </lord-icon>
                <div class="section_title-heading">
                    <h1>Sports</h1>
                </div>
            </div>
            <div class="section_title-text text-center">
                <p>Explore the latest free online sports games, from soccer to boxing to basketball. There are extreme
                    sports and combat sports games, in addition to a range of ball games. Find a great sporting title
                    and get your mind in the game!</p>
            </div>
        </div>
        <div class="container-fluid">
            <div class="view_more text-right">
                <a href="{{ route('categoryGame', $sports_category->slug) }}" class="view-more-button text-dark"
                    data-bs-toggle="tooltip" data-bs-placement="top" title="Viw More Games">View More</a>
                <lord-icon src="https://cdn.lordicon.com/iifryyua.json" trigger="loop" colors="primary:#5700ae"
                    style="width:42px;height:32px">
                </lord-icon>
            </div>
            <div class="bar "></div>
            <div class="swiper mySwiper game pt-4">

                <div class="swiper-wrapper game-wrapper">

                    @foreach ($sports_categories as $sports)
                        <div class="swiper-slide gameCard">
                            <a href="{{ route('gamePlay', $sports->Game?->slug) }}" title="{{ $sports->Game?->name }}"
                                data-bs-toggle="tooltip" data-bs-placement="bottom">
                                @if ($sports?->Game?->thumbnail)
                                    <img src="{{ asset('uploads/Games/' . $sports?->Game?->thumbnail) }}"
                                        alt="{{ $sports->Game?->name }} - Play Free Best {{ $sports->category_name }} Online Game on JangoGames.com"
                                        class="img-fluid">
                                @else
                                    <img src="{{ $sports?->Game->image_link }}"
                                        alt="{{ $sports->Game?->name }} - Play Free Best {{ $sports->category_name }} Online Game on JangoGames.com"
                                        class="img-fluid">
                                @endif
                            </a>
                            <div class="gameCard_bottom">
                                <div class="gameCard_bottom_img">
                                    @if ($sports?->Game?->thumbnail)
                                        <img src="{{ asset('uploads/Games/' . $sports?->Game?->thumbnail) }}"
                                            alt="{{ $sports->Game?->name }} - Play Free Best {{ $sports->category_name }} Online Game on JangoGames.com">
                                    @else
                                        <img src="{{ $sports?->Game->image_link }}"
                                            alt="{{ $sports->Game?->name }} - Play Free Best {{ $sports->category_name }} Online Game on JangoGames.com">
                                    @endif
                                </div>
                                <div class="gameCard_bottom_name">
                                    <a href="{{ route('gamePlay', $sports->Game?->slug) }}"
                                        title="{{ $sports->Game?->name }}" data-bs-toggle="tooltip"
                                        data-bs-placement="bottom">{{ strip_tags(Str::limit($sports->Game?->name, 16)) }}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-next"></div>
                <!-- <div class="swiper-button-prev"></div> -->
            </div>
        </div>
    </section> --}}

    <!-- ===================================== -->
    <!--SPORTS GAMES SLIDER END -->
    <!-- ===================================== -->

    <!-- ===================================== -->
    <!--ARCADE GAMES SLIDER START -->
    <!-- ===================================== -->
    {{-- <section id="action_games" class="pt-5">
        <div class="section_title text-center">
            <div class="section_title-important">
                <div class="section_title-icon">
                    <lord-icon src="https://cdn.lordicon.com/vaeagfzc.json" trigger="loop" delay="500"
                        colors="primary:#5700ae,secondary:#8c79ff" style="width:70px;height:60px">
                    </lord-icon>
                </div>
                <div class="section_title-heading">
                    <h1>Arcade</h1>
                </div>
            </div>
            <div class="section_title-text text-center">
                <p>Arcade is the best place on the net to play arcade games online. The arcade hall opens with a theme
                    and closes when you win, at no charge to you.</p>
            </div>
        </div>
        <div class="container-fluid">
            <div class="view_more text-right">
                <a href="{{ route('categoryGame', $arcade_category->slug) }}" class="view-more-button text-dark"
                    data-bs-toggle="tooltip" data-bs-placement="top" title="Viw More Games">View More</a>
                <lord-icon src="https://cdn.lordicon.com/iifryyua.json" trigger="loop" colors="primary:#5700ae"
                    style="width:42px;height:32px">
                </lord-icon>
            </div>
            <div class="bar mb-4"></div>
            <div class="row ">
                @foreach ($arcade_categories->take(36) as $arcade)
                    <div class="col-xl-1 col-lg-2 col-md-3 col-4">
                        <div class="actiongames">
                            <div class="action__card">
                                <div class="action__card-img">
                                    <a href="{{ route('gamePlay', $arcade->Game?->slug) }}"
                                        title="{{ $arcade->Game?->name }}" data-bs-toggle="tooltip"
                                        data-bs-placement="top">
                                        @if ($arcade?->Game->thumbnail)
                                            <img src="{{ asset('uploads/Games/' . $arcade?->Game->thumbnail) }}"
                                                alt="{{ $arcade->Game?->name }} - Play Free Best {{ $arcade->category_name }} Online Game on JangoGames.com"
                                                class="img-fluid">
                                        @else
                                            <img src="{{ $arcade?->Game->image_link }}"
                                                alt="{{ $arcade->Game?->name }} - Play Free Best {{ $arcade->category_name }} Online Game on JangoGames.com"
                                                class="img-fluid">
                                        @endif
                                    </a>
                                </div>
                                <div class="action__card-bottom">
                                    <div class="game_name">
                                        <a href="{{ route('gamePlay', $arcade->Game?->slug) }}"
                                            title="{{ $arcade->Game?->name }}" data-bs-toggle="tooltip"
                                            data-bs-placement="top">{{ strip_tags(Str::limit($arcade->Game?->name, 20)) }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section> --}}
    <!-- ===================================== -->
    <!--ARCADE GAMES SLIDER END -->
    <!-- ===================================== -->

    <!-- ===================================== -->
    <!--RACING SLIDER START -->
    <!-- ===================================== -->

    {{-- <section id="game_slider" class="pt-4">
        <div class="section_title text-center">
            <div class="section_title-important">
                <div class="section_title-icon">
                    <lord-icon src="https://cdn.lordicon.com/hovbgwmd.json" trigger="loop" delay="500"
                        colors="primary:#5700ae,secondary:#8c89ff" style="width:80px;height:70px">
                    </lord-icon>
                </div>
                <div class="section_title-heading">
                    <h1>Racing</h1>
                </div>
            </div>
            <div class="section_title-text text-center">
                <p>You can ride in a variety of cars in our free online racing games. Driving a sports car on a
                    racetrack is the usual route. Play automobile racing games, side-scrolling bike games, and 3D
                    vehicle simulators among other driving games. You can race on the streets with your pals or
                    multiplayer online.</p>
            </div>
        </div>
        <div class="container-fluid">
            <div class="view_more text-right">
                <a href="{{ route('categoryGame', $racing_category->slug) }}" class="view-more-button text-dark"
                    data-bs-toggle="tooltip" data-bs-placement="top" title="Viw More Games">View More</a>
                <lord-icon src="https://cdn.lordicon.com/iifryyua.json" trigger="loop" colors="primary:#5700ae"
                    style="width:42px;height:32px">
                </lord-icon>
            </div>
            <div class="bar "></div>
            <div class="swiper mySwiper game pt-4">

                <div class="swiper-wrapper game-wrapper">
                    @foreach ($racing_categories as $racing)
                        <div class="swiper-slide gameCard">
                            <a href="{{ route('gamePlay', $racing->Game?->slug) }}" title="{{ $racing->Game?->name }}"
                                data-bs-toggle="tooltip" data-bs-placement="bottom">
                                @if ($racing?->Game?->thumbnail)
                                    <img src="{{ asset('uploads/Games/' . $racing?->Game?->thumbnail) }}"
                                        alt="{{ $racing->Game?->name }} - Play Free Best {{ $racing->category_name }} Online Game on JangoGames.com"
                                        class="img-fluid">
                                @else
                                    <img src="{{ $racing?->Game->image_link }}"
                                        alt="{{ $racing->Game?->name }} - Play Free Best {{ $racing->category_name }} Online Game on JangoGames.com"
                                        class="img-fluid">
                                @endif
                            </a>
                            <div class="gameCard_bottom">
                                <div class="gameCard_bottom_img">
                                    @if ($racing?->Game?->thumbnail)
                                        <img src="{{ asset('uploads/Games/' . $racing?->Game?->thumbnail) }}"
                                            alt="{{ $racing->Game?->name }} - Play Free Best {{ $racing->category_name }} Online Game on JangoGames.com"
                                            class="img-fluid">
                                    @else
                                        <img src="{{ $racing?->Game->image_link }}"
                                            alt="{{ $racing->Game?->name }} - Play Free Best {{ $racing->category_name }} Online Game on JangoGames.com"
                                            class="img-fluid">
                                    @endif
                                </div>
                                <div class="gameCard_bottom_name">
                                    <a href="{{ route('gamePlay', $racing->Game?->slug) }}"
                                        title="{{ $racing->Game?->name }}" data-bs-toggle="tooltip"
                                        data-bs-placement="bottom">{{ strip_tags(Str::limit($racing->Game?->name, 16)) }}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="swiper-button-next"></div>
                <!-- <div class="swiper-button-prev"></div> -->
            </div>
        </div>
    </section> --}}

    <!-- ===================================== -->
    <!--RACING GAMES SLIDER END -->
    <!-- ===================================== -->

    <!-- ===================================== -->
    <!--MULTIPLAYER GAMES SLIDER START -->
    <!-- ===================================== --
    <section id="action_games" class="pt-5">
        <div class="section_title text-center">
            <div class="section_title-important">
                <div class="section_title-icon">
                    <lord-icon src="https://cdn.lordicon.com/zpxybbhl.json" trigger="loop" delay="500"
                        colors="primary:#5700ae,secondary:#8c79ff" style="width:80px;height:70px">
                    </lord-icon>
                </div>
                <div class="section_title-heading">
                    <h1>Multiplayer</h1>
                </div>
            </div>
            <div class="section_title-text text-center">
                <p>If you like to play along with your friends even from a distance, then try our free online
                    multiplayer games category. Try something a bit more strategy-based by taking your friend to
                    highschool during a multiplayer game.</p>
            </div>
        </div>
        <div class="container-fluid">
            <div class="view_more text-right">
                <a href="{{ route('categoryGame', $multiplayer_category->slug) }}" class="view-more-button text-dark"
                    data-bs-toggle="tooltip" data-bs-placement="top" title="Viw More Games">View More</a>
                <lord-icon src="https://cdn.lordicon.com/iifryyua.json" trigger="loop" colors="primary:#5700ae"
                    style="width:42px;height:32px">
                </lord-icon>
            </div>
            <div class="bar mb-4"></div>
            <div class="row ">
                @foreach ($multiplayer_categories->take(36) as $multiplayer)
                    <div class="col-xl-1 col-lg-2 col-md-3 col-4">
                        <div class="actiongames">
                            <div class="action__card">
                                <div class="action__card-img">
                                    <a href="{{ route('gamePlay', $multiplayer->Game?->slug) }}"
                                        title="{{ $multiplayer->Game?->name }}" data-bs-toggle="tooltip"
                                        data-bs-placement="top">
                                        @if ($multiplayer?->Game->thumbnail)
                                            <img src="{{ asset('uploads/Games/' . $multiplayer?->Game->thumbnail) }}"
                                                alt="{{ $multiplayer->Game?->name }} - Play Free Best {{ $multiplayer->category_name }} Online Game on JangoGames.com"
                                                class="img-fluid">
                                        @else
                                            <img src="{{ $multiplayer?->Game->image_link }}"
                                                alt="{{ $multiplayer->Game?->name }} - Play Free Best {{ $multiplayer->category_name }} Online Game on JangoGames.com"
                                                class="img-fluid">
                                        @endif
                                    </a>
                                </div>
                                <div class="action__card-bottom">
                                    <div class="game_name">
                                        <a href="{{ route('gamePlay', $multiplayer->Game?->slug) }}"
                                            title="{{ $multiplayer->Game?->name }}" data-bs-toggle="tooltip"
                                            data-bs-placement="top">{{ strip_tags(Str::limit($multiplayer->Game?->name, 16)) }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ===================================== -->
    <!--MULTIPLAYER GAMES SLIDER END -->
    <!-- ===================================== -->

    <!-- ===================================== -->
    <!--SHOOTING GAMES SLIDER START -->
    <!-- ===================================== -->

    {{-- <section id="game_slider" class="pt-5">
        <div class="section_title text-center">
            <div class="section_title-important">
                <lord-icon src="https://cdn.lordicon.com/iltqorsz.json" trigger="loop" delay="500"
                    colors="primary:#5700ae,secondary:#8c89ff" style="width:80px;height:60px">
                </lord-icon>
                <div class="section_title-heading">
                    <h1>Shooting</h1>
                </div>
            </div>
            <div class="section_title-text text-center">
                <p>Our free online shooter games category offers a variety of free games that will blast your enemies to
                    bits. Why flee when you can simply annihilate them? You're not the type to avoid a fight. Those
                    enemies won’t learn their lesson if you simply run away on these fun shooting games.</p>
            </div>
        </div>
        <div class="container-fluid">
            <div class="view_more text-right">
                <a href="{{ route('categoryGame', $shooting_category->slug) }}" class="view-more-button text-dark"
                    data-bs-toggle="tooltip" data-bs-placement="top" title="Viw More Games">View More</a>
                <lord-icon src="https://cdn.lordicon.com/iifryyua.json" trigger="loop" colors="primary:#5700ae"
                    style="width:42px;height:32px">
                </lord-icon>
            </div>
            <div class="bar "></div>
            <div class="swiper mySwiper game pt-4">

                <div class="swiper-wrapper game-wrapper">
                    @foreach ($shooting_categories as $shooting)
                        <div class="swiper-slide gameCard">
                            <a href="{{ route('gamePlay', $racing->Game?->slug) }}"
                                title="{{ $shooting->Game?->name }}" data-bs-toggle="tooltip"
                                data-bs-placement="bottom">
                                @if ($shooting?->Game?->thumbnail)
                                    <img src="{{ asset('uploads/Games/' . $shooting?->Game?->thumbnail) }}"
                                        alt="{{ $shooting->Game?->name }} - Play Free Best {{ $shooting->category_name }} Online Game on JangoGames.com"
                                        class="img-fluid">
                                @else
                                    <img src="{{ $shooting?->Game->image_link }}"
                                        alt="{{ $shooting->Game?->name }} - Play Free Best {{ $shooting->category_name }} Online Game on JangoGames.com"
                                        class="img-fluid">
                                @endif
                            </a>
                            <div class="gameCard_bottom">
                                <div class="gameCard_bottom_img">
                                    @if ($shooting?->Game?->thumbnail)
                                        <img src="{{ asset('uploads/Games/' . $shooting?->Game?->thumbnail) }}"
                                            alt="{{ $shooting->Game?->name }} - Play Free Best {{ $shooting->category_name }} Online Game on JangoGames.com">
                                    @else
                                        <img src="{{ $shooting?->Game->image_link }}"
                                            alt="{{ $shooting->Game?->name }} - Play Free Best {{ $shooting->category_name }} Online Game on JangoGames.com">
                                    @endif
                                </div>
                                <div class="gameCard_bottom_name">
                                    <a href="{{ route('gamePlay', $shooting->Game?->slug) }}"
                                        title="{{ $shooting->Game?->name }}" data-bs-toggle="tooltip"
                                        data-bs-placement="bottom">{{ strip_tags(Str::limit($shooting->Game?->name, 16)) }}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-next"></div>
                <!-- <div class="swiper-button-prev"></div> -->
            </div>
        </div>
    </section> --}}

    <!-- ===================================== -->
    <!--SHOOTING GAMES SLIDER END -->
    <!-- ===================================== -->


    <!-- ===================================== -->
    <!--BEAUTY GAMES SLIDER START -->
    <!-- ===================================== -->
    {{-- <section id="action_games" class="pt-5">
        <div class="section_title text-center">
            <div class="section_title-important">
                <div class="section_title-icon">
                    <lord-icon src="https://cdn.lordicon.com/bwnhdkha.json" trigger="loop"
                        colors="primary:#5700ae,secondary:#7c89ff" style="width:70px;height:70px">
                    </lord-icon>
                </div>
                <div class="section_title-heading">
                    <h1>Beauty</h1>
                </div>
            </div>
            <div class="section_title-text text-center">
                <p>Beauty games we have more than thousand beauty games in our Online free beauty games platform. Online
                    free beauty games cover all aspects of beauty, from style to substance. Make your favorite
                    characters look gorgeous or cook wonderful food! Explore all of the free beauty games listed here.
                </p>
            </div>
        </div>
        <div class="container-fluid">
            <div class="view_more text-right">
                <a href="{{ route('categoryGame', $beauty_category->slug) }}" class="view-more-button text-dark"
                    data-bs-toggle="tooltip" data-bs-placement="top" title="Viw More Games">View More</a>
                <lord-icon src="https://cdn.lordicon.com/iifryyua.json" trigger="loop" colors="primary:#5700ae"
                    style="width:42px;height:32px">
                </lord-icon>
            </div>
            <div class="bar mb-4"></div>
            <div class="row ">
                @foreach ($beauty_categories->take(36) as $beauty)
                    <div class="col-xl-1 col-lg-2 col-md-3 col-4">
                        <div class="actiongames">
                            <div class="action__card">
                                <div class="action__card-img">
                                    <a href="{{ route('gamePlay', $beauty->Game?->slug) }}"
                                        title="{{ $beauty->Game?->name }}" data-bs-toggle="tooltip"
                                        data-bs-placement="top">
                                        @if ($beauty?->Game->thumbnail)
                                            <img src="{{ asset('uploads/Games/' . $beauty?->Game->thumbnail) }}"
                                                alt="{{ $beauty->Game?->name }} - Play Free Best {{ $beauty->category_name }} Online Game on JangoGames.com"
                                                class="img-fluid">
                                        @else
                                            <img src="{{ $beauty?->Game->image_link }}"
                                                alt="{{ $beauty->Game?->name }} - Play Free Best {{ $beauty->category_name }} Online Game on JangoGames.com"
                                                class="img-fluid">
                                        @endif
                                    </a>
                                </div>
                                <div class="action__card-bottom">
                                    <div class="game_name">
                                        <a href="{{ route('gamePlay', $beauty->Game?->slug) }}"
                                            title="{{ $beauty->Game?->name }}" data-bs-toggle="tooltip"
                                            data-bs-placement="top">{{ $beauty->Game?->name }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section> --}}
    <!-- ===================================== -->
    <!--BEAUTY CASUAL GAMES SLIDER END -->
    <!-- ===================================== -->


    <!-- ===================================== -->
    <!-- ALL GAMES START -->
    <!-- ===================================== -->
    <section id="all_games" class="pt-5">

        <div class="section_title text-center">
            <div class="section_title-important">

                <lord-icon src="https://cdn.lordicon.com/ktxpktdd.json" trigger="loop" delay="500"
                    colors="primary:#5700ae,secondary:#7c89ff" style="width:80px;height:70px">
                </lord-icon>
                <div class="section_title-heading">
                    <h1>All Games</h1>
                </div>
            </div>
            <div class="section_title-text text-center sm-hide">
                <p>Play Millions has the best selection of online games for you to play, from multiplayer games to free
                    online games for pc and more. Plus, we add new games all the time, so you'll never get bored!</p>
            </div>
        </div>
        <div class="container-fluid">
            <div class="bar mb-4"></div>
            <div class="gameGallery">
                @foreach ($games->slice(1, 6) as $game)
                    <div class="gameImg">
                        <a href="{{ route('gamePlay', $game->slug) }}" title="{{ $game->name }}">
                            @if ($game->thumbnail)
                                <img src="{{ asset('uploads/Games/' . $game->thumbnail) }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @else
                                <img src="{{ $game->image_link }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @endif
                        </a>
                        <div class="gameImg_content">
                            <a href="{{ route('gamePlay', $game->slug) }}"
                                title="{{ $game->name }}">{{ $game->name }} </a>
                        </div>
                    </div>
                @endforeach

                @foreach ($games->slice(7, 1) as $game)
                    <div class="gameImg big-stretch">
                        <a href="{{ route('gamePlay', $game->slug) }}" title="{{ $game->name }}">
                            @if ($game->thumbnail)
                                <img src="{{ asset('uploads/Games/' . $game->thumbnail) }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @else
                                <img src="{{ $game->image_link }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @endif
                        </a>
                        <div class="gameImg_content">
                            <a href="{{ route('gamePlay', $game->slug) }}"
                                title="{{ $game->name }}">{{ $game->name }} </a>
                        </div>
                    </div>
                @endforeach

                @foreach ($games->slice(8, 3) as $game)
                    <div class="gameImg">
                        <a href="{{ route('gamePlay', $game->slug) }}" title="{{ $game->name }}">
                            @if ($game->thumbnail)
                                <img src="{{ asset('uploads/Games/' . $game->thumbnail) }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @else
                                <img src="{{ $game->image_link }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @endif
                        </a>
                        <div class="gameImg_content">
                            <a href="{{ route('gamePlay', $game->slug) }}"
                                title="{{ $game->name }}">{{ $game->name }} </a>
                        </div>
                    </div>
                @endforeach

                @foreach ($games->slice(12, 1) as $game)
                    <div class="gameImg big-stretch">
                        <a href="{{ route('gamePlay', $game->slug) }}" title="{{ $game->name }}">
                            @if ($game->thumbnail)
                                <img src="{{ asset('uploads/Games/' . $game->thumbnail) }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @else
                                <img src="{{ $game->image_link }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @endif
                        </a>
                        <div class="gameImg_content">
                            <a href="{{ route('gamePlay', $game->slug) }}"
                                title="{{ $game->name }}">{{ $game->name }} </a>
                        </div>
                    </div>
                @endforeach

                @foreach ($games->slice(14, 3) as $game)
                    <div class="gameImg">
                        <a href="{{ route('gamePlay', $game->slug) }}" title="{{ $game->name }}">
                            @if ($game->thumbnail)
                                <img src="{{ asset('uploads/Games/' . $game->thumbnail) }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @else
                                <img src="{{ $game->image_link }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @endif
                        </a>
                        <div class="gameImg_content">
                            <a href="{{ route('gamePlay', $game->slug) }}"
                                title="{{ $game->name }}">{{ $game->name }} </a>
                        </div>
                    </div>
                @endforeach

                @foreach ($games->slice(18, 3) as $game)
                    <div class="gameImg big-stretch">
                        <a href="{{ route('gamePlay', $game->slug) }}" title="{{ $game->name }}">
                            @if ($game->thumbnail)
                                <img src="{{ asset('uploads/Games/' . $game->thumbnail) }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @else
                                <img src="{{ $game->image_link }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @endif
                        </a>
                        <div class="gameImg_content">
                            <a href="{{ route('gamePlay', $game->slug) }}"
                                title="{{ $game->name }}">{{ $game->name }} </a>
                        </div>
                    </div>
                @endforeach

                @foreach ($games->slice(22, 4) as $game)
                    <div class="gameImg">
                        <a href="{{ route('gamePlay', $game->slug) }}" title="{{ $game->name }}">
                            @if ($game->thumbnail)
                                <img src="{{ asset('uploads/Games/' . $game->thumbnail) }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @else
                                <img src="{{ $game->image_link }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @endif
                        </a>
                        <div class="gameImg_content">
                            <a href="{{ route('gamePlay', $game->slug) }}"
                                title="{{ $game->name }}">{{ $game->name }} </a>
                        </div>
                    </div>
                @endforeach

                @foreach ($games->slice(27, 1) as $game)
                    <div class="gameImg big-stretch">
                        <a href="{{ route('gamePlay', $game->slug) }}" title="{{ $game->name }}">
                            @if ($game->thumbnail)
                                <img src="{{ asset('uploads/Games/' . $game->thumbnail) }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @else
                                <img src="{{ $game->image_link }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @endif
                        </a>
                        <div class="gameImg_content">
                            <a href="{{ route('gamePlay', $game->slug) }}"
                                title="{{ $game->name }}">{{ $game->name }} </a>
                        </div>
                    </div>
                @endforeach

                @foreach ($games->slice(28, 2) as $game)
                    <div class="gameImg">
                        <a href="{{ route('gamePlay', $game->slug) }}" title="{{ $game->name }}">
                            @if ($game->thumbnail)
                                <img src="{{ asset('uploads/Games/' . $game->thumbnail) }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @else
                                <img src="{{ $game->image_link }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @endif
                        </a>
                        <div class="gameImg_content">
                            <a href="{{ route('gamePlay', $game->slug) }}"
                                title="{{ $game->name }}">{{ $game->name }} </a>
                        </div>
                    </div>
                @endforeach

                @foreach ($games->slice(31, 1) as $game)
                    <div class="gameImg big-stretch">
                        <a href="{{ route('gamePlay', $game->slug) }}" title="{{ $game->name }}">
                            @if ($game->thumbnail)
                                <img src="{{ asset('uploads/Games/' . $game->thumbnail) }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @else
                                <img src="{{ $game->image_link }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @endif
                        </a>
                        <div class="gameImg_content">
                            <a href="{{ route('gamePlay', $game->slug) }}"
                                title="{{ $game->name }}">{{ $game->name }} </a>
                        </div>
                    </div>
                @endforeach

                @foreach ($games->slice(33, 2) as $game)
                    <div class="gameImg">
                        <a href="{{ route('gamePlay', $game->slug) }}" title="{{ $game->name }}">
                            @if ($game->thumbnail)
                                <img src="{{ asset('uploads/Games/' . $game->thumbnail) }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @else
                                <img src="{{ $game->image_link }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @endif
                        </a>
                        <div class="gameImg_content">
                            <a href="{{ route('gamePlay', $game->slug) }}"
                                title="{{ $game->name }}">{{ $game->name }} </a>
                        </div>
                    </div>
                @endforeach

                @foreach ($games->slice(36, 1) as $game)
                    <div class="gameImg big-stretch">
                        <a href="{{ route('gamePlay', $game->slug) }}" title="{{ $game->name }}">
                            @if ($game->thumbnail)
                                <img src="{{ asset('uploads/Games/' . $game->thumbnail) }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @else
                                <img src="{{ $game->image_link }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @endif
                        </a>
                        <div class="gameImg_content">
                            <a href="{{ route('gamePlay', $game->slug) }}"
                                title="{{ $game->name }}">{{ $game->name }} </a>
                        </div>
                    </div>
                @endforeach

                @foreach ($games->slice(38, 4) as $game)
                    <div class="gameImg">
                        <a href="{{ route('gamePlay', $game->slug) }}" title="{{ $game->name }}">
                            @if ($game->thumbnail)
                                <img src="{{ asset('uploads/Games/' . $game->thumbnail) }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @else
                                <img src="{{ $game->image_link }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @endif
                        </a>
                        <div class="gameImg_content">
                            <a href="{{ route('gamePlay', $game->slug) }}"
                                title="{{ $game->name }}">{{ $game->name }} </a>
                        </div>
                    </div>
                @endforeach

                @foreach ($games->slice(43, 1) as $game)
                    <div class="gameImg big-stretch">
                        <a href="{{ route('gamePlay', $game->slug) }}" title="{{ $game->name }}">
                            @if ($game->thumbnail)
                                <img src="{{ asset('uploads/Games/' . $game->thumbnail) }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @else
                                <img src="{{ $game->image_link }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @endif
                        </a>
                        <div class="gameImg_content">
                            <a href="{{ route('gamePlay', $game->slug) }}"
                                title="{{ $game->name }}">{{ $game->name }} </a>
                        </div>
                    </div>
                @endforeach

                @foreach ($games->slice(45, 2) as $game)
                    <div class="gameImg">
                        <a href="{{ route('gamePlay', $game->slug) }}" title="{{ $game->name }}">
                            @if ($game->thumbnail)
                                <img src="{{ asset('uploads/Games/' . $game->thumbnail) }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @else
                                <img src="{{ $game->image_link }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @endif
                        </a>
                        <div class="gameImg_content">
                            <a href="{{ route('gamePlay', $game->slug) }}"
                                title="{{ $game->name }}">{{ $game->name }} </a>
                        </div>
                    </div>
                @endforeach

                @foreach ($games->slice(48, 1) as $game)
                    <div class="gameImg big-stretch">
                        <a href="{{ route('gamePlay', $game->slug) }}" title="{{ $game->name }}">
                            @if ($game->thumbnail)
                                <img src="{{ asset('uploads/Games/' . $game->thumbnail) }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @else
                                <img src="{{ $game->image_link }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @endif
                        </a>
                        <div class="gameImg_content">
                            <a href="{{ route('gamePlay', $game->slug) }}"
                                title="{{ $game->name }}">{{ $game->name }} </a>
                        </div>
                    </div>
                @endforeach

                @foreach ($games->slice(50, 2) as $game)
                    <div class="gameImg">
                        <a href="{{ route('gamePlay', $game->slug) }}" title="{{ $game->name }}">
                            @if ($game->thumbnail)
                                <img src="{{ asset('uploads/Games/' . $game->thumbnail) }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @else
                                <img src="{{ $game->image_link }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @endif
                        </a>
                        <div class="gameImg_content">
                            <a href="{{ route('gamePlay', $game->slug) }}"
                                title="{{ $game->name }}">{{ $game->name }} </a>
                        </div>
                    </div>
                @endforeach

                @foreach ($games->slice(53, 1) as $game)
                    <div class="gameImg big-stretch">
                        <a href="{{ route('gamePlay', $game->slug) }}" title="{{ $game->name }}">
                            @if ($game->thumbnail)
                                <img src="{{ asset('uploads/Games/' . $game->thumbnail) }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @else
                                <img src="{{ $game->image_link }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @endif
                        </a>
                        <div class="gameImg_content">
                            <a href="{{ route('gamePlay', $game->slug) }}"
                                title="{{ $game->name }}">{{ $game->name }} </a>
                        </div>
                    </div>
                @endforeach

                @foreach ($games->slice(55, 4) as $game)
                    <div class="gameImg">
                        <a href="{{ route('gamePlay', $game->slug) }}" title="{{ $game->name }}">
                            @if ($game->thumbnail)
                                <img src="{{ asset('uploads/Games/' . $game->thumbnail) }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @else
                                <img src="{{ $game->image_link }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @endif
                        </a>
                        <div class="gameImg_content">
                            <a href="{{ route('gamePlay', $game->slug) }}"
                                title="{{ $game->name }}">{{ $game->name }} </a>
                        </div>
                    </div>
                @endforeach

                @foreach ($games->slice(60, 1) as $game)
                    <div class="gameImg big-stretch">
                        <a href="{{ route('gamePlay', $game->slug) }}" title="{{ $game->name }}">
                            @if ($game->thumbnail)
                                <img src="{{ asset('uploads/Games/' . $game->thumbnail) }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @else
                                <img src="{{ $game->image_link }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @endif
                        </a>
                        <div class="gameImg_content">
                            <a href="{{ route('gamePlay', $game->slug) }}"
                                title="{{ $game->name }}">{{ $game->name }} </a>
                        </div>
                    </div>
                @endforeach

                @foreach ($games->slice(62, 6) as $game)
                    <div class="gameImg">
                        <a href="{{ route('gamePlay', $game->slug) }}" title="{{ $game->name }}">
                            @if ($game->thumbnail)
                                <img src="{{ asset('uploads/Games/' . $game->thumbnail) }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @else
                                <img src="{{ $game->image_link }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @endif
                        </a>
                        <div class="gameImg_content">
                            <a href="{{ route('gamePlay', $game->slug) }}"
                                title="{{ $game->name }}">{{ $game->name }} </a>
                        </div>
                    </div>
                @endforeach


                @foreach ($games->slice(69, 3) as $game)
                    <div class="gameImg big-stretch">
                        <a href="{{ route('gamePlay', $game->slug) }}" title="{{ $game->name }}">
                            @if ($game->thumbnail)
                                <img src="{{ asset('uploads/Games/' . $game->thumbnail) }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @else
                                <img src="{{ $game->image_link }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @endif
                        </a>
                        <div class="gameImg_content">
                            <a href="{{ route('gamePlay', $game->slug) }}"
                                title="{{ $game->name }}">{{ $game->name }} </a>
                        </div>
                    </div>
                @endforeach

                @foreach ($games->slice(73, 10) as $game)
                    <div class="gameImg">
                        <a href="{{ route('gamePlay', $game->slug) }}" title="{{ $game->name }}">
                            @if ($game->thumbnail)
                                <img src="{{ asset('uploads/Games/' . $game->thumbnail) }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @else
                                <img src="{{ $game->image_link }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @endif
                        </a>
                        <div class="gameImg_content">
                            <a href="{{ route('gamePlay', $game->slug) }}"
                                title="{{ $game->name }}">{{ $game->name }} </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="view_more text-right pt-5">
                <a href="{{ route('all_games') }}" class="view-more-button--load-more text-dark"
                    title="Load More Games" data-bs-toggle="tooltip" data-bs-placement="top">View All</a>
                <lord-icon src="https://cdn.lordicon.com/iifryyua.json" trigger="loop" colors="primary:#5700ae"
                    style="width:42px;height:32px">
                </lord-icon>
            </div>
        </div>
    </section>
    <!-- ===================================== -->
    <!-- ALL GAMES END -->
    <!-- ===================================== -->


    
    <!-- ===================================== -->
    <!-- ALL CATTEGORIES START -->
    <!-- ===================================== -->
    <section id="game_slider" class="pt-3">
        <div class="section_title text-center">
            <div class="section_title-important">
                <lord-icon src="https://cdn.lordicon.com/nkmsrxys.json" trigger="loop" delay="500"
                    colors="primary:#5700ae,secondary:#7c89ff" style="width:80px;height:80px">
                </lord-icon>
                <div class="section_title-heading">
                    <h1>Categories</h1>
                </div>
            </div>
            <div class="section_title-text text-center sm-hide">
                <p>Jango Games has the best free online games in many different categories including action, adventure,
                    arcade, io, multiplayer, racing, shooting, sports, and puzzle. With new games added every day,
                    there's always something new to play!</p>
            </div>
        </div>
        <div class="container-fluid">
            <div class="view_more text-right">
                <a href="{{ route('all_category') }}" class="view-more-button text-dark" title="View More Cattegory"
                    data-bs-toggle="tooltip" data-bs-placement="top">View More</a>
                <lord-icon src="https://cdn.lordicon.com/iifryyua.json" trigger="loop" colors="primary:#5700ae"
                    style="width:42px;height:32px">
                </lord-icon>
            </div>
            <div class="bar mb-4"></div>
            <div class="row">
                @foreach ($categories->take(12) as $category)
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="cattegory">
                            <div class="cattegory_img">
                                <a href="{{ route('categoryGame', $category->slug) }}">
                                    <img src="{{ asset('uploads/Category/' . $category->thumbnail) }}"
                                    alt="{{ $category->thumbnail }}">
                                </a>
                                
                            </div>
                            <div class="cattegory_name">
                                <a href="{{ route('categoryGame', $category->slug) }}" title="{{ $category->title }}" data-bs-toggle="tooltip"
                                    data-bs-placement="top">{{ $category->title }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ===================================== -->
    <!-- ALL CATTEGORIES END -->
    <!-- ===================================== -->
    <!-- ===================================== -->
    <!-- ALL TAGS START -->
    <!-- ===================================== -->
    <section id="game_slider" class="pt-5">
        <div class="section_title text-center">
            <div class="section_title-important">
                <lord-icon src="https://cdn.lordicon.com/qjvxqdov.json" trigger="loop" delay="500"
                    colors="primary:#5700ae,secondary:#7c89ff" style="width:80px;height:70px">
                </lord-icon>
                <div class="section_title-heading">
                    <h1>Popular Tags</h1>
                </div>
            </div>
            <div class="section_title-text text-center sm-hide">
                <p>Jango Games has the top popular Tags games, all completely free to play! We also have a variety of
                    different genres, categories and tags. Like running, multiplayer, ball, 3d, and assassin games
                    online!</p>
            </div>
        </div>
        <div class="container-fluid">
            <div class="view_more text-right">
                <a href="{{ route('all_tag') }}" class="view-more-button text-dark" title="View More Tags"
                    data-bs-toggle="tooltip" data-bs-placement="top">View More</a>
                <lord-icon src="https://cdn.lordicon.com/iifryyua.json" trigger="loop" colors="primary:#5700ae"
                    style="width:42px;height:32px">
                </lord-icon>
            </div>
            <div class="bar mb-4"></div>
            <div class="tagBox">
                @foreach ($tags as $tag)
                    <div class="tagCard" style="--i:{{ $tag->color_code }}" data-tilt data-tilt-glare
                        data-tilt-max-glare="0.8">
                        <div class="tagCard_icon">
                            <i class="fas fa-paw"></i>
                        </div>
                        <div class="tagCard_name">
                            <a href="{{ route('tagGame', $tag->slug) }}" title="{{ $tag->title }}" data-bs-toggle="tooltip"
                                data-bs-placement="top">{{ $tag->title }}</a>
                        </div>
                    </div>
                @endforeach
            </div>



        </div>
    </section>
    <!-- ===================================== -->
    <!-- ALL TAGS END -->
    <!-- ===================================== -->



    <!-- ===================================== -->
    <!-- HOME PAGE CONTENT START -->
    <!-- ===================================== -->
    <section id="homepageContent" class="pb-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="content_title text-center">Play Free Online Games on Jango Games</h1>
                    <div class="Content_wrapper pl-5 pt-5">
                        <div class="row ">
                            <div class="col-xl-10 col-lg-6 col-md-12">
                                <div class="inner_content" id="content">

                                    <main>
                                        <article>
                                            <h2>Play New Games Online</h2>
                                            <p>Play the newest games online – even if you don't have time to play, you
                                                can still enjoy the newest games online no matter where you are. Play
                                                the top free online games and the best new games online at Jango Games.
                                            </p>
                                        </article>
                                        <br>
                                        <article>
                                            <h2>Play Instantly No Download Required</h2>
                                            <p>Play the newest games instantly, wherever you are. Play the latest games
                                                and download them now onto your desktop. Free to download and always
                                                will be. Play the most popular games now!

                                                Jango Games is a new and unique online game, offering a unique
                                                experience like no other. You can play with friends and get the latest
                                                updates on games and gaming culture.

                                                Jango Games is an easy-to-use and fun way to enjoy the newest games. All
                                                you need is a browser!

                                                <strong> New games are added every day! Come play your favorite games at
                                                    <a href="{{ route('index') }}">Jango Games</a> </strong>
                                                <strong>The best games in Jango Games. Play for free, the most fun and
                                                    entertaining games online.</strong>
                                                Looking for free and fun games? You've come to the right place. We've
                                                got thousands of great games for you to play. You can browse our game
                                                categories from @foreach ($categories->take(10) as $category) <a href="{{ route('categoryGame', $category->slug) }}">{{ $category->title }} Games , </a>  @endforeach and more. We hope you enjoy playing these games on <a
                                                    href="{{ route('index') }}">Jango Games</a>!
                                                <br>
                                                <br>
                                                We have games for every taste and preference. Do you like racing games?
                                                We have them. Do you like puzzles? We have them. Do you like strategy
                                                games? We have them. You will not be bored here because we have all
                                                these categories of games and more. What’s more? We also have games for
                                                all ages. Games for kids and games for adults are both available here.
                                                Moreover, we have a very large number of mobile games that you can play
                                                on your mobile phone.
                                                <br>
                                                <br>
                                                We have various game categories, such as @foreach ($categories->take(6) as $category) <a href="{{ route('categoryGame', $category->slug) }}">{{ $category->title }} Games , </a>  @endforeach etc. In each category, we have various games that
                                                you can choose from. If you are bored, do not hesitate to visit our
                                                website and try a new game!
                                            </p>
                                        </article>
                                        <br>
                                        <article>
                                            <h2>Play Free Online Games without Purchases</h2>
                                            <p>These games are completely free and there is no need to purchase anything
                                                to enjoy them. You can play these games on your Android or iOS device
                                                without any problem. You can play these games wherever you are. You
                                                don’t need to install any software on your computer to play these games.
                                                You can play these games on your TV too. You can play these games with
                                                your friends or family too. These are the best free games you can play
                                                on your Android or iOS smartphone or tablet.
                                                <br>
                                                <br>
                                                With Jango, you can always rely on high-quality mobile games. If you
                                                want to try something new every day, you can try out different
                                                categories to find the best mobile games. You can also set a daily goal
                                                to get into the best mobile games. The best part is that you can try out
                                                these games for free. You don’t have to pay a single penny to enjoy
                                                these games.
                                                <br>
                                                <br>
                                                <strong>We have a collection of Free games in JangoGames. Play with us
                                                    and enjoy the best online games.</strong>
                                                You will have a lot of fun while exploring the Games category. Have fun!
                                                You can also browse by Genre, like @foreach ($tags->slice(1,10) as $tag) <a href="{{ route('tagGame', $tag->slug) }}">{{ $tag->title }} Games , </a>  @endforeach and many more. To find the best gaming
                                                experience, be it on your phone, tablet or computer, we have the best
                                                games for you. You can also search by Tag, like @foreach ($tags->slice(11, 10) as $tag) <a href="{{ route('tagGame', $tag->slug) }}">{{ $tag->title }} Games , </a>  @endforeach and
                                                much more, explore and find your best games.
                                                <br>
                                                <br>
                                                These are the most visited and clicked categories on the site. In order
                                                to find the best games on the site, you must first be aware of the types
                                                of games that are on the site. There are many different types of games
                                                on the site, such as @foreach ($tags->slice(22, 10) as $tag) <a href="{{ route('tagGame', $tag->slug) }}">{{ $tag->title }} Games , </a>  @endforeach and more. You must choose the type of game that best suits your
                                                needs and interests.
                                                <br>
                                                <br>
                                                <strong>Play our most popular, addicting online games for free.
                                                    <br>
                                                    Jango Games has the most popular, addicting games for you to play
                                                    for hours of fun.
                                                </strong>
                                            <ol>
                                                @foreach ($best_games->take(10) as $game)
                                                    <li><a href="{{ route('gamePlay', $game->slug) }}">{{ $game->name }}</a></li>
                                                @endforeach
                                            </ol>
                                            <br>
                                            <br>
                                            <p> If you have any suggestions or ideas for new games, please let us know.
                                                We are working every day to make <a href="{{ route('index') }}">Jango Games</a>
                                                better, enjoy these games today!</p>
                                            </p>
                                        </article>
                                        <br>

                                    </main>

                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-12">
                      
                            </div>
                        </div>

                    </div>
                    <div class="bottom_bar">
                        <div class="bottom_bar-bar"></div>
                        <div class="see_more">
                            <a href="#content" class="see_more-btn"><i class="fas fa-chevron-down"></i> See More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- ===================================== -->
    <!-- HOME PAGE CONTENT END -->
    <!-- ===================================== -->

@endsection

