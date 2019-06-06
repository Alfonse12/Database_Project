<?php
  $active='shop';
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

      <?php

      if(!isset($_GET['pro_No'])){
        if(!isset($_GET['pro_Cat'])){

          echo"
          <div class='box'>
          <h1>Shop</h1>

          <p>
          We have more than what you think, in our store and online
          Our stock is unlimited
          </p>

          </div>
          ";
        }
      }

      ?>

<div class="row">

<?php
  if(!isset($_GET['pro_No'])){
    if(!isset($_GET['pro_Cat'])){

      $per_page=6;

      if(isset($_GET['page'])){
        $page = $_GET['page'];

      }
      else{

            $page=1;
          }
          $start_from = ($page-1)* $per_page;

          $get_products = "select * from products order by 1 DESC LIMIT $start_from, $per_page";

          $run_products = mysqli_query($con, $get_products);

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
?>

</div>


<!-- Coming soon -->


      <center>
        <ul class="pagination">

    <?php
      $query = "select * from products";
      $result = mysqli_query($con, $query);
      $total_records = mysqli_num_rows($result);
      $total_pages = ceil($total_records / $per_page);

        echo "

        <li>
          <a  href='shop.php?page=1'> ".'First Page'."</a>
        </li>

        ";
        for($n=1; $n<=$total_pages; $n++){
          echo "
          <li>
            <a  href='shop.php?page=".$n."'> ".$n."</a>
          </li>

          ";
        };

        echo "

        <li>
          <a  href='shop.php?page=$total_pages'> ".'Last Page'."</a>
        </li>

        ";

      }
}
    ?>


        </ul>
      </center>

      <div class="row">

        

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
