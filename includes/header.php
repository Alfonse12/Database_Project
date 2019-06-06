<?php

session_start();
include("includes/db.php");
include("functions/functions.php");
?>


<?php
/*
  if(isset($_GET['pro_No'])){
    $product_id = $_GET['pro_No'];
    $get_product = "SELECT * FROM products WHERE product_id=”.$product_id;
    $run_product = mysqli_query($con,$get_product);
    $row_product = mysqli_fetch_array($run_product);
    $ProductNo = $row_product['ProductNo'];
    $Size = $row_product['product_Size'];
    $Category = $row_product['product_Category'];
    $Colour = $row_product['product_Colour'];
    $Price = $row_product['product_Price'];
    $Description = $row_product['product_Description'];
  }
*/
?>


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

      <a href="#" class="btn btn-success btn-sm">

        <?php
        if(!isset($_SESSION['CustEmail'])){
          echo" Welcome: Guest";
        }
        else{
          //echo" Welcome: " . $SESSION['CustEmail'] . "";
        }
        ?>

      </a>
        <a href="checkout.php"> <?php //items(); ?> 2Items In Your Cart | Totat Price:$200 <?php //total_price(); ?> </a>

    </div> <!--COllllll finish here -->

    <div class="col-md-6"> <!--colll62 begin here -->

      <ul class="menu"><!--UL begin here -->

        <li>
            <a href="customer_register.php">Register</a>
        </li>
        <li>
          <a href="checkout.php">My Account</a>
        </li>
        <li>
          <a href="cart.php">Go To Cart</a>
        </li>
        <li>
          <a href="checkout.php">
            <?php
            if(!isset($_SESSION['CustEmail'])){
              echo" <a href='checkout.php'> Login </a>";
            }
            else{
              echo" <a href='logout.php'> LogOut </a>";
            }
            ?>>
          </a>

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

          <li Class="<?php if($active=='Home') echo"active"; ?>">
            <a href="index.php">Home<a/>
          </li>

          <li Class="<?php if($active=='shop') echo"active"; ?>">
            <a href="shop.php">shop<a/>
          </li>

            <li Class="<?php if($active=='Account') echo"active"; ?>">
            <a href="customer/my_account.php">My Account<a/>
          </li>

          <li Class="<?php if($active=='Cart') echo"active"; ?>">
            <a href="cart.php">Shopping Cart<a/>
          </li>

          <li Class="<?php if($active=='Contact') echo"active"; ?>">
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
