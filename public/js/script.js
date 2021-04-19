$('.my-slider').slick({
  centerMode: true,
  slidesToShow: 1,
    dots: true,
    autoplay: true,
    autoplaySpeed: 2000,
    centerPadding: '40px',
  responsive: [
    // {
    //     breakpoint: 1920,
    //     settings: {
    //       arrows: false,
    //       centerMode: true,
    //       centerPadding: '20px',
    //       slidesToShow: 1
    //     }
    //   },

    //   {
    //     breakpoint: 1360,
    //     settings: {
    //       arrows: false,
    //       centerMode: true,
    //       centerPadding: '20px',
    //       slidesToShow: 1
    //     }
    //   },
    {
      breakpoint: 320,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '180px',
        slidesToShow: 1
      }
    }
  ]
});
