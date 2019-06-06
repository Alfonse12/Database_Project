<?php

include("includes/db.php");
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Insert Products</title>

  <link href="vendor/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/bootstrap-theme.min.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

  <div class="row">
    <div class="col-lg-12">
      <ol class="breadcrumb">
        <li class="active">
          <i class="fa fa-dashboard"></i> dashboard Insert Products
        </li>
      </ol>
    </div>
  </div>

<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">
          <i class="fa fa-money fa fw"></i> Insert Products
        </h3>
      </div>
      <div panel-body>

        <form method="post" class="form-horizontal" enctype="multipart/form-data">

          <div class="form-group">
            <label class="col-md-3 control-label"> Product Size</label>
            <div class="col-md-6">

              <input name="product_size" type="text" class="form-control" required>

            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label"> Product Category </label>
            <div class="col-md-6">

              <select name="product_cat" type="text" class="form-control">
                <option> Select a Category Art </option>

                <?php
                  $get_p_cats = "select * from products";
                  $run_p_cats = mysqli_query($con,$get_p_cats);

                  while($row_p_cats=mysqli_fetch_array($run_p_cats)){
                    $ProductNo = $row_p_cats['ProductNo'];
                    $Category = $row_p_cats['Category'];

                    echo "
                      <option value='$ProductNo'> $Category </option>
                    ";
                  }

                 ?>

              </select>
            </div>
          </div>


          <div class="form-group">
            <label class="col-md-3 control-label"> Product Colour </label>
            <div class="col-md-6">

              <select name="product_colour" type="text" class="form-control">
                <option> Select a Colour </option>

                <?php
                  $get_p_colour = "select * from products";
                  $run_p_colour = mysqli_query($con,$get_p_colour);

                  while($row_p_colour=mysqli_fetch_array($run_p_colour)){
                    $ProductNo = $row_p_colour['ProductNo'];
                    $Colour= $row_p_colour['Colour'];

                    echo "
                      <option value='$ProductNo'> $Colour </option>
                    ";
                  }

                 ?>

              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label"> Product Price</label>
            <div class="col-md-6">

              <input name="product_price" type="text" class="form-control" required>

            </div>
          </div>


          <div class="form-group">
            <label class="col-md-3 control-label"> Product Description</label>
            <div class="col-md-6">

            <textarea name="product_desc" cols="19" rows="10" class="form-control"></textarea>

            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-6">

              <div class="text-center">
                <button class="btn btn-primary" type="submit" name="submit" value="Insert Product">
                <i class="fa fa-input-md"></i> Insert Products
                </button>
              </div>

            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>

  <script src="js/jquery-331.min.js"></script>
  <script src="js/bootstrap-337.min.js"></script>

</body>
</html>


<?php

if(isset($_POST['submit'])){
  $product_size = $_POST['product_size'];
  $product_cat = $_POST['product_cat'];
  $product_colour = $_POST['product_colour'];
  $product_price = $_POST['product_price'];
  $product_desc = $_POST['product_desc'];

  $insert_product = "insert into products (Size,Category,Colour,Price,Description) values ('$product_size','$product_cat','$product_colour','$product_price','$product_desc')";

  $run_product = mysqli_query($con,$insert_product);

  if($run_product){
    echo "<script>alert('Product has been inserted successfully to product table!')</script>";
    echo "<script>Window.open('$insert_product.php','_self')</script>";
  }
}
 ?>
