
jQuery(function () {
const hamburger = document.querySelector(".hamburger");
  const navMenu = document.querySelector(".nav-menu");
  
  hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
    hamburger.classList.toggle("hamb-resp"); 
  });
  
  document.querySelectorAll(".nav-link").forEach((link) =>
    link.addEventListener("click", () => {
      hamburger.classList.remove("active");
      navMenu.classList.remove("active");
    })
  );
  
  document.querySelectorAll(".nav-link").forEach((link) =>
    link.addEventListener("click", () => {
      hamburger.classList.remove("hamb-resp");
      navMenu.classList.remove("hamb-resp");
    })
  );
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
});


