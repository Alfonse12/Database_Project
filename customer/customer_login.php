<div class="box">
  <div class="box-header">
    <center>
      <h1> Login</h1>
      <p class="lead"> Do you have an account with us? </P>
      <p class="text-muted"> LogIn with your credentials </P>
    </center>
  </div>
  <form method="post" action="checkout.php">
    <div class="form-group">
      <label> Email</label>
      <input name="c_email" type="email" class="form-control" required>
    </div>

    <div class="form-group">
      <label> Password </label>
      <input name="c_pass" type="password" class="form-control" required>
    </div>

    <div class="text-center">
      <button name="login" value="login" class="btn btn-primary" >
        <i class="fa fa-sign-in"></i> LogIn
      </button>
    </form>

      <center>
        <a href="customer_register.php">
          <h3> If you don't have an account with us register here  bellow </h3>
        </a>
      </center>
    </div>

    <?php
      if(isset($_POST['login'])){
        $CustEmail = $_POST['c_email'];
        $c_pass = $_POST['c_pass'];
        $select_customer = "select * from customer where CustEmail='$CustEmail'";
        $run_customer = mysqli_query($con,$select_customer);
        $get_ip = getRealInputFromUser();
        $check_customer = mysqli_num_rows($run_customer);
        $select_cart = "select * from cart ip_add='$get_ip'";
        $run_cart = mysqli_query($con,$select_cart);

        //$check_cart = msqli_num_rows($run_cart);

          if($check_customer==0){

            echo "<script>alert('Your email or password is wrong')</script>";
            exit();

          }
          if($check_customer==1 AND $check_cart==0){

            $_SESSION['CustEmail'] = $CustEmail;

            echo "<script>alert('You are logged in your account')</script>";
            echo "<script>window.open('customer/my_account.php?my_orders','_self')</script>";

          }else{
            $_SESSION['CustEmail'] = $CustEmail;

            echo "<script>alert('You are logged in your account')</script>";
            echo "<script>window.open('checkout.php','_self')</script>";
          }

           }
     ?>
</div>
