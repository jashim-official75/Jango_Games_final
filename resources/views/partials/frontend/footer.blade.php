
    <!-- ===================================== -->
    <!-- FOOTER  START -->
    <!-- ===================================== -->
    <footer id="footer_area" class="mt-5 {{ request()->routeIs('gamePlay') ? 'sm-hide' : '' }}">

        <div class="footer-wave-box">
            <div class="footer-wave footer-animation"></div>
        </div>
        <div class="water_drop">
            <img src="{{ asset('assets/frontend/images/footer/water_drop.png') }}" alt="">
            <img src="{{ asset('assets/frontend/images/footer/water_drop.png') }}" alt="">
            <img src="{{ asset('assets/frontend/images/footer/water_drop.png') }}" alt="">
            <img src="{{ asset('assets/frontend/images/footer/water_drop.png') }}" alt="">
            <img src="{{ asset('assets/frontend/images/footer/water_drop.png') }}" alt="">
            <img src="{{ asset('assets/frontend/images/footer/water_drop.png') }}" alt="">
            <img src="{{ asset('assets/frontend/images/footer/water_drop.png') }}" alt="">
            <img src="{{ asset('assets/frontend/images/footer/water_drop.png') }}" alt="">
            <img src="{{ asset('assets/frontend/images/footer/water_drop.png') }}" alt="">
            <img src="{{ asset('assets/frontend/images/footer/water_drop.png') }}" alt="">
            <img src="{{ asset('assets/frontend/images/footer/water_drop.png') }}" alt="">
            <img src="{{ asset('assets/frontend/images/footer/water_drop.png') }}" alt="">
            <img src="{{ asset('assets/frontend/images/footer/water_drop.png') }}" alt="">
            <img src="{{ asset('assets/frontend/images/footer/water_drop.png') }}" alt="">
            <img src="{{ asset('assets/frontend/images/footer/water_drop.png') }}" alt="">
        </div>

        <div class="main">
            <div class="footer">
                <div class="row justify-content-center g-0">
                    <div class="col-xl-3 col-md-4 mb-3  offset-xl-1">
                        <div class="footer_logo">
                            <h4><a href="index.html"><img src="{{ asset('assets/frontend/images/logo/jango-games-logo.png') }}" alt=""
                                        class="img-fluid"></a></h4>
                            <p class="mt-5 pe-5  logo-text">Play Free Games | Play Online | Jangogames.com
                                Play Millions of free online games on Jango Games. Find the best free games you will
                                love to play. Play all your favorite games like puzzle games, word and trivia games,
                                card games, multiplayer games and more.
                            </p>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4 mb-3 ps-4">
                        <div class="our_sites">
                            <h2>Our Sites </h2>
                            <ul>

                                <li><a href="https://naptechgames.com/" target="_blank"><i
                                            class="fas fa-chevron-right"></i> NapTech Games</a></li>
                                <li><a href="https://taptorun.com/" target="_blank"><i
                                            class="fas fa-chevron-right"></i> TapToRun</a></li>
                                 <li><a href="https://taptohit.com/" target="_blank"><i
                                            class="fas fa-chevron-right"></i> TapToHit</a></li>
                                <li><a href="https://peggygames.com/" target="_blank"><i
                                            class="fas fa-chevron-right"></i> Peggy Games</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4 mb-3 ps-4">
                        <div class="quick_links">
                            <h2>Quick Links</h2>
                            <ul>
                                <li><a href="{{ route('index') }}"><i class="fas fa-chevron-right"></i> Home</a></li>
                                <li><a href="{{ route('about') }}"><i class="fas fa-chevron-right"></i> About</a></li>
                                <li><a href="{{ route('privacy') }}"><i class="fas fa-chevron-right"></i> Privacy &
                                        Policy</a></li>
                                <li><a href="{{ route('termsCondition') }}"><i class="fas fa-chevron-right"></i> Terms &
                                        Conditions</a></li>
                                <li><a href="{{ route('contact') }}"><i class="fas fa-chevron-right"></i> Contact</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4 mb-3 ps-4">
                        <div class="games_cattegories">
                            <h2>Cattegories</h2>
                            <ul>
                                @foreach ($categories->take(5) as $category)
                                    <li><a href="{{ route('categoryGame', $category->slug) }}"><i class="fas fa-chevron-right"></i> {{ $category->title }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4 mb-3 ps-4">
                        <div class="Contact_part">
                            <h2>Contact</h2>

                            <div class="info_part">
                                <ul>
                                    <li><a href="tel: +447407113033 "><i class="uil uil-phone"></i> +447407113033
                                        </a></li>
                                    <li><a href="mailto:contact@jangogames.com"><i class="uil uil-envelope-alt"></i>
                                            contact@jangogames.com</a></li>

                                </ul>
                                <div class="download_app mt-5">
                                <a href="https://play.google.com/store/apps/details?id=com.jangogames.instant.play.games"
                                    target="_blank"> <img src="{{ asset('assets/frontend/images/get_app.png') }}"
                                        alt="Google-Playstore-logo"></a>
                            </div>
                            </div>

                        </div>
                    </div>
                    <div class="bar"></div>
                    <div class="col-md-12">
                        <div class="footer-socail">

                            <a href="https://www.facebook.com/jangogames.io" target="_blank" style="--i:#4267B2;"><i
                                    class="fab fa-facebook-f"></i></a>

                            <a href="https://www.youtube.com/channel/UCFUH0BIoLJfOpl3blGGpumg" target="_blank" style="--i:#FF0000;"><i
                                    class="uil uil-youtube"></i></a>

                            <a href="https://www.pinterest.co.uk/jango_games" target="_blank" style="--i:#1DA1F2;"><i
                                    class="fab fa-twitter"></i></a>

                            <a href="https://www.pinterest.co.uk/jango_games" target="_blank" style="--i:#E60023;"><i
                                    class="fab fa-pinterest-p"></i></a>

                            <a href="https://www.linkedin.com/showcase/jango-games" target="_blank" style="--i:#0072b1;"><i
                                    class="fab fa-linkedin-in"></i></a>

                            <a href="https://www.instagram.com/jangogames.io" target="_blank" style="--i:#c72d8d;"><i
                                    class="fab fa-instagram"></i></a>

                            <a href="https://discord.gg/9nwpYGG7yj" target="_blank" style="--i:#5865F2;"><i
                                    class="fab fa-discord"></i></a>

                            <a href="https://www.reddit.com/r/jangogames" target="_blank" style="--i:#f34101;"><i
                                    class="fab fa-reddit-alien"></i></a>

                            <a href="https://www.tiktok.com/@jangogames.io" target="_blank" style="--i:#EE1D52;"><i
                                    class="fab fa-tiktok"></i></a>

                            <a href="https://chat.whatsapp.com/LFmmvCzFs4YHwlJ2K4DUpU" target="_blank" style="--i:#25D366;"><i
                                    class="fab fa-whatsapp"></i></a>

                            <a href="https://t.me/jangogamesio" target="_blank" style="--i:#0088cc;"><i
                                    class="fab fa-telegram-plane"></i></a>

                         <!---   <a href="" target="_blank" style="--i:#c7c421;"><i
                                    class="fab fa-snapchat-ghost"></i></a> -->



                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </footer>
    <!-- ===================================== -->
    <!-- FOOTER  END -->
    <!-- ===================================== -->