<?php
  $active='Home';
  include("includes/header.php");
 ?>

<div class="container" id="slider"> <!--Slider container start here -->

  <div class="col-md-12">

    <div class="carousel slide" id="myCarousel" data-ride="carousel">

      <ol class="carousel-indicators">

        <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>

    </ol>

    <div class="carousel-inner">

      <div class="item active">

        <img src="admin_area/slides_images/pot1.jpg" alt="slider image 1" id="simage">

      </div>

      <div class="item">

        <img src="admin_area/slides_images/kangaroo.jpg" alt="slider image 2" id="simage">

      </div>

      <div class="item">

        <img src="admin_area/slides_images/aussie.jpg" alt="slider image 3" id="simage">

      </div>

      <div class="item">

        <img src="admin_area/slides_images/tree.jpg" alt="slider image 4" id="simage>

      </div>

    </div>

    <a href="#myCarousel" class="left carousel-control" data-slide="prev">

      <span class="glyphicon glyphicon-chevron-left"> </span>
      <span class="sr-only"> Previous </span>
    </a>

    <a href="#myCarousel" class="right carousel-control" data-slide="next">

      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only"> Next </span>
    </a>

    </div>


  </div>


</div><!--Slider container finish here -->

<div id="advantages">
  <div class="container">
    <div class="same-height-row">
      <div class="col-sm-4">
        <div class="box same-height">
          <div class="icon">
            <i class="fa fa-heart"></i>
          </div>
          <h3> <a href="#">Best offer </a> </h3>
          <p>We like to give you a good memory</p>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          <p></p>
        </div>
      </div>
       <div class="col-sm-4">
            <div class="box same-height">
              <div class="icon">
                  <i class="fa fa-tag"></i>
                </div>
                <h3> <a href="#">Best Price Ever </a> </h3>
                <p>We know about our product, we have the best price in store and online</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
        </div>
      <div class="col-sm-4">
        <div class="box same-height">
          <div class="icon">
            <i class="fa fa-thumbs-up"></i>
          </div>
          <h3> <a href="#"> 100% Original art </a> </h3>
          <p>We just can't let you down. free shiping in Australia</p>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<di id="hot">
  <div class="box">
    <div class="container">
      <div class="col-md-12">
        <h2> Our Latest Products </h2>
      </div>
    </div>
  </div>
</div>

<div id="content" class="container">
  <div class="row">

    <?php
      getPro();
     ?>

  </div>
</div>


<?php
  include("includes/footer.php");
?>


<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>

  </body>

</html>
