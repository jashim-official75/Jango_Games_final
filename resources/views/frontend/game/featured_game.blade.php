@extends('layouts.frontend.app')
@section('header')
    <meta property="og:title" content="Play the Featured Games for Free on Jango Games">
    <meta property="og:description"
        content="Play thousands of free online games on Jango Games | All Games. Find the Featured free games you will love to play. Play all your favorite games like puzzle games, word and trivia games, card games, multiplayer games and more.">
    <meta property="og:image" content="{{ asset('assets/frontend/images/logo/jango-games-logo.png') }}" />
    <meta property="og:url" content="{{ url()->current() }}">
    <meta name="title" content="Play the Featured Games for Free on Jango Games" />
    <meta name="description" content=" Discover and play the best free online games on Jango Games. Enjoy a variety of genres, from action and adventure to puzzle and strategy games. Play now!">

    <meta name="keywords" content="Featured Games" />

        <link rel="canonical" href="{{ url()->current() }}" />
    <title>Featured Games | Play Free Best Online Games On Jango Games</title>
@endsection
@section('frontend_content')
    <!-- ===================================== -->
    <!-- ALL GAMES START -->
    <!-- ===================================== -->
    <section id="all_games" class="mt-100">

        <div class="section_title text-center">
            <div class="section_title-important">

                <lord-icon src="https://cdn.lordicon.com/rqsvgwdj.json" trigger="loop" delay="500"
                        colors="primary:#5700ae,secondary:#8c79ff" style="width:80px;height:70px">
                    </lord-icon>
                <div class="section_title-heading">
                    <h1>Featured Games</h1>
                </div>
            </div>
            <div class="section_title-text text-center">
                <p>Discover the Featured games for free at Jango Games. Play a variety of top-rated games and enjoy endless entertainment.
                </p>
            </div>
        </div>
        <div class="container-fluid">
            <div class="bar mb-4"></div>
            <div class="gameGallery">
                @foreach ($featured_games as $game)
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
        </div>
        <div class="custom_paginate mt-5">
            {{ $featured_games->links() }}
        </div>
    </section>
    <!-- ===================================== -->
    <!-- ALL GAMES END -->
    <!-- ===================================== -->


    <!-- ===================================== -->
    <!-- HOME PAGE CONTENT START -->
    <!-- ===================================== -->
    {{-- <section id="homepageContent" class="pb-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="content_title text-center">Action Games</h1>
                    <div class="Content_wrapper pl-5 pt-5">
                        <div class="row ">
                            <div class="col-md-10">
                                <div class="inner_content" id="content">

                                    <main>
                                        <article>
                                            <h2>Are you an action game lover?</h2>
                                            <p>Are you looking for some free action games to play online? We've got a popular list of the best online action games for free to play. All for free. Are you looking for fun games to play with your friends? Or are you looking for a challenging game to test your skills? We are suggesting the most popular collections for you. Check out our best action game collection of online action games, and start playing today!
                                            </p>
                                        </article>
                                        <br>
                                        <article>
                                            <h2>Do you like challenging action games?</h2>
                                            <p>Action games are challenging games. Action games are in vain without challenges. The most popular action games include adventure, shooting, and throwing challenges.</p>
                                        </article>
                                        <article>
                                            <h2>Fun Playing Action Games</h2>
                                            <p>Many action games are more fun than challenges, such as Clash of Kingdom, and Zombie Shooter. This action game is best for those who prefer fun playing games for free. </p>
                                        </article>
                                        <br>
                                        <article>
                                            <h2>Action-Packed Online Multiplayer Games</h2>
                                            <p>Are you looking for a new game that will make you completely addicted? Every year, new online multiplayer online games make their appearance. But which one is worth my time? If a game has an action-packed story and fights, then I will definitely check it out. That's what interests me the most! Did you know that there are action-packed multiplayer games like [Play name of game] that make playing with friends or family more exciting and amazing. You get to battle them both on the same screen which is awesome.</p>
                                        </article>
                                        <br>
                                        <article>
                                            <h2>Relaxing Action</h2>

                                            <p>Jango Games has the best selection of free games, all in one place. Play great games and have fun! There are also some simple action games like Boomer Zombie and Artic Fishing that you can relax and play with pleasure.
                                                <br>
                                                Most of the time, players choose to play games like Hill Racing, Super Bike Racing, and Line Color 3d Squid Game Color Adventure. The most popular action games are racing, fighting, and shooter games. These games have a lot of action and have a lot of fighting and shooting. </p>
                                        </article>
                                        <br>
                                        <article>
                                            <h1>FAQ</h1>
                                            <h2>Which action games do you think are the most popular?</h2>
                                            <p>
                                                <ol>
                                                    <li><a href="">Clash of Kingdom</a></li>
                                                    <li><a href="">Alien Shooter</a></li>
                                                    <li><a href="">Air Force Commando</a></li>
                                                    <li><a href="">City of the Dead: Zombie Shooter</a></li>
                                                    <li><a href="">Hunter Assassin Stealth Master</a></li>
                                                    <li><a href="">Police Chase: Car Racing</a></li>
                                                    <li><a href="">Hungry Ninja Candy Puzzle</a></li>
                                                    <li><a href="">Snail Run</a></li>
                                                    <li><a href="">Marvel's Spider-Man 2022</a></li>
                                                    <li><a href="">UFO shooting game</a></li>
                                                    <li><a href="">Bijoy 71 Hearts of Heroes: War Action Shooting game</a></li>
                                                </ol>
                                            </p>
                                        </article>
                                        <br>
                                        <p>Action is a common feature in adventure. For those who like to play action games, there are more fun and challenging action games. These games are similar to adventure, arcade, and shooting games. What would an adventure game be without action?  Travel somewhere and watch our adventure games at leisure.
                                        </p>
                                    </main>

                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="content_img">
                                    <div class="swiper mySwiper2">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <a href="#"><img src="images/landscape_game/Rectangle 2004 (6)-min.jpg"
                                                        alt="" /></a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="#"><img src="images/landscape_game/Rectangle 2004 (6)-min.jpg"
                                                        alt="" /></a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="#"><img src="images/landscape_game/Rectangle 2004 (6)-min.jpg"
                                                        alt="" /></a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="#"><img src="images/landscape_game/Rectangle 2004 (6)-min.jpg"
                                                        alt="" /></a>
                                            </div>


                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="bottom_bar">
                        <div class="bottom_bar-bar"></div>
                        <div class="see_more">
                            <a href="#content" class="see_more-btn"><i class="fas fa-chevron-down"></i> See More </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section> --}}
    <!-- ===================================== -->
    <!-- HOME PAGE CONTENT END -->
    <!-- ===================================== -->
@endsection
