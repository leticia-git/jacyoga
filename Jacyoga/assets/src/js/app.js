
jQuery(function () {
  jQuery('.JsBanner').slick(
    {
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: true,
      dots: true,
      arrows: false,
      autoplay: false,
      autoplaySpeed: 2000,
    }
  );
  jQuery('.depoimentos').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: false,
    arrows: true,
    autoplaySpeed: 2000,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
          arrows: false
        }
      }]
  });
  
  
});
