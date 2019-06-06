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
            <a href="../customer_register.php">Register</a>
        </li>
        <li>
          <a href="../my_account.php">My Account</a>
        </li>
        <li>
          <a href="../cart.php">Go To Cart</a>
        </li>
        <li>
          <a href="../checkout.php">Login</a>
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
            <a href="../index.php">Home<a/>
          </li>

          <li >
            <a href="../shop.php">shop<a/>
          </li>

          <li Class="active">
            <a href="../checkout.php">My Account<a/>
          </li>

          <li>
            <a href="../cart.php">Shopping Cart<a/>
          </li>

          <li>
            <a href="../contact.php">Contact<a/>
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
          My Account
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
      <h1 align="center"> Please confirm your payment </h1>
      <form action="confirm.php" method="post" enctype="multipart/form-data">

        <div class="form-group">
          <label> Invoice No: </label>
          <input type="text" class="form-control" name="invoice_no" required>
        </div>

        <div class="form-group">
          <label> Amount Sent: </label>
          <input type="text" class="form-control" name="amount_sent" required>
        </div>

        <div class="form-group">
          <label> Select Payment Mode: </label>

          <select name="select_payment_mode" class="form-control">
            <option> Select Payment mode </option>
            <option> Card </option>
            <option> Cash </option>
            <option> Bank deposit </option>
            <option> Westerm Union </option>

          </select>
        </div>

        <div class="form-group">
          <label> Transaction/ reference ID: </label>
          <input type="text" class="form-control" name="ref_no" required>
        </div>

        <div class="form-group">
          <label> Western Union: </label>
          <input type="text" class="form-control" name="code" required>
        </div>

        <div class="form-group">
          <label> Payment Date: </label>
          <input type="text" class="form-control" name="date" required>
        </div>
        <div class="text-center">
            <button class="btn btn-primary btn-lg">
              <i class="fa fa-user-md"></i> Confirm Payment
            </button>
        </div>
      </form>
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
