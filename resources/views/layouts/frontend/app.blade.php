<!DOCTYPE html>
<html lang="en">

<head>


<!-- WG Connector Start -->
<link rel="dns-prefetch" href="https://universal.wgplayer.com"/><script type="text/javascript" async>!function(e,t){a=e.createElement("script"),m=e.getElementsByTagName("script")[0],a.async=1,a.src=t,a.fetchPriority='high',m.parentNode.insertBefore(a,m)}(document,"https://universal.wgplayer.com/tag/?lh="+window.location.hostname+"&wp="+window.location.pathname+"&ws="+window.location.search);</script>
<!-- WG Connector End -->
    <meta charset="UTF-8">
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="twitter:title" content="Add title here">
    <meta name="twitter:description" content="Add description here">
    <meta name="twitter:url" content="https://your-website.com/twitter-image.png">
    <meta name="twitter:card" content="summary">
    @yield('header')


    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MLWGDHQ');</script>
    <!-- End Google Tag Manager -->

<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '638851951035308');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=638851951035308&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->


    <link rel="shortcut icon" href="{{ asset('assets/frontend/images/favicon/favicon.png') }}" type="image/x-icon">

    <!-- ==========OWL CAROUSEL CSS LINK========== -->
    <link async rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <!-- ==========OWL CAROUSEL CSS LINK========== -->
    <link async rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <!-- ==========SWIPER SLIDER CSS LINK========== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.1.0/swiper-bundle.min.css">
    <!-- ==========GLIGHBOX  CSS LINK========== -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/glightbox/css/glightbox.min.css') }}">
    <!-- ==========BOOTSTARP CSS LINK========== -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/bootstarp5/css/bootstrap.min.css') }}">
    <!-- ==========FONTAWESOME CSS LINK========== -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/font-awesome/css/all.min.css') }}">
    <!-- ==========UNICONS CSS LINK========== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- ==========RAJDHANI GOOGLE FONT LINK========== -->
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- ==========CUSTOM CSS LINK========== -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/main.css') }}">
    <!-- ==========RESPONSIVE CSS LINK========== -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/responsive.css') }}">
</head>

<body>


        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MLWGDHQ"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->




    @include('partials.frontend.header')

    @yield('frontend_content')

    @include('partials.frontend.footer')



    <!-- ==========JS HERE========== -->
    <!-- ==========MAIN JQUREY LINK========== -->
    <script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- ==========BOOTSTARP JS BUNDLE========== -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js"></script>
    <!-- ==========BOOTSTARP JS========== -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.bundle.min.js"></script>
    <!-- ==========SWIPER SLIDER JS ========== -->
    <script  src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.1.0/swiper-bundle.min.js"></script>
    <!-- ==========OWL CAROUSEL  JS========== -->
    <script  src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- ==========GLIGHTBOX JS ========== -->
    <script src="{{ asset('assets/frontend/vendors/glightbox/js/glightbox.min.js') }}"></script>
    <!-- ==========LORD  ICON JS ========== -->
    <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
    <!-- ==========CUSTOM JS ========== -->
    <script src="{{ asset('assets/frontend/js/app.js') }}"></script>
    @yield('frontend_script')
    <script>
        // ======================================
        // COOKIES ACTIVATION CODE
        // ======================================

        // const cookieContainer = document.querySelector(".cookie-container");
        // const cookieBtn = document.querySelector("#cookies_btn");

        // cookieBtn.addEventListener("click", () => {
        //     cookieContainer.classList.remove("active");
        //     localStorage.setItem("cookieBannerDisplayed", "true");
        // });

        // setTimeout(() => {
        //     if (!localStorage.getItem("cookieBannerDisplayed"))
        //         cookieContainer.classList.add("active");
        // }, 100);



        VanillaTilt.init(document.querySelectorAll(".cattegoryBx", ".tagCard", ), {
            max: 25,
            speed: 1000,
            reverse: true,
            glare: true,
            "max-glare": 1,
            maxTilt: 20,
            perspective: 1000, // Transform perspective, the lower the more extreme the tilt gets.
            easing: "cubic-bezier(.01,.18,.52,.09)", // Easing on enter/exit.
            scale: 1, // 2 = 200%, 1.5 = 150%, etc..
            speed: 300, // Speed of the enter/exit transition.
            transition: true, // Set a transition on enter/exit.
            disableAxis: true, // What axis should be disabled. Can be X or Y.
            reset: true, // If the tilt effect has to be reset on exit.
            glare: false, // Enables glare effect
            maxGlare: 1 // From 0 - 1.
        });
    </script>

</body>

</html>
