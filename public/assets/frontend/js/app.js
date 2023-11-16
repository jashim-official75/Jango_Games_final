

// ======================================
// DROPDOWN ACTIVE 
// ======================================
$(document).ready(function () {
  $("#menu").click(function () {
    $("ul").toggleClass("active");
    $("#icon_chevron").toggleClass("fa-chevron-up");
  });
});
// ======================================
// SEEMORE ACTIVE 
// ======================================

$(document).ready(function () {
  $('.see_more').click(function () {
    if ($('.Content_wrapper').hasClass("active")) {
      // $('.see_more-btn').html('See more');
      $('.see_more-btn').html($('<i/>', {
        class: 'fas fa-chevron-down'
      })).append('&nbsp;&nbsp;').append('Show More');
      $('.Content_wrapper').removeClass("active");

    } else {
      // $('.see_more-btn').html('See less');
      $('.Content_wrapper').addClass("active");

      $('.see_more-btn').html($('<i/>', {
        class: 'fas fa-chevron-up'
      })).append('&nbsp;&nbsp;').append('Show Less');

    }
  });
});




// ================================
// SWIPER 4
// ================================

// var swiper = new Swiper(".mySwiper4", {
//   loop: true,
//   slidesPerView: 1,
//   spaceBetween: 10,
//   freeMode: true,
//   speed: 800,
//   grabCursor:true,
//   nav:true,
//   mousewheel: {
//     invert: false,
//   },
//   autoplay: {
//     delay: 3000,
//     disableOnInteraction: false,
//   },
//   pagination: {
//     el: ".swiper-pagination",
//     clickable: true,
//   },
//   breakpoints: {
//     "@0.00": {
//       slidesPerView: 1,
//       spaceBetween: 0,
//     },
//     "@0.75": {
//       slidesPerView: 2,
//       spaceBetween: 10,
//     },
//     "@1.00": {
//       slidesPerView: 3,
//       spaceBetween: 10,
//     },
//     "@1.20": {
//       slidesPerView: 3,
//       spaceBetween: 10,
//     },
//     "@1.50": {
//       slidesPerView: 3,
//       spaceBetween: 10,
//     },
//     "@1.75": {
//       slidesPerView: 4,
//       spaceBetween: 10,
//     },
//     "@2.00": {
//       slidesPerView: 4,
//       spaceBetween: 10,
//     },
//   },
// });

// ================================
// SWIPER 3
// ================================

var myswiper3 = new Swiper(".mySwiper3", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "auto",
  centeredSlides: true,
  loop: true,
  initialSlide: 1,
  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 30,
    modifier: 5,
    initialSlide: 5,
    slideShadows: true,
  },

});



// ======================================
// GLIGHTBOX
// ======================================
const lightbox = GLightbox({
  touchNavigation: true,
  loop: true,
  autoplayVideos: true,
});
// ======================================
// OWL-CAROUSEL
// ======================================
// one
$('.best-gameVdo').owlCarousel({
  loop: true,
  autoplay: true,
  animateOut: "fadeOut",
  animateIn: "flipInX",
  items: 1,
  autoplayTimeout: 3000,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 1
    },
    1000: {
      items: 1
    }
  }
});
// two
$('.best-gameImg').owlCarousel({
  loop: true,
  margin: 10,
  nav: false,
  autoplay: true,
  autoplayTimeout: 3000,
  animateOut: 'fadeOut',
  animateIn: 'fadeIn',
  smartSpeed: 800,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 1
    },
    1000: {
      items: 1
    }
  }
});


// three FEATURED GAME
$('.featured_game-wrapper').owlCarousel({
  loop: true,
  nav: true,
  infinite:true,
  margin: 10,
  items: 9,
  slideBy: 9,
  dots: false,
  navText: [
    "<i class='fas fa-chevron-left'></i>",
    "<i class='fas fa-chevron-right'></i>"
  ],
  responsive: {
    0: {
      items: 2,

    },
       450: {
      items: 3,
      margin:0,

    },
    600: {
      items: 3,

         
    },
       768: {
      items: 4,


    },
    1000: {
      items: 6,

    },
    1200: {
      items: 6,
       slideBy: 6, 

    },
    1300: {
      items: 7,

    },
    1400: {
      items: 8,

    },
    1600: {
      items: 8,

    },
    1700: {
      items: 8,

    },
    1900: {
      items: 10,


    }
  }
});

// FOUR TESTOMONIAL
$('.testomonial_wrapper').owlCarousel({
  loop: true,
  nav: true,
  infinite:true,
  margin: 10,
  grabCursor:true,
  autoplay: true,
  autoplayTimeout: 3000,
  animateOut: 'fadeOut',
  animateIn: 'fadeIn',
  smartSpeed: 800,
  autoplayHoverPause: true,
  items: 4,
  dots: true,
  navText: [
    "<i class='fas fa-chevron-left'></i>",
    "<i class='fas fa-chevron-right'></i>"
  ],
  responsive: {
    0: {
      items: 1,

    },
       450: {
      items: 1,
      margin:0,

    },
    600: {
      items: 2,

         
    },
       768: {
      items: 2,


    },
    1000: {
      items: 2,

    },
    1200: {
      items: 2,
       slideBy: 6, 

    },
    1300: {
      items: 3,

    },
    1400: {
      items: 3,

    },
    1600: {
      items: 4,

    },
    1700: {
      items: 4,

    },
    1900: {
      items: 4,


    }
  }
});





// ======================================
// HUBBURGER ACTIVE
// ======================================
const menuBtn = document.querySelector('.menu-btn');
var mobileMenu = document.querySelector('.mobile_menu');
let menuOpen = false;
menuBtn.addEventListener('click', () => {
    if(!menuOpen) {
        menuBtn.classList.add('open');
        menuOpen = true;
        mobileMenu.classList.toggle("active");
    } else{
        menuBtn.classList.remove('open');
        menuOpen = false;
        mobileMenu.classList.toggle("active");
    }
});


// ======================================
// FULLSCREEN MODE 
// ======================================

const fullScreenBtn = document.getElementById('openScreen');
const elem = document.getElementById('fullScreen');

fullScreenBtn.addEventListener("click", () => {
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  } else if (elem.webkitRequestFullscreen) {
    elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) {
    elem.msRequestFullscreen();
  }
});
const openBtn = document.getElementById('openScreen_md');
const element = document.getElementById('fullScreen_md');

openBtn.addEventListener("click", () => {
  if (element.requestFullscreen) {
    element.requestFullscreen();
  } else if (element.webkitRequestFullscreen) {
    element.webkitRequestFullscreen();
  } else if (element.msRequestFullscreen) {
    element.msRequestFullscreen();
  }
});



// ======================================
// READ MORE BUTTON
// ======================================

$(document).ready(function () {
  $(".read_more_btn").click(function () {
    var elem = $(".read_more_btn").text();
    if (elem == "Read More") {
      //Stuff to do when btn is in the read more state
      $(".read_more_btn").text("Read Less");
      $("#load_more_text").slideDown(500);
    } else {
      //Stuff to do when btn is in the read less state
      $(".read_more_btn").text("Read More");
      $("#load_more_text").slideUp(500);
    }
  });
});




// ======================================
// topscroll
// ======================================

var myBtn = document.getElementById("scrollTop");
window.onscroll = function () {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    myBtn.style.opacity = "1";
    myBtn.style.transition = "0.3s";
    myBtn.style.transform = "scale(1)";

  } else {
    myBtn.style.opacity = "0";
    myBtn.style.transform = "scale(0)";
  }
}

function topScroll() {
  window.scrollTo({
    top: 0,
    right: 0,
    behavior: "smooth",
  })
}




// ======================================
// GENREBOX ACCORDION ACTIVATION CODE
// ======================================

