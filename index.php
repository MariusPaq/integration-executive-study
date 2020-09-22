<?php include 'header.php'?>
<div class="apply row">
    <div class="content col">
        <h2>We Help to <span class="txt-blue">Build</span><br> Your Dream</h2>
        <p id="txt-content">We are always to consult on taking your higher education to next level so you can stay competitive in the</p>
        <a href="#" id="btCv" class="btn-grad"><p>Apply Online →</p></a>
        <img class="resaux" src="img/facebook.png" alt="facebook">
        <img class="resaux" src="img/twiter.png" alt="twiter">
        <img class="resaux" src="img/insta.png" alt="">
    </div>
    <div class="imgApply col">
        <img id="oval" src="img/Oval.png" alt="ovale">
        <img id="etudiante" src="img/EdAtB8jXj6w0M9DE569cpU8q-removebg-preview (1).png" alt="">
    </div>
</div><!--apply-->
<div class="featured">
    <h3>featured Universities</h3>
    <!--carouselle-->
    <div class="carousel containerMod marginLRAuto">
        <?php creatCarouselFeatured('img/M1','img/M2','img/M3','img/M4') ?>
    </div><!--carousel-->
</div><!--featured-->
<div class="services containerMod marginLRAuto">
    <h3>Our Services</h3>
    <div class="txt-services marginLRAuto">
        <p>Executive Trade International is an University Application Centre, guiding Bangladeshi students to Australian, British, Canadian and Irish universities!</p>
    </div>
    <div class="card-services">
        <div class="d-flex justify-content-center">
            <?php showBDServices(); ?>
        </div><!--END d-flex-->
        <div class="d-flex justify-content-center">
            <?php showBDServices2(); ?>
        </div><!--\d-flex-->
    </div><!--\card-services-->
</div><!--services--->
<div class="news">
    <h3>News</h3>
    <div class="txt-news marginLRAuto">
        <p>Sunt autem nusquam hoc epicurus in gravissimo bello animadversionis metu degendae praesidia firmissima. Torquatos nostros? quos tu paulo ante cum teneam sententiam, quid bonum esse vult.</p>
    </div>
    <div class="card-news">
        <div class="d-flex justify-content-center">
            <?php showBDNews(); ?>
        </div><!--\d-flex-->
    </div>
    <a href="#" id="btNews" class="btn-grad"><p>Apply Online →</p></a>
</div><!--\news-->
<div class="events">
    <h3>Upcoming Universty Events</h3>
    <div class="txt-events marginLRAuto">
        <p>Sunt autem nusquam hoc epicurus in gravissimo bello animadversionis metu degendae praesidia firmissima. Torquatos nostros? quos tu paulo ante cum teneam sententiam, quid bonum esse vult.</p>
    </div>
    <div class="carouselCard-events"><!--test-->
        <?php creatCarouselEvents(); ?>
    </div>
</div><!--\events--->
<div class="countries">
    <h3>Countries We Covered</h3>
    <div class="txt-countries marginLRAuto">
        <p>Sunt autem nusquam hoc epicurus in gravissimo bello animadversionis metu degendae praesidia firmissima. Torquatos nostros? quos tu paulo ante cum teneam sententiam, quid bonum esse vult.</p>
    </div>
  <div class="carouselCard-countries">
  </div>
</div><!--\countries-->
<div class="testimonial">
    <h3>testimonial</h3>
    <div class="txt-testimonial marginLRAuto">
        <p>Sunt autem nusquam hoc epicurus in gravissimo bello animadversionis metu degendae praesidia firmissima. Torquatos nostros? quos tu paulo ante cum teneam sententiam, quid bonum esse vult.</p>
    </div>
  <div class="carouselCard-testimonial">
  </div>
</div><!--\testimonial-->
<div class="dreams">
    <p id="txt-dreams">Ready to chase your dreams ?</p>
    <a href="#" id="btCv" class="btn-grad"><p>Apply Online →</p></a>
</div><!--\dreams-->
<?php include 'footer.php'?>
