<!--Fuction to add products fom Database to Customer view on the site on the home page -->

<?php

$db = mysqli_connect("localhost","root","","darwin_art"); /// connect to the Database

/// Getting real input function

Function getRealInputFromUser(){

  switch(true){

    case(!empty($_SERVER['HTTP_X_REAL_IP'])):return $_SERVER['HTTP_X_REAL_IP'];
    case(!empty($_SERVER['HTTP_CLIENT_IP'])):return $_SERVER['HTTP_CLIENT_IP'];
    case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])):return $_SERVER['HTTP_X_FORWARDED_FOR'];

    default : return $_SERVER['REMOTE_ADDR'];
  }
}

 // function to add to cart and in table cart in database

function add_cart(){

  global $db;

  if(isset($_GET['add_cart'])){
    $ip_Add = getRealInputFromUser();
    $p_No = $_GET['add_cart'];
    $product_qty = $_POST['product_qty'];
    $product_size = $_POST['product_size'];

    $check_product = "selct * cart where ip_Add='$ip_Add' AND p_No='$p_No'";

    $run_ckeck = mysqli_query($db,$check_product);
    if(mysqli_num_rows($run_ckeck)>0){

      echo"<script>alert('This product has already been added in Your Cart')</script>";
      echo"<script>window.open('details.php?ProductNo=$p_No','_self')</script>";

    }else{
      $query = "insert into cart (p_No,ip_Add,qty,size) values ('$p_No','$ip_Add','$product_qty','$product_size')";
      $run_query = mysqli_query($db,$query);

      echo"<script>window.open('details.php?p_No=$p_No','_self')</script>";
    }
  }
}

function getPro(){
  global $db;

  $get_products = "select * from products order by 1 DESC LIMIT 0,6";
  $run_products = mysqli_query($db,$get_products);

  while($row_products=mysqli_fetch_array($run_products)){
    $pro_No = $row_products['ProductNo'];
    $pro_Size = $row_products['Size'];
    $pro_Cat = $row_products['Category'];
    $pro_colour = $row_products['Colour'];
    $pro_Price = $row_products['Price'];
    $pro_Desc = $row_products['Description'];

    echo"

    <div class='col-md-4 col-sm-6 single'>
      <div class='product'>
        <a href='details.php?ProductNo=$pro_No'>
        <img id='pimages' class='img-responsive' src='admin_area/product_images/kids.jpg' alt='product 1'>
        </a>
        <div class='text'>
          <h3>
          <a href='details.php?ProductNo=$pro_No'>
                Size: $pro_Size Cm
          </a>
          </h3>
            <p class='price'>
              $ $pro_Price
            </P>

            <p class='price'>
              Colour: $pro_colour
            </P>

              <p class='button'>
                <a class='btn btn-default' href='details.php?ProductNo=$pro_No'>
                 <i class='fa fa-binoculars'> </i> View Details
                </a>

                <a class='btn btn-primary' href='details.php?pro_No=$pro_No'>
                <i class='fa fa-shopping-cart'> </i> Add to Cart
              </a>
            </P>
        </div>
      </div>
    </div>
    ";
  }
}

/// Fuction to add products Category fom Database to Customer view on the site at the shopping page

function getProCats(){

  global $db;

  $get_products = "select * from products";
  $run_products = mysqli_query($db,$get_products);

  while($row_products=mysqli_fetch_array($run_products)){
    $pro_No = $row_products['ProductNo'];
    $pro_Cat = $row_products['Category'];

    echo"
      <li>
          <a href='shop.php?ProductNo=$pro_No'> $pro_Cat</a>
      </li>
    ";
  }
}

?>
