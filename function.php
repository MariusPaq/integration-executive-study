<?php
function creatCarouselFeatured($img1,$img2,$img3,$img4){
  echo '
  <div class="top-content">
      <div class="container-fluid">
          <div id="carousel-example" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner row w-100 mx-auto" role="listbox">
                  <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
                      <img src="'.$img1.'" class="img-fluid mx-auto d-block" alt="img1">
                  </div>
                  <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                      <img src="'.$img2.'" class="img-fluid mx-auto d-block" alt="img2">
                  </div>
                  <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                      <img src="'.$img3.'" class="img-fluid mx-auto d-block" alt="img3">
                  </div>
                  <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                      <img src="'.$img4.'" class="img-fluid mx-auto d-block" alt="img4">
                  </div>
                  <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                      <img src="'.$img1.'" class="img-fluid mx-auto d-block" alt="img5">
                  </div>
                  <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                      <img src="'.$img2.'" class="img-fluid mx-auto d-block" alt="img6">
                  </div>
                  <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                      <img src="'.$img3.'" class="img-fluid mx-auto d-block" alt="img7">
                  </div>
                  <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                      <img src="'.$img4.'" class="img-fluid mx-auto d-block" alt="img8">
                  </div>
              </div><!--carousel-inner-->
              <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
              </a>
          </div><!--carousel slide-->
      </div>
  </div>
  ';
}

function creatCardServices($img,$title,$className){
  echo '
  <div class="card '.$className.'">
    <img src="'.$img.'" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">'.$title.'</h5>
      <div class="txt-card"><p class="card-text">Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. Iure et consectetur dolorem dicta accusantium fugiat.</p></div>
      <div class="link-card"><a href="#">Learn More →</a></div>
    </div>
  </div>
  ';
}

function creatCardNews($img,$title){
  echo '
  <div class="card card-news">
    <img src="'.$img.'" alt="...">
    <div class="card-body">
      <div class="date row">
        <img src="img/cal.png" class="imgCal" alt="...">
        <p>17 Apr 2020</p>
      </div>
      <h5 class="card-title">'.$title.'</h5>
    </div>
  </div>
  ';
}

function cardCarousel(){
  echo '
    <div class="slidecardCarousel row">

      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
  ';
}

function creatCarouselEvents(){
  echo '
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">';
      cardCarousel();
echo '
    </div>
    <div class="carousel-item">';
    cardCarousel();
echo '
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
';
}
