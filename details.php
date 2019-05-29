<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Darwin Art Online</title>

    <link href="vendor/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="styles/style.css" rel="stylesheet">
    <link href="styles/bootstrap.css" rel="stylesheet">
    <link href="styles/bootstrap-theme.min.css" rel="stylesheet">
    <link href="styles/bootstrap.min.css" rel="stylesheet">

  </head>

<div id="top"> <!--top begin here -->

  <div class="container"> <!--container begin here -->

    <div class ="col-md-6 offer"> <!--COllllll begin here -->

      <a href="#" class="btn btn-success btn-sm">Welcome </a>
        <a href="checkout.php"> 5 Items in Your Cart | Totat Price: $200 </a>

    </div> <!--COllllll finish here -->

    <div class="col-md-6"> <!--colll62 begin here -->

      <ul class="menu"><!--UL begin here -->

        <li>
            <a href="customer_register.php">Register</a>
        </li>
        <li>
          <a href="customer/my_account.php">My Account</a>
        </li>
        <li>
          <a href="cart.php">Go To Cart</a>
        </li>
        <li>
          <a href="checkout.php">Login</a>
        </li>


      </ul><!--Ul finish here -->

    </div> <!--COllllll62 finish here -->

  </div><!--container end here -->

</div>  <!--top finish here -->

<div id="navbar" class="navbar navbar-default"> <!--Main Menu start here -->

  <div class="container"> <!--Nav container begin here -->

    <div class="navbar-header">

      <a href="index.php" class="navbar-brand home">

        <img src="images/logo.png" alt="Darwin Art Online Logo" class="hidden-xs">

      </a>

      <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">

        <span class="sr-only">Toggle Navigation</span>
        <i class="fa fa-align-justify"></i>

      </button>

      <button class="navbar-toggle" data-toggle="collapse" data-target="#search">

        <span class="sr-only">Toggle Search</span>
        <i class="fa fa-search"></i>

      </button>

    </div>

    <div class="navbar-collapse collapse" id="navigation">

      <div class="padding-nav">

        <ul class="nav navbar-nav left">

          <li>
            <a href="index.php"><a/>
          </li>

          <li>
            <a href="index.php">Home<a/>
          </li>

          <li Class="active">
            <a href="shop.php">shop<a/>
          </li>

          <li>
            <a href="customer/my_account.php">My Account<a/>
          </li>

          <li>
            <a href="cart.php">Shopping Cart<a/>
          </li>

          <li>
            <a href="contact.php">Contact<a/>
          </li>

        </ul>

      </div>

      <a href="cart.php" class="btn navbar-btn btn-primary right" id="cart">

        <i class="fa fa-shopping-cart"></i>
          <span> 5 Items In Your Cart </span>
      </a>

      <div class="navbar-collapse collapse right">

        <button class="btn btn-primary navbar-btn " type="button" id="search1"  data-toggle="collapse" data-target="#search">

          <span class="sr-only">Toggle Search</span>
          <i class="fa fa-search"></i>

        </button>

       </div>

       <div class="collapse clearfix" id="search">

         <form method="get" action="results.php" class="navbar-forms">

         <div class="input-group">

           <input type="text" class="form-control" placeholder="Search" name="user_query" required>

           <span class="input-group-btn">
           <button type="submit" name="search" value="Search" class="btn btn-primary">

             <i class="fa fa-search"></i>

           </button>

           </span>

         </div>

       </form>

       </div>

    </div>

  </div><!--Nav container finish here -->
</div> <!--Main Menu finish here -->


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
              <h1 class="text-center"> kids made </hi> <!-- start -->

                <form action="details.php" class="form-horizontal" method="post"><!-- start -->
                  <div class="form-group"><!-- start -->
                    <label for="" class="col-md-5 control-label">Products Quantity</label><!-- start -->

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
                        <select name="product-size" class="form-control">
                          <option >Select a size</option>
                          <option >Extra Small</option>
                          <option >Small</option>
                          <option >Medium</option>
                          <option >Large</option>
                          <option >Extra Large</option>
                        </select> <!-- end -->
                      </div>

                  </div><!-- end -->

                  <p class="price">$50</p>
                  <p class="text-center buttons"><button class="btn btn-primary i fa fa-shopping-cart"> Add to cart</button></p>

                </form>

                <div class="row" id="thumbs">
                  <div class="col-xs-4">
                    <a href="#" class="thumb">
                      <img src="admin_area/product_images/kids.jpg" alt="product 1" class="img-responsive">
                    </a>
                  </div>

                  <div class="col-xs-4">
                    <a href="#" class="thumb">
                      <img src="admin_area/slides_images/pot.jpg" alt="product 2" class="img-responsive">
                    </a>
                  </div>

                  <div class="col-xs-4">
                    <a href="#" class="thumb">
                      <img src="admin_area/slides_images/aussie.jpg" alt="product 3" class="img-responsive">
                    </a>
                  </div>
                </div>

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
