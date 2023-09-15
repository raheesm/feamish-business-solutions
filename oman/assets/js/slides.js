$(".owl-service").owlCarousel({
    loop: true,
    margin: 80,
    responsiveClass: true,
    nav: false,
    dots: true,
    autoplay: true,
    autoplayTimeout: 4000,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 3,
      },
      1000: {
        items: 3,
        dotsEach: 2,
      },
    },
  });
  
  $(".owl-agency").owlCarousel({
    loop: true,
  
    margin: 120,
    stagePadding: 95,
    responsiveClass: true,
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 2500,
    responsive: {
      0: {
        items: 2,
      },
      600: {
        items: 3,
      },
      1000: {
        items: 4,
      },
    },
  });
  $(".owl-media").owlCarousel({
    center: false,
    loop: true,
    dots: false,
    
    stagePadding: 25,
    autoplay: true,
    autoplayTimeout: 2500,
    responsiveClass:true,
                responsive:{
                    // breakpoint from 0 up
                    0:{
                        items:1,
                        margin: 45,
                        
                    },
                    // breakpoint from 600 up
                    600:{
                        items:2,
                        margin: 5,
  
                    },
                    // breakpoint from 1000 up
                    1000:{
                        items:2,
                        margin: 30,
                    },
                    1400:{
                        items:3,
                        margin: 35,
                    }
                }
  });
  
  var swiper = new Swiper(".reviewSwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    slidesPerGroup: 3,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      "@0.00": {
        slidesPerView: 1,
        spaceBetween: 10,
      },
      "@0.75": {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      "@1.00": {
        slidesPerView: 2,
        spaceBetween: 40,
      },
      "@1.50": {
        slidesPerView: 3,
        spaceBetween: 50,
      },
    },
  });
  

  