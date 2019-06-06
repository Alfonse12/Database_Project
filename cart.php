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
