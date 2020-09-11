//BurgerMenu
var urlcourante = document.location.href;
var burgerMenu = document.getElementById("burgerMenu");
var topNav = document.getElementById("responsiveNav");

burgerMenu.addEventListener("click",function(){
    burgerMenu.classList.toggle("change");
    if (topNav.className === "topnav") {
      topNav.className += " responsive";
    } else {
      topNav.className = "topnav";
    }
})//BurgerMenu


//Carousel Featured
$('#carousel-example').on('slide.bs.carousel', function (e) {

    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 5;
    var totalItems = $('.carousel-item').length;

    if (idx >= totalItems-(itemsPerSlide-1)){
        var it = itemsPerSlide - (totalItems - idx);
        for (var i=0; i<it; i++) {
            if (e.direction=="left") {$('.carousel-item').eq(i).appendTo('.carousel-inner');}
            else {$('.carousel-item').eq(0).appendTo('.carousel-inner');}
        }
    }
});//Carousel Featured
