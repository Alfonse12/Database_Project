
<?php
  $active='Cart';
  include("includes/header.php");
 ?>

<div id="content">
  <div class="container">
    <div class="col-md-12">
      <ul class="breadcrumb">

        <li>
          <a href="index.php">Home</a>
        </li>

        <li>
              Shop
        </li>

      </ul>
    </div>

  <div class="col-md-3">

    <?php
      include("includes/sidebar.php");
    ?>

  </div>

    <div class="col-md-9">
      <div id="productMain" class="row">     <!-- Row Start -->
        <div class="col-sm-6">                <!-- COl 6 Start -->
          <div id="mainImage">      <!-- Main image Start -->
            <div id="myCarousel" class="carousel slide" data-ride="carousel"> <!-- myCarousel Start -->
              <ol class="carousel-indicators">  <!-- myCarousel indicators Start -->
                <li data-target="myCarousel" data-slide-to="0" class="active"></li>   <!-- li Start -->
                <li data-target="myCarousel" data-slide-to="1"></li>
                <li data-target="myCarousel" data-slide-to="2"></li>
              </ol> <!-- myCarousel indicators end -->

              <div class="carousel-inner">
                <div class="item active">
                  <center><img class="img-responsive" src="admin_area/product_images/kids.jpg" alt="Product kids">
                  </center>
                </div>
                <div class="item">
                  <center><img class="img-responsive" src="admin_area/slides_images/pot.jpg" alt="Product pot" >
                  </center>
                </div>
                <div class="item">
                  <center><img class="img-responsive" src="admin_area/slides_images/tree.jpg" alt="Product tree" >
                  </center>
                </div>

              </div>

                <a href="myCarousel" class="left carousel-control" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a href="myCarousel" class="right carousel-control" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Next</span>
                </a>

            </div>
          </div>
        </div>

          <div class="col-sm-6"> <!-- start -->
            <div class="box">  <!-- start -->
              <h1 class="text-center">Painting Art </h1> <!-- start -->

              <?php
                  add_cart();
              ?>

                <form action="index.php?add_cart=<?php echo $ProductNo; ?>" class="form-horizontal" method="post"><!-- start -->
                  <div class="form-group"><!-- start -->
                    <label for="" class="col-md-5 control-label" required >Products Quantity</label><!-- start -->

                      <div class="col-md-7"> <!-- start -->
                        <select name="product_qty" id="" class="form-control"><!-- start -->
                        <option >1</option><!-- start -->
                        <option >2</option>
                        <option >3</option>
                        <option >4</option>
                        <option >5</option>
                        <option >6</option>
                        <option >7</option>
                        <option >8</option>
                        <option >9</option>
                        <option >10</option>
                      </select>
                      </div>
                  </div>

                  <div class="form-group">

                    <label class="col-md-5 control-label">Product Size</label>

                      <div class="col-md-7">

                        <select name="product_size" class="form-control" required oninput="setCustomValidity('')" oninvalid="setCustomValidity('You Must Pick 1 size for the Product')">
                          <option disabled selected >Select a size</option>
                          <option >Extra Small</option>
                          <option >Small</option>
                          <option >Medium</option>
                          <option >Large</option>
                          <option >Extra Large</option>
                        </select> <!-- end -->

                      </div>

                  </div><!-- end -->

                  <p class="price"> $50 </p>
                  <p class="text-center buttons"><button class="btn btn-primary i fa fa-shopping-cart"> Add to cart</button></p>

                </form>


        </div><!-- end -->

      </div><!-- end -->

      <div class="box" id="details">

        <h4>product Details <h4>


        <p>
        This is the best of our products
        </p>

        <h4>Size</h4>

          <ul>
            <li>Extra Small</li>
            <li>small</li>
            <li>Medium</li>
            <li>Large</li>
            <li>Extra Large</li>
          </ul>

          <hr>




      </div>





      <div id="row same-heigh-row">
        <div class="col-md-3 col-sm-6">
          <div class="box same-height headline">
            <h3 class"text-center"> Products you may like</h3>
          </div>
        </div>

        <div class="col-md-3 col-sm-6 center-responsive">
          <div class="product same-height">
            <a href="details.php>">
              <img lass="img-responsive"src="admin_area/slides_images/pot11.jpg" alt="Product 1">
            </a>
            <div class="text">
              <h3><a href="details.php">The best for now</a></h3>
              <p class="price"> $0.55</p>
            </div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6 center-responsive">
        <div class="product same-height">
          <a href="details.php>">
            <img lass="img-responsive"src="admin_area/slides_images/pot11.jpg" alt="Product 1">
          </a>
          <div class="text">
            <h3><a href="details.php">The best for now</a></h3>
            <p class="price"> $2</p>
          </div>
      </div>
    </div>

    <div class="col-md-3 col-sm-6 center-responsive">
      <div class="product same-height">
        <a href="details.php>">
          <img lass="img-responsive"src="admin_area/slides_images/pot11.jpg" alt="Product 1">
        </a>
        <div class="text">
          <h3><a href="details.php">The best for now</a></h3>
          <p class="price"> $2.5</p>
        </div>
    </div>
  </div>
    </div><!-- end -->



  </div><!-- end -->
</div><!-- end -->

<?php
  include("includes/footer.php");
?>

<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>

  </body>

</html>
