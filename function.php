<?php
/*------Connection BD------*/
function connectionBd(){

  $dbname="test";
  $servername = "localhost";
  $username = "root";
  $password = "";
     //connection
     try {
         $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

        } catch (Exception $e) {
          die('Erreur : ' . $e->getMessage());
        }
     return $conn;
}

function showBDNews(){
     $conn = connectionBd();
     $query = "SELECT * FROM `news`";
     $req = $conn->prepare($query);
     $req->execute();
     $result = $req->fetchAll();
     foreach ($result as $value) {
       creatCardNews($value['image'],$value['title'],$value['description']);
     }
     $req->closeCursor();
}

function showBDServices(){
  $conn = connectionBd();
  $query = "SELECT * FROM `services`";
  $req = $conn->prepare($query);
  $req->execute();
  $result = $req->fetchAll();
  foreach ($result as $value) {
    creatCardServices($value['image'],$value['title'],$value['className'],$value['description']);
  }
  $req->closeCursor();
}

function showBDServices2(){
  $conn = connectionBd();
  $query = "SELECT * FROM `services2`";
  $req = $conn->prepare($query);
  $req->execute();
  $result = $req->fetchAll();
  foreach ($result as $value) {
    creatCardServices($value['image'],$value['title'],$value['className'],$value['description']);
  }
  $req->closeCursor();
}

function showBDFeatured(){
  $conn = connectionBd();
  $query = "SELECT * FROM `featured`";
  $req = $conn->prepare($query);
  $req->execute();
  $result = $req->fetchAll();
  foreach ($result as $value) {
    creatCarouselFeatured($value['image'],$value['image2'],$value['image3'],$value['image4']);
  }
  $req->closeCursor();
}
/*------\Connection BD------*/

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

function creatCardServices($img,$title,$className,$txt){
  echo '
  <div class="card '.$className.'" id="'.$className.'">
    <img src="'.$img.'" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">'.$title.'</h5>
      <div class="txt-card"><p class="card-text">'.$txt.'</p></div>
      <div class="link-card"><a href="#">Learn More →</a></div>
    </div>
  </div>
  ';
}

function creatCardNews($img,$title,$date){
  echo '
  <div class="card card-news">
    <img src="'.$img.'" alt="...">
    <div class="card-body">
      <div class="date row">
        <img src="img/cal.png" class="imgCal" alt="...">
        <p>'.$date.'</p>
      </div>
      <h5 class="card-title">'.$title.'</h5>
    </div>
  </div>
  ';
}

function creatCarouselEvents(){
  echo '
  <div id="sliderEvents">
    <div id="ce1" class="diapoSliderEvents">
      <div class="cardEvents ce1 col">
        <div class="topCardEvents row">
          <div class="dateCardEvents">
            <p id="numDateCardEvents">23</p>
            <p id="monthDateCardEvents">Dec<p>
          </div>
          <h5>Macquarie University, Sydney,<br> Australia<h5>
        </div>
        <div class="txt-cardEvents">
        <p>Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. Iure et consectetur dolorem dicta accusantium fugiat.</p>
        </div>
        <div class="dwonCardEvents">
          <a href="#">Learn More →</a>
          <div class="hourCardEvents row">
            <img src="img/time.png" alt="time">
            <p>10:00 AM - 2:00PM</p>
          </div>
        </div>
      </div>
      <div class="cardEvents ce2 col">
        <div class="topCardEvents row">
          <div class="dateCardEvents">
            <p id="numDateCardEvents">17</p>
            <p id="monthDateCardEvents">Oct<p>
          </div>
          <h5>Federation University, Australia<h5>
        </div>
        <div class="txt-cardEvents">
        <p>Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. Iure et consectetur dolorem dicta accusantium fugiat.</p>
        </div>
        <div class="dwonCardEvents">
          <a href="#">Learn More →</a>
          <div class="hourCardEvents row">
            <img src="img/time.png" alt="time">
            <p>10:00 AM - 2:00PM</p>
          </div>
        </div>
      </div>
    </div>
    <div id="ce2" class="diapoSliderEvents">
      <div class="cardEvents ce1 col">
        <div class="topCardEvents row">
          <div class="dateCardEvents">
            <p id="numDateCardEvents">28</p>
            <p id="monthDateCardEvents">Jan<p>
          </div>
          <h5>WiiBus University, Australia<h5>
        </div>
        <div class="txt-cardEvents">
        <p>Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. Iure et consectetur dolorem dicta accusantium fugiat.</p>
        </div>
        <div class="dwonCardEvents">
          <a href="#">Learn More →</a>
          <div class="hourCardEvents row">
            <img src="img/time.png" alt="time">
            <p>10:00 AM - 2:00PM</p>
          </div>
        </div>
      </div>
      <div class="cardEvents ce2 col">
        <div class="topCardEvents row">
          <div class="dateCardEvents">
            <p id="numDateCardEvents">18</p>
            <p id="monthDateCardEvents">Mar<p>
          </div>
          <h5>PK Saiko Kusuo University,Sidney,<br> Australia<h5>
        </div>
        <div class="txt-cardEvents">
        <p>Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. Iure et consectetur dolorem dicta accusantium fugiat.</p>
        </div>
        <div class="dwonCardEvents">
          <a href="#">Learn More →</a>
          <div class="hourCardEvents row">
            <img src="img/time.png" alt="time">
            <p>10:00 AM - 2:00PM</p>
          </div>
        </div>
      </div>
    </div>
    <div id="ce3" class="diapoSliderEvents">
      <div class="cardEvents ce1 col">
        <div class="topCardEvents row">
          <div class="dateCardEvents">
            <p id="numDateCardEvents">02</p>
            <p id="monthDateCardEvents">Nov<p>
          </div>
          <h5>TrapHouse University, Sydney,<br> Australia<h5>
        </div>
        <div class="txt-cardEvents">
        <p>Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. Iure et consectetur dolorem dicta accusantium fugiat.</p>
        </div>
        <div class="dwonCardEvents">
          <a href="#">Learn More →</a>
          <div class="hourCardEvents row">
            <img src="img/time.png" alt="time">
            <p>10:00 AM - 2:00PM</p>
          </div>
        </div>
      </div>
      <div class="cardEvents ce2 col">
      <div class="topCardEvents row">
        <div class="dateCardEvents">
          <p id="numDateCardEvents">03</p>
          <p id="monthDateCardEvents">Dec<p>
        </div>
        <h5>Zumba University, Sydney,<br> Australia<h5>
      </div>
      <div class="txt-cardEvents">
      <p>Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. Iure et consectetur dolorem dicta accusantium fugiat.</p>
      </div>
      <div class="dwonCardEvents">
        <a href="#">Learn More →</a>
        <div class="hourCardEvents row">
          <img src="img/time.png" alt="time">
          <p>10:00 AM - 2:00PM</p>
        </div>
      </div>
      </div>
    </div>
    <div id="ce4" class="diapoSliderEvents">
      <div class="cardEvents ce1 col">
        <div class="topCardEvents row">
          <div class="dateCardEvents">
            <p id="numDateCardEvents">12</p>
            <p id="monthDateCardEvents">Avr<p>
          </div>
          <h5>Screed University, Sydney,<br> Australia<h5>
        </div>
        <div class="txt-cardEvents">
        <p>Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. Iure et consectetur dolorem dicta accusantium fugiat.</p>
        </div>
        <div class="dwonCardEvents">
          <a href="#">Learn More →</a>
          <div class="hourCardEvents row">
            <img src="img/time.png" alt="time">
            <p>10:00 AM - 2:00PM</p>
          </div>
        </div>
      </div>
      <div class="cardEvents ce2 col">
        <div class="topCardEvents row">
          <div class="dateCardEvents">
            <p id="numDateCardEvents">02</p>
            <p id="monthDateCardEvents">Jan<p>
          </div>
          <h5>Divia University, Australia<h5>
        </div>
        <div class="txt-cardEvents">
        <p>Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. Iure et consectetur dolorem dicta accusantium fugiat.</p>
        </div>
        <div class="dwonCardEvents">
          <a href="#">Learn More →</a>
          <div class="hourCardEvents row">
            <img src="img/time.png" alt="time">
            <p>10:00 AM - 2:00PM</p>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="navigationEvents row">
      <div class="rondNavEvents" id="re1"></div>
      <div class="rondNavEvents" id="re2"></div>
      <div class="rondNavEvents" id="re3"></div>
      <div class="rondNavEvents" id="re4"></div>
    </div>
  ';
}
