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
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    }
  ]
});
