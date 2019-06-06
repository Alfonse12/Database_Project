<?php
  $active='Contact';
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
          Contact Us
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
          <h2> Feel free to contact us</h2>
          <p class="text-muted">
              If you have question, feel free to contact us. <strong>24/7</strong>
          </p>
        </center>

        <form action="contact.php" method="post">
          <div class="form-group">
            <label> Name </label>
            <input type="text" class="form-control" name="name" required>
          </div>

          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" required>
          </div>

          <div class="form-group">
            <label>Subject</label>
            <input type="text" class="form-control" name="subject" required>
          </div>

          <div class="form-group">
            <label>Message</label>
            <textarea name="message" class="form-control"></textarea>
          </div>

          <div class="text-center">
            <button class="btn btn-primary" type="submit" name="submit">
            <i class="fa fa-user-md"></i> Send Message
            </button>
          </div>

        </form>

        <?php

        // sending message to Admin

        if(isset($_POST['submit'])){

          $sender_name = $_POST['name'];
          $sender_email = $_POST['email'];
          $sender_subject = $_POST['subject'];
          $sender_message = $_POST['message'];

          $receiver_email = "mudosamugisho@gamil.com";
          mail($receiver_email,$sender_name,$sender_subject,$sender_message,$sender_email);

            //Auto Reply

          $email = $_POST['email'];
          $subject = "Thank you for contacting us";
          $msg = "We will get back soon to you";
          $from = "mudosamugisho@gamil.com";
          $email($email,$subject,$msg,$from);

          echo " <h2 align='center'> Your Message was sucessfully sent </h2>";
        }

        ?>

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
