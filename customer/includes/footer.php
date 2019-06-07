<?php
  $con = mysqli_connect("localhost","root","","darwin_art");
 ?>
 <div id="footer">
   <div class="container">
     <div class="row">
       <div class="col-sm-6 col-md-3">

         <h4>Pages</h4>

           <ul>
             <li> <a href="../cart.php">Shopping Cart</a></li>
             <li> <a href="../contact.php">Contact Us</a></li>
             <li> <a href="../shop.php">Shop</a></li>
             <li> <a href="my_account.php">My Account</a></li>
           </ul>
           <hr>

           <h4>User Section </h4>
           <ul>
             <?php
             if(!isset($_SESSION['CustEmail'])){
               echo "<a href='../checkout.php'>Login</a>";
             }
             else{
               echo "<a href='my_account.php?my_orders'> My Account</a>";
             }
              ?>
             <li>
               <?php
             if(!isset($_SESSION['CustEmail'])){
               echo "<a href='../checkout.php'>Login</a>";
             }
             else{
               echo "<a href='my_account.php?edit_account'> Edit Account</a>";
             }
              ?>
             </li>

           </ul>
           <hr class="hidden-md hidden-lg hidden-sm">

       </div>

           <div class="com-sm-6 col-md-3">

             <h4>Top Products Categories</h4>

             <ul>

               <li> <a href="#">Wood Art</a></li>
               <li> <a href="#">Plastic Art</a></li>
               <li> <a href="#">Painting Art</a></li>
               <li> <a href="#">Architecture</a></li>
               <li> <a href="#"> Sculpture</a></li>
             </ul>

             <ch class="hidden-md hidden-lg">

           </div>

             <div class="com-sm-6 col-md-3">

               <h4>Find Us</h4>
               <p>
                 <strong>Darwin Online Art</strong>
                 <br/> alfonse
                 <br/> Mugisho
                 <br/> 0413109869
                 <br/> mudosamugisho@gmail.com
                 <strong>darwinOnlineArt.com.au</strong>
               </p>

             <a href="../contact.php">Check our Contact Page</a>

             <hr class="hidden-md hidden-lg">


       </div>

           <div class="col-sm-6 col-md-3">
             <h4>Get Update</h4>
             <p class="text-muted">Don't miss out new product!</P>

           <form action="" method="post">
             <div class="input-group">
               <input type="text" class="form-control" name="email">
               <span class="input-group-btn">
                 <input type="submit" value="subscribe"class="btn btn-default">
               </span>
             </div>
           </form>

             <ch>
               <h4>Keep in Touch with us</h4>

               <p class="social">
                 <a href="#" class="fa fa-facebook"></a>
                 <a href="#" class="fa fa-twitter"></a>
                 <a href="#" class="fa fa-instagram"></a>
                 <a href="#" class="fa fa-google-plus"></a>
                 <a href="#" class="fa fa-envelope"></a>
               </P>

           </div>
     </div>
   </div>
 </div>

 <div id="copyright">
   <div class="container">
     <div class="col-md-6">
       <p class="pull-left">&copy;2019 Darwin Online Art all rights Reserve</P>
     </div>
     <div class="col-md-6">
       <p class="pull-right">Theme by: <a href="#">M-Alfonse</a></P>
     </div>
   </div>
 </div>
