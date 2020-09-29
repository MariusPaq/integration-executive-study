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

//margin auto mb 80px
function changeclassflex(){
  //Services
  var services = document.getElementById('services');
  var cardsServices = document.getElementById('flexServices');
  var cardsServices2 = document.getElementById('flexServices2');
  var cardsfirst = document.getElementById('firstCard');
  var cardsafter = document.getElementsByClassName('afterCard');
  //news
  var news = document.getElementById('news');
  var flexCardsNews = document.getElementById('cardsNews');
  var cardsNews = document.getElementsByClassName('card-news');
  var btNews = document.getElementById('btNews');
  //
  var body = document.body;
  var width = body.clientWidth;

  if (width <= 800){
    //Services
    cardsServices.className = "d-flex flex-column justify-content-center";
    cardsServices2.className = "d-flex flex-column justify-content-center";
    cardsfirst.className = "card firstCard responsiveCards";
    Array.prototype.forEach.call(cardsafter, function(i){
      i.className = "card afterCard responsiveCards";
    })
    services.style.height="2550px";
    //news
    flexCardsNews.className = "d-flex flex-column justify-content-center";
    Array.prototype.forEach.call(cardsNews, function(i){
      i.className = "card card-news responsiveCards";
    })
    news.style.height="2000px";
    flexCardsNews.style.marginTop="40px";
    btNews.style.marginTop="100px";
  } else {
    //Services
    cardsServices.className = "d-flex justify-content-center";
    cardsServices2.className = "d-flex justify-content-center";
    cardsfirst.className = "card firstCard";
    Array.prototype.forEach.call(cardsafter, function(i){
      i.className = "card afterCard";
    })
    services.style.height="1269px";
    //News
    flexCardsNews.className = "d-flex justify-content-center";
    Array.prototype.forEach.call(cardsNews, function(i){
      i.className = "card card-news";
    })
    news.style.height="1120px";
    flexCardsNews.style.marginTop="100px";
    btNews.style.marginTop="100px";
  }
}

function changeDreams(){
  var txt = document.getElementById('txt-dreams');
  var bt = document.getElementById('btDreams');
  var body = document.body;
  var width = body.clientWidth;
  if (width <= 800){
    txt.className = "responsiveDreams";
    bt.className = "btn-grad responsiveDreams";
  } else {
    txt.className = "";
    bt.className = "btn-grad";
  }
}

function loop(){
  changeclassflex();
  changeDreams();
}

setInterval(loop,100);
