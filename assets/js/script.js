var nav = document.querySelector(".home-nav");
var navMain = document.querySelector("nav")
var navInner = document.querySelector(".inner-nav");
var topnav = document.getElementsByClassName("top-header");


window.addEventListener('scroll',(e)=>{
  if(window.pageYOffset>0){
    navMain.classList.add("nav-shadow");

  }else{
    navMain.classList.remove("nav-shadow");

  }
});

$(".navbar-toggler").click(() => {
  $(".navbar").toggleClass("bg-white");
  $(".navbar").toggleClass("navbar-dark");
});
















