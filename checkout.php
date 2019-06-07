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
  <?php
    include("customer/customer_login.php");
  ?>
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

 ?>
