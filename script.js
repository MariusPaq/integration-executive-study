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

//Cards Events
var cardsslide = document.getElementById('ce1');
var cardsslide2 = document.getElementById('ce2');
var cardsslide3 = document.getElementById('ce3');
var cardsslide4 = document.getElementById('ce4');
var rondNavEvents = document.getElementById('re1');
var rondNavEvents2 = document.getElementById('re2');
var rondNavEvents3 = document.getElementById('re3');
var rondNavEvents4 = document.getElementById('re4');
cardsslide2.style.display="none";
cardsslide3.style.display="none";
cardsslide4.style.display="none";
rondNavEvents.style.backgroundColor="blue";
rondNavEvents.addEventListener("click", function(){
  rondNavEvents.style.backgroundColor="blue";
  rondNavEvents2.style.backgroundColor="gray";
  rondNavEvents3.style.backgroundColor="gray";
  rondNavEvents4.style.backgroundColor="gray";
  cardsslide.style.display="block";
  cardsslide2.style.display="none";
  cardsslide3.style.display="none";
  cardsslide4.style.display="none";
});
rondNavEvents2.addEventListener("click", function(){
  rondNavEvents2.style.backgroundColor="blue";
  rondNavEvents.style.backgroundColor="gray";
  rondNavEvents3.style.backgroundColor="gray";
  rondNavEvents4.style.backgroundColor="gray";
  cardsslide.style.display="none";
  cardsslide2.style.display="block";
  cardsslide3.style.display="none";
  cardsslide4.style.display="none";
});
rondNavEvents3.addEventListener("click", function(){
  rondNavEvents3.style.backgroundColor="blue";
  rondNavEvents.style.backgroundColor="gray";
  rondNavEvents2.style.backgroundColor="gray";
  rondNavEvents4.style.backgroundColor="gray";
  cardsslide.style.display="none";
  cardsslide2.style.display="none";
  cardsslide3.style.display="block";
  cardsslide4.style.display="none";
});
rondNavEvents4.addEventListener("click", function(){
  rondNavEvents4.style.backgroundColor="blue";
  rondNavEvents.style.backgroundColor="gray";
  rondNavEvents2.style.backgroundColor="gray";
  rondNavEvents3.style.backgroundColor="gray";
  cardsslide.style.display="none";
  cardsslide2.style.display="none";
  cardsslide3.style.display="none";
  cardsslide4.style.display="block";
});//Cards Events
