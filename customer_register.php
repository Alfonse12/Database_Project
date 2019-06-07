<?php
  $active='Account';
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
          Regster
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
      <div class="box-header">
        <center>
          <h2>Register a new account</h2>
        </center>

        <form action="customer_register.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label>Last Name</label>
            <input type="text" class="form-control" name="c_fname" required>
          </div>
          <div class="form-group">
            <label>First Name</label>
            <input type="text" class="form-control" name="c_lname" required>
          </div>
          <div class="form-group">
            <label>Your Title</label>
            <input type="text" class="form-control" name="c_title" required>
          </div>
          <div class="form-group">
            <label>Your Email</label>
            <input type="email" class="form-control" name="c_email" required>
          </div>
          <div class="form-group">
            <label>Your Password</label>
            <input type="password" class="form-control" name="c_password" required>
          </div>
          <div class="form-group">
            <label>Your Address</label>
            <input type="text" class="form-control" name="c_address" required>
          </div>
          <div class="form-group">
            <label>Your city</label>
            <input type="text" class="form-control" name="c_city" required>
          </div>
          <div class="form-group">
            <label>Your state</label>
            <input type="text" class="form-control" name="c_state" required>
          </div>
          <div class="form-group">
            <label>Your Country</label>
            <input type="text" class="form-control" name="c_country" required>
          </div>
          <div class="form-group">
            <label>Your Post Code</label>
            <input type="text" class="form-control" name="c_postCode" required>
          </div>
          <div class="form-group">
            <label>Your Phone</label>
            <input type="text" class="form-control" name="c_contact" required>
          </div>
          <div class="text-center">
            <button class="btn btn-primary" type="submit" name="register">
            <i class="fa fa-user-md"></i> Register
            </button>
          </div>
        </form>

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

<?php
  if(isset($_POST['register'])){
    $c_email = $_POST['c_email'];
    $c_pass = $_POST['c_password'];
    $c_fname = $_POST['c_fname'];
    $c_lname = $_POST['c_lname'];
    $c_title = $_POST['c_title'];
    $c_address = $_POST['c_address'];
    $c_city = $_POST['c_city'];
    $c_state = $_POST['c_state'];
    $c_country = $_POST['c_country'];
    $c_postCode = $_POST['c_postCode'];
    $c_contact = $_POST['c_contact'];

    $c_ip = getRealInputFromUser();

    $insert_customer = "insert into customer (CustEmail,C_password,CustFName,CustLNAme,Title,Address,City,State, Country,PostCode,Phone,c_ip) values ('$c_email','$c_pass','$c_fname','$c_lname','$c_title','$c_address','$c_city','$c_state','$c_country','$c_postCode','$c_contact','$c_ip')";

    $run_customer = mysqli_query($con,$insert_customer);



    $sel_cart = "select * from cart where ip_add='c_ip'";
    $run_cart = mysqli_query($con,$sel_cart);
    $check_cart = mysqli_num_rows($run_cart);

    if($check_cart>0){
      $_SESSION['CustEmail']=$c_email;
      echo "<script>alert('Your registration has been complated')</script>";
      echo "<script>window.open('checkout.php','_self')</script>";
    }
    else{
      $_SESSION['CustEmail']=$c_email;
      echo "<script>alert('Your registration has been complated')</script>";
      echo "<script>window.open('index.php','_self')</script>";
      }

  }
 ?>
