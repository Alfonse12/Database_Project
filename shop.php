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
      <div class="box">
        <h1>shop</h1>
          <p>We have more than what you think, in our store and online
          Our stock is unlimited</p>
      </div>

      <div class="row">


        <div class="col-md-4 colo-sm-6 center-responsive">

          <div class="product">
            <a href="details.php">
              <img id="pimages" class="img-responsive" src="admin_area/product_images/kids.jpg" alt="product 1">
            </a>
            <div class="text">
              <h3>
                <a href="details.php"> Our kids art
              </h3>
              <p class="price"> $20</P>
                <p class="button">
                  <a href="details.php" class="btn btn-default">View Details</a>
                  <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart">
                    Add to cart
                  </i>
                  </a>
                </P>
            </div>
          </div>
        </div>
        <div class="col-md-4 colo-sm-6 center-responsive">

          <div class="product">
            <a href="details.php">
              <img id="pimages" class="img-responsive" src="admin_area/slides_images/pot.jpg" alt="product 1">
            </a>
            <div class="text">
              <h3>
                <a href="details.php"> Real
              </h3>
              <p class="price"> $120</P>
                <p class="button">
                  <a href="details.php" class="btn btn-default">View Details</a>
                  <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart">
                    Add to cart
                  </i>
                  </a>
                </P>
            </div>
          </div>
        </div>
        <div class="col-md-4 colo-sm-6 center-responsive">

          <div class="product">
            <a href="details.php">
              <img id="pimages" class="img-responsive" src="admin_area/slides_images/tree.jpg" alt="product 1">
            </a>
            <div class="text">
              <h3>
                <a href="details.php"> Nature
              </h3>
              <p class="price"> $20</P>
                <p class="button">
                  <a href="details.php" class="btn btn-default">View Details</a>
                  <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart">
                    Add to cart
                  </i>
                  </a>
                </P>
            </div>
          </div>
        </div>
        <div class="col-md-4 colo-sm-6 center-responsive">

          <div class="product">
            <a href="details.php">
              <img id="pimages" class="img-responsive" src="admin_area/slides_images/aussie.jpg" alt="product 1">
            </a>
            <div class="text">
              <h3>
                <a href="details.php"> Aussie Frame
              </h3>
              <p class="price"> $100</P>
                <p class="button">
                  <a href="details.php" class="btn btn-default">View Details</a>
                  <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart">
                    Add to cart
                  </i>
                  </a>
                </P>
            </div>
          </div>
        </div>
        <div class="col-md-4 colo-sm-6 center-responsive">

          <div class="product">
            <a href="details.php">
              <img id="pimages" class="img-responsive" src="admin_area/slides_images/kangaroo.jpg" alt="product 1">
            </a>
            <div class="text">
              <h3>
                <a href="details.php"> kangaroo
              </h3>
              <p class="price"> $50</P>
                <p class="button">
                  <a href="details.php" class="btn btn-default">View Details</a>
                  <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart">
                    Add to cart
                  </i>
                  </a>
                </P>
            </div>
          </div>
        </div>
        <div class="col-md-4 colo-sm-6 center-responsive">

          <div class="product">
            <a href="details.php">
              <img id="pimages" class="img-responsive" src="admin_area/product_images/abo.jpg" alt="product 1">
            </a>
            <div class="text">
              <h3>
                <a href="details.php">Traditional
              </h3>
              <p class="price"> $20</P>
                <p class="button">
                  <a href="details.php" class="btn btn-default">View Details</a>
                  <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart">
                    Add to cart
                  </i>
                  </a>
                </P>
            </div>
          </div>
        </div>
      </div>

      <center>
        <ul class="pagination">
          <li> <a hrf="#">First Page</a></li>
          <li> <a hrf="#">1</a></li>
          <li> <a hrf="#">2</a></li>
          <li> <a hrf="#">3</a></li>
          <li> <a hrf="#">4</a></li>
          <li> <a hrf="#">5</a></li>
          <li> <a hrf="#">6</a></li>
          <li> <a hrf="#">7</a></li>
          <li> <a hrf="#">8</a></li>
          <li> <a hrf="#">9</a></li>
          <li> <a hrf="#">10</a></li>
          <li> <a hrf="#">Last Page</a></li>
        </ul>
      </center>

    </div>
  </div>
</div>

<?php
  include("includes/footer.php");
?>

<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>

  </body>

</html>
