@extends('layouts.frontend.app')
@section('header')
    <meta property="og:title" content="{{ $single_category->meta_title }}">
    <meta property="og:description" content="{{ $single_category->meta_description }}">
    <meta property="og:image" content="{{ asset('assets/frontend/images/logo/jango-games-logo.png') }}" />
    <meta property="og:url" content="{{ url()->current() }}">
    <meta name="title" content=" {{ $single_category->meta_title }}" />
    <meta name="description" content="{{ $single_category->meta_description }}">

    <meta name="keywords" content="{{ $single_category->meta_keyword }}" />

    <link rel="canonical" href="{{ url()->current() }}" />
    <title>{{ $single_category->title }} Games | Play Free Online {{ $single_category->title }} Games On Jango Games
    </title>
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
                    <h1>{{ $single_category->title }}</h1>
                </div>
            </div>
            <div class="section_title-text text-center">
                <p>{{ $single_category->sub_title }}</p>
            </div>
        </div>
        <div class="container-fluid">
            <div class="bar mb-4"></div>
            <div class="gameGallery">
                @foreach ($game_categories as $game)
                <div class="gameImg">
                    <a href="{{ route('gamePlay', $game->Game?->slug) }}" title="{{ $game->Game?->name }}">
                        @if ($game->Game?->thumbnail)
                            <img src="{{ asset('uploads/Games/' . $game->Game?->thumbnail) }}"
                                alt="{{ $game->Game?->name }} - Play Free Best {{ $game->title }} Online Game on JangoGames.com">
                        @else
                            <img src="{{ $game->Game?->image_link }}"
                                alt="{{ $game->Game?->name }} - Play Free Best {{ $game->title }} Online Game on JangoGames.com">
                        @endif
                    </a>
                    <div class="gameImg_content">
                        <a href="{{ route('gamePlay', $game->Game?->slug) }}"
                            title="{{ $game->Game?->name }}">{{ $game->Game?->name }} </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="custom_paginate mt-5">
            {{ $game_categories->links() }}
        </div>
    </section>
    <!-- ===================================== -->
    <!-- ALL GAMES END -->
    <!-- ===================================== -->


    <!-- ===================================== -->
    <!-- HOME PAGE CONTENT START -->
    <!-- ===================================== -->
    <section id="homepageContent" class="pb-5 mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="content_title text-center">Action Games</h1>
                    <div class="Content_wrapper pl-5 pt-5">
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="inner_content" id="content">

                                    <main>
                                        {!! $single_category->description !!}

                                        <article>
                                            <h2> FAQ</h2>
                                            <h3>Which are the most played {{ $single_category->title }} Games on Jango
                                                Games?</h3>
                                            <ol>
                                                @foreach ($game_categories->take(6) as $rel_game)
                                                    <li><a
                                                            href="{{ route('gamePlay', $game->Game?->slug) }}">{{ $rel_game->Game?->name }}</a>
                                                    </li>
                                                @endforeach
                                            </ol>
                                        </article>

                                    </main>

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

    </section>
    <!-- ===================================== -->
    <!-- HOME PAGE CONTENT END -->
    <!-- ===================================== -->
@endsection
