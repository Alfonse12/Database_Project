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

          <li >
            <a href="shop.php">shop<a/>
          </li>

          <li>
            <a href="customer/my_account.php">My Account<a/>
          </li>

          <li Class="active">
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
               Cart
        </li>
      </ul>
    </div>

    <div id="cart" class="col-md-9"> <!-- strat -->
      <div class="box"> <!-- strat -->
        <form action="cart.php" method="post" enctype="multipart/form-data"> <!-- strat -->
          <h1>Shopping Cart</h1> <!-- strat -->
          <p class="text-muted">Your Currenttly have 3 item(s) in your cart</p> <!-- strat -->
          <div class="table-responsive"> <!-- strat -->
            <table class="table">

              <thead> <!-- strat -->
                <tr>
                  <th colspan="2">Product </th>
                  <th>Quantity</th>
                  <th>Unit Price</th>
                  <th>Size</th>
                  <th colspan="1">Delete</th>
                  <th colspan="2">Sub-Total</th>
                </tr>
              </thead> <!-- End -->

              <tbody>
                <tr>
                  <td>
                    <img class="img-responsive" src="admin_area/product_images/kids.jpg" alt="kids">
                  </td>
                  <td>
                    <a href="#">Kids made</a>
                  </td>
                  <td>
                    2
                  </td>
                  <td>
                    $50
                  </td>
                  <td>
                    Large
                  </td>
                  <td>
                    <input type="checkbox" name="remove[]">
                  </td>

                  <td>
                    $100
                  </td>
                </tr>
              </tbody>

              <tbody>
                <tr>
                  <td>
                    <img class="img-responsive" src="admin_area/product_images/popart1.jpg" alt="kids">
                  </td>
                  <td>
                    <a href="#"> Daily Use</a>
                  </td>
                  <td>
                    2
                  </td>
                  <td>
                    $50
                  </td>
                  <td>
                    Large
                  </td>
                  <td>
                    <input type="checkbox" name="remove[]">
                  </td>

                  <td>
                    $100
                  </td>
                </tr>
              </tbody>

              <tbody>
                <tr>
                  <td>
                    <img class="img-responsive" src="admin_area/slides_images/aussie.jpg" alt="kids">
                  </td>
                  <td>
                    <a href="#">Aussie Frame</a>
                  </td>
                  <td>
                    2
                  </td>
                  <td>
                    $50
                  </td>
                  <td>
                    Large
                  </td>
                  <td>
                    <input type="checkbox" name="remove[]">
                  </td>
                  <td>
                    $100
                  </td>
                </tr>
              </tbody>

              <tfoot>
                  <tr>
                    <th colspan="5">Total</th>
                    <th colspan="2">$100</th>
                  </tr>
              </tfoot>
            </table>
          </div><!-- end -->

          <div class="box-footer">
            <div class="pull-left">
              <a href="index.php" class="btn btn-default">
                <i class="fa fa-chevron-left"></i> Continue Shopping
              </a>
            </div>
            <div class="pull-right">
              <button type="submit" name="update" value="update Cart" class="btn btn-default">
                <i class="fa fa-refresh"></i> update Cart
              </button>

              <a href="checkout.php" class="btn btn-primary">
                Proceed checkout <i class="fa fa-chevron-right"></i>
              </a>
            </div>
          </div>

        </form> <!-- end -->
      </div> <!-- End -->


<!-- missing product that people may like from details.php
from line 329 to 371 come back if I have time-->

    </div> <!-- End -->

    <div class="col-md-3">
      <div id="order-summary" class="box">
        <div class="box-header">
          <h3>Order Summary</h3>
        </div>
        <p class="text-muted">
          shipping and additional cost are calculated based on value you have entered.
        </P>
        <div class="table-responsive">
          <table class="table">
            <tbody>
              <tr>
                <td> Order Sub-Total</td>
                <th> $200 </th>
              </tr>
              <tr>
                <td> shipping and Handling </td>
                <td> $0 </td>
              </tr>
              <tr>
                <td> Tax </td>
                <th> $0 </th>
              </tr>
              <tr class="total">
                <td> Total </td>
                <th> $200 </th>
              </tr>
            </tbody>
         </table>
        </div>
      </div>
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
