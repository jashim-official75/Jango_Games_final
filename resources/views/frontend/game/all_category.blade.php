@extends('layouts.frontend.app')
@section('header')
    <meta property="og:title" content="Play thousands of free online games on Jango Games | All Categories">
    <meta property="og:description"
        content="Play thousands of free online games on Jango Games | All Categories. Find the best free games you will love to play. Play all your favorite games like puzzle games, word and trivia games, card games, multiplayer games and more.">
    <meta property="og:image" content="{{ asset('assets/frontend/images/logo/jango-games-logo.png') }}" />
    <meta property="og:url" content="{{ url()->current() }}">
    <meta name="title" content=" Play thousands of free online games on Jango Games | All Games" />
    <meta name="description"
        content="Play thousands of free online games on Jango Games | All Categories. Find the best free games you will love to play. Play all your favorite games like puzzle games, word and trivia games, card games, multiplayer games and more.">

    <meta name="keywords"
        content="Play Free Online Games, Tap to Hit, Gaming Experience, Action-Packed Games, Puzzle-Based Games, Multiplayer Games, free online games,for free online games,play for free online games,free online games to play,the best free online games, play to free online games, free online games no downloads, free online games best, no download free online games, free online games multiplayer, free online games shooting, free online games on pc, free online games to play with friends, free online games pc, free online games for pc, free online games 2 player, free online games escape, free online games math, minecraft for free online games, free online games arcade" />

    <link rel="canonical" href="http" />
    <title>Jango Games: Play Games Online | All Categories</title>
@endsection
@section('frontend_content')
    <!-- ===================================== -->
    <!-- ALL CATTEGORIES START -->
    <!-- ===================================== -->
    <section id="game_slider" class="mt-100">
        <div class="section_title text-center">
            <div class="section_title-important">
                <lord-icon src="https://cdn.lordicon.com/nkmsrxys.json" trigger="loop" delay="500"
                    colors="primary:#5700ae,secondary:#7c89ff" style="width:80px;height:80px">
                </lord-icon>
                <div class="section_title-heading">
                    <h1>All Categories</h1>
                </div>
            </div>
            <div class="section_title-text text-center">
                <p>Jango Games has the best free online games in many different categories including action, adventure,
                    arcade, io, multiplayer, racing, shooting, sports, and puzzle. With new games added every day, there's
                    always something new to play!</p>
            </div>
        </div>
        <div class="container-fluid">
            <div class="bar mb-4"></div>
            <div class="row">
                @foreach ($categories as $category)
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="cattegory">
                            <div class="cattegory_img">
                                <a href="{{ route('categoryGame', $category->slug) }}">
                                    <img src="{{ asset('uploads/Category/' . $category->thumbnail) }}"
                                    alt="{{ $category->thumbnail }}">
                                </a>
                                
                            </div>
                            <div class="cattegory_name">
                                <a href="moregames.html" title="{{ $category->title }}" data-bs-toggle="tooltip"
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
    <!-- HOME PAGE CONTENT START -->
    <!-- ===================================== -->
       {{-- <section id="homepageContent" class="pb-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="content_title text-center">Play Free Online Games on Jango Games</h1>
                    <div class="Content_wrapper pl-5 pt-5">
                        <div class="row ">
                            <div class="col-xl-10 col-lg-6 col-md-6">
                                <div class="inner_content" id="content">

                                    <main>
                                        <article>
                                            <h2>Play New Games Online</h2>
                                            <p>Play the newest games online – even if you don't have time to play, you can
                                                still enjoy the newest games online no matter where you are. Play the top
                                                free online games and the best new games online at Jango Games.</p>
                                        </article>
                                        <br>
                                        <article>
                                            <h2>Play Instantly No Download Required</h2>
                                            <p>Play the newest games instantly, wherever you are. Play the latest games and
                                                download them now onto your desktop. Free to download and always will be.
                                                Play the most popular games now!

                                                Jango Games is a new and unique online game, offering a unique experience
                                                like no other. You can play with friends and get the latest updates on games
                                                and gaming culture.

                                                Jango Games is an easy-to-use and fun way to enjoy the newest games. All you
                                                need is a browser!

                                                <strong> New games are added every day! Come play your favorite games at <a
                                                        href="index.html">Jango Games</a> </strong>
                                                <strong>The best games in Jango Games. Play for free, the most fun and
                                                    entertaining games online.</strong>
                                                Looking for free and fun games? You've come to the right place. We've got
                                                thousands of great games for you to play. You can browse our game categories
                                                from adventure games, card games, racing games, simulation games, fighting
                                                games, RPG games, action games, rogue games, sports games and more. We hope
                                                you enjoy playing these games on <a href="index.html">Jango Games</a>!
                                                <br>
                                                <br>
                                                We have games for every taste and preference. Do you like racing games? We
                                                have them. Do you like puzzles? We have them. Do you like strategy games? We
                                                have them. You will not be bored here because we have all these categories
                                                of games and more. What’s more? We also have games for all ages. Games for
                                                kids and games for adults are both available here. Moreover, we have a very
                                                large number of mobile games that you can play on your mobile phone.
                                                <br>
                                                <br>
                                                We have various game categories, such as racing games, puzzle games,
                                                adventure games, card games, fighting games, RPG games, simulation games,
                                                sports games, etc. In each category, we have various games that you can
                                                choose from. If you are bored, do not hesitate to visit our website and try
                                                a new game!
                                            </p>
                                        </article>
                                        <br>
                                        <article>
                                            <h2>Play Free Online Games without Purchases</h2>
                                            <p>These games are completely free and there is no need to purchase anything to
                                                enjoy them. You can play these games on your Android or iOS device without
                                                any problem. You can play these games wherever you are. You don’t need to
                                                install any software on your computer to play these games. You can play
                                                these games on your TV too. You can play these games with your friends or
                                                family too. These are the best free games you can play on your Android or
                                                iOS smartphone or tablet.
                                                <br>
                                                <br>
                                                With Jango, you can always rely on high-quality mobile games. If you want to
                                                try something new every day, you can try out different categories to find
                                                the best mobile games. You can also set a daily goal to get into the best
                                                mobile games. The best part is that you can try out these games for free.
                                                You don’t have to pay a single penny to enjoy these games.
                                                <br>
                                                <br>
                                                <strong>We have a collection of Free games in JangoGames. Play with us and
                                                    enjoy the best online games.</strong>
                                                You will have a lot of fun while exploring the Games category. Have fun!
                                                You can also browse by Genre, like Action Games, Mech Games, Rail Games,
                                                Racing Games, RPG Games and many more. To find the best gaming experience,
                                                be it on your phone, tablet or computer, we have the best games for you. You
                                                can also search by Category, like Mario Games, Sonic Games, Minecraft Games,
                                                Multiplayer Games, Cartoon Network Games and much more, explore and find
                                                your best games.
                                                <br>
                                                <br>
                                                These are the most visited and clicked categories on the site. In order to
                                                find the best games on the site, you must first be aware of the types of
                                                games that are on the site. There are many different types of games on the
                                                site, such as flash games, HTML5 games, mobile games, social games and more.
                                                You must choose the type of game that best suits your needs and interests.
                                                <br>
                                                <br>
                                                <strong>Play our most popular, addicting online games for free.
                                                    <br>
                                                    Jango Games has the most popular, addicting games for you to play for
                                                    hours of fun.
                                                </strong>
                                            <ol>
                                                <li><a href="#">Head Socce2022</a></li>
                                                <li><a href="#">Survival Commando</a></li>
                                                <li><a href="#">MR Bullet: Shooting Puzzle</a></li>
                                                <li><a href="#">Flappy Bird Runner</a></li>
                                                <li><a href="#">Crazy Driver Police Chase</a></li>
                                            </ol>
                                            <br>
                                            <br>
                                            <p> If you have any suggestions or ideas for new games, please let us know. We
                                                are working every day to make <a href="index.html">Jango Games</a> better,
                                                enjoy these games today!</p>
                                            </p>
                                        </article>
                                        <br>

                                    </main>

                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-6">
                                <div class="content_img">
                                    <div class="swiper mySwiper2">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <a href="#"><img
                                                        src="images/landscape_game/Rectangle 2004 (6)-min.jpg"
                                                        alt="" /></a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="#"><img
                                                        src="images/landscape_game/Rectangle 2004 (6)-min.jpg"
                                                        alt="" /></a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="#"><img
                                                        src="images/landscape_game/Rectangle 2004 (6)-min.jpg"
                                                        alt="" /></a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="#"><img
                                                        src="images/landscape_game/Rectangle 2004 (6)-min.jpg"
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
