<!-- ===================================== -->
<!-- HEADER PART START -->
<!-- ===================================== -->

<header id="header_area" class="{{ request()->routeIs('gamePlay') ? 'sm-hide' : '' }}">
    <div class="container-fluid flex_navbar">
        <div id="logo">
            <div class="logo">
                <a href="{{ route('index') }}"><img src="{{ asset('assets/frontend/images/logo/jango-games-logo.png') }}"
                        alt="jango-games-logo"></a>
            </div>
            <div class="dropdown ms-3">
                <button id="menu"><i class="fas fa-chevron-down" id="icon_chevron"></i></button>
                <ul>
                    <li><a href="{{ route('index') }}" title="Home" data-bs-toggle="tooltip"
                            data-bs-placement="top">Home</a>
                    </li>
                    <li><a href="{{ route('about') }}" title="About" data-bs-toggle="tooltip"
                            data-bs-placement="top">About</a></li>
                    <li><a href="{{ route('privacy') }}" title="Privacy Policy" data-bs-toggle="tooltip"
                            data-bs-placement="top">Privacy Policy</a></li>
                    <li><a href="{{ route('termsCondition') }}" title="Terms & Condition" data-bs-toggle="tooltip"
                            data-bs-placement="top">Terms & Condition</a></li>
                    <li><a href="{{ route('contact') }}" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Contact">Contact</a></li>
                    <li><a href="{{ route('all_tag') }}" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Tags">Tags</a>
                    </li>
                    <li><a href="{{ route('all_category') }}" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Cattegory">Cattegory</a></li>
                </ul>
            </div>
        </div>
        <nav class="nav">
            <ul class="navitem">
                @foreach ($categories->take(5) as $category)
                    <li><a href="{{ route('categoryGame', $category->slug) }}" title="{{ $category->title }}"><i
                                class="{{ $category->icon_class }}"></i> {{ $category->title }}</a></li>
                @endforeach
            </ul>
        </nav>
        <div class="search-box">
            <form action="" method="GET">
                <div class="serarch_box">
                    <div class="search">
                        <div class="search_bar"><input type="text" name="search" id=""
                                placeholder="Search Game"></div>
                        <div class="search_btn"><button type="submit"><i class="uil uil-search"></i></button></div>
                    </div>
                </div>
            </form>
        </div>
        <div class="menu-btn">
            <div class="menu-btn-burger"></div>
        </div>
    </div>
    <div class="mobile_menu">
        <div class="single_nav">
            <ul>
                <li><a href="moregames.html" title="Action"><i class="uil uil-fire"></i> Action</a></li>
                <li><a href="moregames.html" title="Adventure"> <i class="fas fa-hiking"></i> Adventure</a></li>
                <li><a href="moregames.html" title="Arcade"><i class="uil uil-map-pin"></i> Arcade</a></li>
                <li><a href="moregames.html" title="Io games"><i class="uil uil-user-plus"></i> Io Games</a></li>
            </ul>
        </div>
        <div class="single_nav">
            <ul>
                <li><a href="moregames.html" title="Multiplayer"> <i class="uil uil-users-alt"></i>
                        Multiplayer</a></li>
                <li><a href="moregames.html" title="Racing"> <i class="fas fa-biking"></i> Racing</a></li>
                <li><a href="moregames.html" title="Shooting"><i class="uil uil-crosshair-alt"></i> Shooting</a>
                </li>
                <li><a href="moregames.html" title="HyperCasual"><i class="uil uil-redo"></i> HyperCasual</a>
                </li>
            </ul>
        </div>
        <div class="single_nav">
            <ul>
                <li><a href="moregames.html" title="Classics"> <i class="uil uil-dice-five"></i> Classics</a>
                </li>
                <li><a href="moregames.html" title="Clicker"><i class="fas fa-mouse-pointer"></i> Clicker</a>
                </li>
                <li><a href="moregames.html" title="Beauty"><i class="uil uil-flower"></i> Beauty</a></li>
                <li><a href="moregames.html" title="Sports"><i class="uil uil-football"></i> Sports</a></li>
            </ul>
        </div>
        <div class="single_nav">
            <ul>
                <li><a href="moregames.html" title="Strategy"><i class="fas fa-chess-knight"></i> Strategy </a>
                </li>
                <li><a href="moregames.html" title="Puzzle"><i class="fas fa-puzzle-piece"></i> Puzzle</a></li>
                <li><a href="moregames.html" title="Soccer"><i class="uil uil-football-american"></i> Soccer</a>
                </li>
                <li><a href="moregames.html" title="Cooking"> <i class="uil uil-utensils"></i> Cooking </a></li>
            </ul>
        </div>
        <div class="single_nav d-lg-block d-none">
            <ul>
                <li><a href="moregames.html" title="BabyHazel"><i class="uil uil-kid"></i> BabyHazel </a></li>
                <li><a href="moregames.html" title="Junior"><i class="uil uil-grin"></i> Junior </a></li>
                <li><a href="moregames.html" title="Educational"><i class="uil uil-book-alt"></i> Educational</a>
                </li>
                <li><a href="moregames.html" title="Stickman"><i class="fas fa-user-ninja"></i> Stickman</a></li>
            </ul>
        </div>
    </div>
</header>
<button id="scrollTop" onclick="topScroll()" class="{{ request()->routeIs('gamePlay') ? 'sm-hide' : '' }}"><i
        class="fas fa-angle-double-up"></i></button>
<!-- ===================================== -->
<!-- HEADER PART END -->
<!-- ===================================== -->

<!-- ===================================== -->
<!-- COOKIBOX PART START  -->
<!-- =====================================
    <div class="container-fluid">
        <div class="cookie-container">
            <h2>Terms & Condition</h2>
            <p>We use cookies in this website to give you the best experience on your site and show you relevant ads. To
                find out more, our <a href="privacypolicy.html">Privacy Policy</a> and <a href="#">Terms &
                    Condition</a></p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam, vitae quis? Iste harum, necessitatibus,
                et voluptates vitae, quod explicabo assumenda vero sint soluta alias officia.</p>
            <button class="primary_btn" id="cookies_btn">Accept All Cookies</button>
        </div>
    </div>
    <!-- ===================================== -->
<!-- COOKIBOX PART END  -->
<!-- ===================================== -->


<!-- ===================================== -->
<!-- HEADER PART END -->
<!-- ===================================== -->
