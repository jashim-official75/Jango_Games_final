@extends('layouts.frontend.app')
@section('header')
    <meta name="title" content="Jango Games: Play Games Online | About Us" />
    <link rel="canonical" href="{{ url()->current() }}" />
    <title>Jango Games: Play Games Online | About Us</title>
@endsection
@section('frontend_content')
    <!-- ===================================== -->
    <!-- ABOUT HERO PART START -->
    <!-- ===================================== -->
    <video loop muted autoplay class="vdoBg">
        <source
            src="https://ik.imagekit.io/7fjnanahq/play-online-games-with-friends-free__online-video-cutter.com__2_HH1C-DN9H.mp4?ik-sdk-version=javascript-1.4.3&updatedAt=1665346932563">
    </video>
    <section id="about_hero">
        <div class="about_hero-content">
            <h1 class="about_hero-heading">Play Million Games on <span class="stroke_text">Jango Games</span> </h1>
            <h2 class="about_hero-subheading text-white">No download | No Registration | No Money</h2>

            <div class="hero_btn mt-5">
                <a href="#ourwork" class="primary_btn --white">Explore Us</a>
            </div>
        </div>

        <svg class="shape" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1"
                d="M0,128L26.7,149.3C53.3,171,107,213,160,218.7C213.3,224,267,192,320,192C373.3,192,427,224,480,234.7C533.3,245,587,235,640,240C693.3,245,747,267,800,272C853.3,277,907,267,960,256C1013.3,245,1067,235,1120,245.3C1173.3,256,1227,288,1280,261.3C1333.3,235,1387,149,1413,106.7L1440,64L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z">
            </path>
        </svg>
    </section>

    <!-- ===================================== -->
    <!-- OUR WORK PART START -->
    <!-- ===================================== -->

    <section id="ourwork" class="pt-5">
        <div class="section_title text-center">
            <div class="section_title-important">
                <lord-icon src="https://cdn.lordicon.com/pvbjsfif.json" trigger="loop" delay="1000"
                    colors="primary:#5700ae" state="intro" style="width:70px;height:50px">
                </lord-icon>
                <div class="section_title-heading">
                    <h1>Our Work's</h1>
                </div>
            </div>
            <div class="section_title-text text-center">
                <p>Jango Games offers a variety of fun, entertaining and addictive games that can be played online. From
                    multiplayer games to puzzle games, there is something for everyone to enjoy. Jango Games is a great way
                    to spend some free time or take a break from work.</p>
            </div>
        </div>
        <div class="container-fluid">
            <div class="bar"></div>
            <div class="swiper mySwiper3 pt-5">
                <div class="swiper-wrapper our_works_wrapper">
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/line-color-3d-squid-game-color-adventure" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/line_color_3d.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/bijoy-71-hearts-of-heroes-war-action-shooting-gam" target="_blank" ><img src="{{ asset('assets/frontend/images/our_works/bijoy_71.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/candy-go-round-sweet-puzzle-match-3-game-crunch" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/sweetest_puzzle_game.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/line-color-3d-squid-game-color-adventure" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/line_color_3d.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/bijoy-71-hearts-of-heroes-war-action-shooting-gam" target="_blank" ><img src="{{ asset('assets/frontend/images/our_works/bijoy_71.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/candy-go-round-sweet-puzzle-match-3-game-crunch" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/sweetest_puzzle_game.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/line-color-3d-squid-game-color-adventure" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/line_color_3d.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/bijoy-71-hearts-of-heroes-war-action-shooting-gam" target="_blank" ><img src="{{ asset('assets/frontend/images/our_works/bijoy_71.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/candy-go-round-sweet-puzzle-match-3-game-crunch" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/sweetest_puzzle_game.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/line-color-3d-squid-game-color-adventure" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/line_color_3d.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/bijoy-71-hearts-of-heroes-war-action-shooting-gam" target="_blank" ><img src="{{ asset('assets/frontend/images/our_works/bijoy_71.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/candy-go-round-sweet-puzzle-match-3-game-crunch" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/sweetest_puzzle_game.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/line-color-3d-squid-game-color-adventure" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/line_color_3d.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/bijoy-71-hearts-of-heroes-war-action-shooting-gam" target="_blank" ><img src="{{ asset('assets/frontend/images/our_works/bijoy_71.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/candy-go-round-sweet-puzzle-match-3-game-crunch" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/sweetest_puzzle_game.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/line-color-3d-squid-game-color-adventure" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/line_color_3d.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/bijoy-71-hearts-of-heroes-war-action-shooting-gam" target="_blank" ><img src="{{ asset('assets/frontend/images/our_works/bijoy_71.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/candy-go-round-sweet-puzzle-match-3-game-crunch" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/sweetest_puzzle_game.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/line-color-3d-squid-game-color-adventure" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/line_color_3d.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/bijoy-71-hearts-of-heroes-war-action-shooting-gam" target="_blank" ><img src="{{ asset('assets/frontend/images/our_works/bijoy_71.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/candy-go-round-sweet-puzzle-match-3-game-crunch" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/sweetest_puzzle_game.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/line-color-3d-squid-game-color-adventure" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/line_color_3d.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/bijoy-71-hearts-of-heroes-war-action-shooting-gam" target="_blank" ><img src="{{ asset('assets/frontend/images/our_works/bijoy_71.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/candy-go-round-sweet-puzzle-match-3-game-crunch" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/sweetest_puzzle_game.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/line-color-3d-squid-game-color-adventure" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/line_color_3d.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/bijoy-71-hearts-of-heroes-war-action-shooting-gam" target="_blank" ><img src="{{ asset('assets/frontend/images/our_works/bijoy_71.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/candy-go-round-sweet-puzzle-match-3-game-crunch" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/sweetest_puzzle_game.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/line-color-3d-squid-game-color-adventure" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/line_color_3d.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/bijoy-71-hearts-of-heroes-war-action-shooting-gam" target="_blank" ><img src="{{ asset('assets/frontend/images/our_works/bijoy_71.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/candy-go-round-sweet-puzzle-match-3-game-crunch" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/sweetest_puzzle_game.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/line-color-3d-squid-game-color-adventure" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/line_color_3d.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/bijoy-71-hearts-of-heroes-war-action-shooting-gam" target="_blank" ><img src="{{ asset('assets/frontend/images/our_works/bijoy_71.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/candy-go-round-sweet-puzzle-match-3-game-crunch" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/sweetest_puzzle_game.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/line-color-3d-squid-game-color-adventure" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/line_color_3d.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/bijoy-71-hearts-of-heroes-war-action-shooting-gam" target="_blank" ><img src="{{ asset('assets/frontend/images/our_works/bijoy_71.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/candy-go-round-sweet-puzzle-match-3-game-crunch" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/sweetest_puzzle_game.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/line-color-3d-squid-game-color-adventure" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/line_color_3d.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/bijoy-71-hearts-of-heroes-war-action-shooting-gam" target="_blank" ><img src="{{ asset('assets/frontend/images/our_works/bijoy_71.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/candy-go-round-sweet-puzzle-match-3-game-crunch" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/sweetest_puzzle_game.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/line-color-3d-squid-game-color-adventure" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/line_color_3d.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/bijoy-71-hearts-of-heroes-war-action-shooting-gam" target="_blank" ><img src="{{ asset('assets/frontend/images/our_works/bijoy_71.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/candy-go-round-sweet-puzzle-match-3-game-crunch" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/sweetest_puzzle_game.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/line-color-3d-squid-game-color-adventure" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/line_color_3d.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/bijoy-71-hearts-of-heroes-war-action-shooting-gam" target="_blank" ><img src="{{ asset('assets/frontend/images/our_works/bijoy_71.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/candy-go-round-sweet-puzzle-match-3-game-crunch" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/sweetest_puzzle_game.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/line-color-3d-squid-game-color-adventure" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/line_color_3d.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/bijoy-71-hearts-of-heroes-war-action-shooting-gam" target="_blank" ><img src="{{ asset('assets/frontend/images/our_works/bijoy_71.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/candy-go-round-sweet-puzzle-match-3-game-crunch" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/sweetest_puzzle_game.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/line-color-3d-squid-game-color-adventure" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/line_color_3d.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/bijoy-71-hearts-of-heroes-war-action-shooting-gam" target="_blank" ><img src="{{ asset('assets/frontend/images/our_works/bijoy_71.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/candy-go-round-sweet-puzzle-match-3-game-crunch" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/sweetest_puzzle_game.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/line-color-3d-squid-game-color-adventure" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/line_color_3d.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/bijoy-71-hearts-of-heroes-war-action-shooting-gam" target="_blank" ><img src="{{ asset('assets/frontend/images/our_works/bijoy_71.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/candy-go-round-sweet-puzzle-match-3-game-crunch" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/sweetest_puzzle_game.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/line-color-3d-squid-game-color-adventure" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/line_color_3d.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/bijoy-71-hearts-of-heroes-war-action-shooting-gam" target="_blank" ><img src="{{ asset('assets/frontend/images/our_works/bijoy_71.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/candy-go-round-sweet-puzzle-match-3-game-crunch" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/sweetest_puzzle_game.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/line-color-3d-squid-game-color-adventure" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/line_color_3d.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/bijoy-71-hearts-of-heroes-war-action-shooting-gam" target="_blank" ><img src="{{ asset('assets/frontend/images/our_works/bijoy_71.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/candy-go-round-sweet-puzzle-match-3-game-crunch" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/sweetest_puzzle_game.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/line-color-3d-squid-game-color-adventure" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/line_color_3d.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/bijoy-71-hearts-of-heroes-war-action-shooting-gam" target="_blank" ><img src="{{ asset('assets/frontend/images/our_works/bijoy_71.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/candy-go-round-sweet-puzzle-match-3-game-crunch" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/sweetest_puzzle_game.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/line-color-3d-squid-game-color-adventure" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/line_color_3d.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/bijoy-71-hearts-of-heroes-war-action-shooting-gam" target="_blank" ><img src="{{ asset('assets/frontend/images/our_works/bijoy_71.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/candy-go-round-sweet-puzzle-match-3-game-crunch" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/sweetest_puzzle_game.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/line-color-3d-squid-game-color-adventure" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/line_color_3d.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/bijoy-71-hearts-of-heroes-war-action-shooting-gam" target="_blank" ><img src="{{ asset('assets/frontend/images/our_works/bijoy_71.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/candy-go-round-sweet-puzzle-match-3-game-crunch" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/sweetest_puzzle_game.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/line-color-3d-squid-game-color-adventure" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/line_color_3d.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/bijoy-71-hearts-of-heroes-war-action-shooting-gam" target="_blank" ><img src="{{ asset('assets/frontend/images/our_works/bijoy_71.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/candy-go-round-sweet-puzzle-match-3-game-crunch" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/sweetest_puzzle_game.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/line-color-3d-squid-game-color-adventure" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/line_color_3d.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/bijoy-71-hearts-of-heroes-war-action-shooting-gam" target="_blank" ><img src="{{ asset('assets/frontend/images/our_works/bijoy_71.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/candy-go-round-sweet-puzzle-match-3-game-crunch" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/sweetest_puzzle_game.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/line-color-3d-squid-game-color-adventure" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/line_color_3d.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/bijoy-71-hearts-of-heroes-war-action-shooting-gam" target="_blank" ><img src="{{ asset('assets/frontend/images/our_works/bijoy_71.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/candy-go-round-sweet-puzzle-match-3-game-crunch" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/sweetest_puzzle_game.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/line-color-3d-squid-game-color-adventure" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/line_color_3d.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/bijoy-71-hearts-of-heroes-war-action-shooting-gam" target="_blank" ><img src="{{ asset('assets/frontend/images/our_works/bijoy_71.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/candy-go-round-sweet-puzzle-match-3-game-crunch" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/sweetest_puzzle_game.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/line-color-3d-squid-game-color-adventure" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/line_color_3d.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/bijoy-71-hearts-of-heroes-war-action-shooting-gam" target="_blank" ><img src="{{ asset('assets/frontend/images/our_works/bijoy_71.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/candy-go-round-sweet-puzzle-match-3-game-crunch" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/sweetest_puzzle_game.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/line-color-3d-squid-game-color-adventure" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/line_color_3d.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/bijoy-71-hearts-of-heroes-war-action-shooting-gam" target="_blank" ><img src="{{ asset('assets/frontend/images/our_works/bijoy_71.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/candy-go-round-sweet-puzzle-match-3-game-crunch" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/sweetest_puzzle_game.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/line-color-3d-squid-game-color-adventure" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/line_color_3d.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/bijoy-71-hearts-of-heroes-war-action-shooting-gam" target="_blank" ><img src="{{ asset('assets/frontend/images/our_works/bijoy_71.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/candy-go-round-sweet-puzzle-match-3-game-crunch" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/sweetest_puzzle_game.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/line-color-3d-squid-game-color-adventure" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/line_color_3d.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/bijoy-71-hearts-of-heroes-war-action-shooting-gam" target="_blank" ><img src="{{ asset('assets/frontend/images/our_works/bijoy_71.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/candy-go-round-sweet-puzzle-match-3-game-crunch" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/sweetest_puzzle_game.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/line-color-3d-squid-game-color-adventure" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/line_color_3d.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/bijoy-71-hearts-of-heroes-war-action-shooting-gam" target="_blank" ><img src="{{ asset('assets/frontend/images/our_works/bijoy_71.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/candy-go-round-sweet-puzzle-match-3-game-crunch" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/sweetest_puzzle_game.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/line-color-3d-squid-game-color-adventure" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/line_color_3d.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/bijoy-71-hearts-of-heroes-war-action-shooting-gam" target="_blank" ><img src="{{ asset('assets/frontend/images/our_works/bijoy_71.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/candy-go-round-sweet-puzzle-match-3-game-crunch" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/sweetest_puzzle_game.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/line-color-3d-squid-game-color-adventure" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/line_color_3d.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/bijoy-71-hearts-of-heroes-war-action-shooting-gam" target="_blank" ><img src="{{ asset('assets/frontend/images/our_works/bijoy_71.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/candy-go-round-sweet-puzzle-match-3-game-crunch" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/sweetest_puzzle_game.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/line-color-3d-squid-game-color-adventure" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/line_color_3d.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/bijoy-71-hearts-of-heroes-war-action-shooting-gam" target="_blank" ><img src="{{ asset('assets/frontend/images/our_works/bijoy_71.jpg') }}" alt=""></a>
                    </div>
                    <div class="swiper-slide work_card ">
                        <a href="https://naptechgames.com/game/candy-go-round-sweet-puzzle-match-3-game-crunch" target="_blank"><img src="{{ asset('assets/frontend/images/our_works/sweetest_puzzle_game.jpg') }}" alt=""></a>
                    </div>
                  
                </div>
    </section>
    <!-- ===================================== -->
    <!-- OUR WORK PART END -->
    <!-- ===================================== -->

    <!-- ===================================== -->
    <!-- USER'S TESTOMONIALS PART START -->
    <!-- ===================================== -->
    <section id="user_testomonials" class="pt-5">
        <div class="section_title text-center">
            <div class="section_title-important">
                <lord-icon src="https://cdn.lordicon.com/xqnbvely.json" trigger="loop" delay="500"
                    colors="primary:#5700ae,secondary:#7c89ff" style="width:70px;height:60px">
                </lord-icon>
                <div class="section_title-heading">
                    <h1>User Testomonials</h1>
                </div>
            </div>
            <div class="section_title-text text-center">
                <p>Jango Games offers a great selection of action, sports, puzzle, and arcade games, and our users love
                    them!</p>
            </div>
        </div>
        <div class="container-fluid">
            <div class="bar"></div>
            <div class="swiper mySwiper4 mb-5">
                <div class="testomonial_wrapper owl-carousel owl-theme">
                    <div class=" testomonial_box">
                        <div class="testomonial_box__inner">
                            <article>
                                <main>
                                    <div class="testomonial_box__inner_userthoughts">
                                        <blockquote>
                                            <q>I am a big fan of online gaming, and I am always on the lookout for new games
                                                to play. I've tried many online gaming sites.</q>
                                        </blockquote>
                                    </div>
                                    <div class="testomonial_box__inner_userinfo">
                                        <div class="userProfile">
                                            <img src="{{ asset('assets/frontend/images/users/user (1).jpg')}}" alt="">
                                        </div>
                                        <div class="userName">
                                            <h2>-John S.</h2>
                                        </div>
                                    </div>
                                </main>
                            </article>
                        </div>
                    </div>
                    <div class="testomonial_box">
                        <div class="testomonial_box__inner">
                            <article>
                                <main>
                                    <div class="testomonial_box__inner_userthoughts">
                                        <blockquote>
                                            <q>I wasn't sure about Jango Games at first, but I'm glad I gave them a try.
                                                They have some of the best games I've ever played. Keep up the good
                                                work!</q>
                                        </blockquote>
                                    </div>
                                    <div class="testomonial_box__inner_userinfo">
                                        <div class="userProfile">
                                            <img src="{{ asset('assets/frontend/images/users/user (2).jpg')}}" alt="">
                                        </div>
                                        <div class="userName">
                                            <h2>-Jane D.</h2>
                                        </div>
                                    </div>
                                </main>
                            </article>
                        </div>
                    </div>
                    <div class="testomonial_box">
                        <div class="testomonial_box__inner">
                            <article>
                                <main>
                                    <div class="testomonial_box__inner_userthoughts">
                                        <blockquote>
                                            <q>I play games a lot, so I was looking for a platform where I could play all
                                                the different types of games. Jango Games is a great platform.</q>
                                        </blockquote>
                                    </div>
                                    <div class="testomonial_box__inner_userinfo">
                                        <div class="userProfile">
                                            <img src="{{ asset('assets/frontend/images/users/user (3).jpg')}}" alt="">
                                        </div>
                                        <div class="userName">
                                            <h2>-Alex Houn</h2>
                                        </div>
                                    </div>
                                </main>
                            </article>
                        </div>
                    </div>
                    <div class="testomonial_box">
                        <div class="testomonial_box__inner">
                            <article>
                                <main>
                                    <div class="testomonial_box__inner_userthoughts">
                                        <blockquote>
                                            <q>JangoGames.com is one of the best online game platforms out there. I've
                                                played some games and really liked their high quality and their
                                                diversity.</q>
                                        </blockquote>
                                    </div>
                                    <div class="testomonial_box__inner_userinfo">
                                        <div class="userProfile">
                                            <img src="{{ asset('assets/frontend/images/users/user (4).jpg')}}" alt="">
                                        </div>
                                        <div class="userName">
                                            <h2>-Jhon Duo</h2>
                                        </div>
                                    </div>
                                </main>
                            </article>
                        </div>
                    </div>




                </div>
            
            </div>
        </div>
    </section>
    <!-- ===================================== -->
    <!-- USER'S TESTOMONIALS PART END -->
    <!-- ===================================== -->

    <!-- ===================================== -->
    <!-- FELL FREE TO ASK PART START -->
    <!-- ===================================== -->
    <section id="fellfreeask" class="askfreely py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7">
                    <div class="askfreely_img">
                        <img src="{{ asset('assets/frontend/images/all_images/feel_free_ask.png')}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="askfreely_form">
                        <h1 class="pb-5">Feel Free to Ask</h1>
                        <form action="#">
                            <div class="askfreely_form_Input">
                                <input type="email" name="email" id="email" placeholder="Your Email">
                            </div>
                            <div class="askfreely_form_Input">
                                <input type="text" name="shubject" id="shubject" placeholder="Subject">
                            </div>
                            <div class="askfreely_form_Input">
                                <textarea name="message" id="message" placeholder="Type message"></textarea>
                            </div>
                            <div class="askfreely_form_Submit">
                                <button type="submit" id="sumbit" name="submit" value="submit"
                                    class="primary_btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===================================== -->
    <!-- FELL FREE TO ASK PART START -->
    <!-- ===================================== -->
@endsection
