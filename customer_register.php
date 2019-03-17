<?php 
$active='Account';
    include("includes/header.php");
?>
   <div id="content"><!-- #content Begin -->
       <div class="container-fluid"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb animated wow fadeInUp"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index.php" style='font-family:Courgette;'>Home</a>
                   </li>
                   <li style='font-family:Courgette;'>
                       Register
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           
           <div class="col-md-3 animated wow fadeInUp"><!-- col-md-3 Begin -->
   
   <?php 
    
    include("includes/sidebar.php");
    
    ?>
 </div><!-- col-md-3 Finish -->
           
           <div class="col-md-9"><!-- col-md-9 Begin -->
               
               <div class="box animated wow fadeInRight"><!-- box Begin -->
                   
                   <div class="box-header"><!-- box-header Begin -->
                       <div style="background:#13A0E6;height:100%;" class="animated wow fadeInUp" data-wow-delay="0.4s"> <center style='font-family:Courgette;'><h1 style="padding-top:20px;" style='font-family:Courgette;'>Only Owner Of PG Can Register Here!</h1></center></div>
                       <center><!-- center Begin -->
                           
                           <h2 style='font-family:Courgette;' class="animated wow fadeInUp" data-wow-delay="0.8s"> Register a new account </h2>
                           
                       </center><!-- center Finish -->
                       
                       <form action="customer_register.php" method="post" enctype="multipart/form-data"><!-- form Begin -->
                           
                           <div class="form-group animated wow fadeInUp" data-wow-delay="0.8s"><!-- form-group Begin -->
                               
                               <label style='font-family:Courgette;'>Your Name</label>
                               
                               <input type="text" class="form-control" name="c_name" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group animated wow fadeInUp" data-wow-delay="1.2s"><!-- form-group Begin -->
                               
                               <label style='font-family:Courgette;'>Your Email</label>
                               
                               <input type="text" class="form-control" name="c_email" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group animated wow fadeInUp" data-wow-delay="1.6s"><!-- form-group Begin -->
                               
                               <label style='font-family:Courgette;'>Your Password</label>
                               
                               <input type="password" class="form-control" name="c_pass" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group animated wow fadeInUp" data-wow-delay="2s"><!-- form-group Begin -->
                               
                               <label style='font-family:Courgette;'>Your Country</label>
                               
                               <input type="text" class="form-control" name="c_country" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group animated wow fadeInUp" data-wow-delay="2.4s"><!-- form-group Begin -->
                               
                               <label style='font-family:Courgette;'>Your City</label>
                               
                               <input type="text" class="form-control" name="c_city" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group animated wow fadeInUp" data-wow-delay="2.6s"><!-- form-group Begin -->
                               
                               <label style='font-family:Courgette;'>Your Contact</label>
                               
                               <input type="text" class="form-control" name="c_contact" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group animated wow fadeInUp" data-wow-delay="2.8s"><!-- form-group Begin -->
                               
                               <label style='font-family:Courgette;'>Your Address</label>
                               
                               <input type="text" class="form-control" name="c_address" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group animated wow fadeInUp" data-wow-delay="3.0s"><!-- form-group Begin -->
                               
                               <label style='font-family:Courgette;'>Your Profile Picture</label>
                               
                               <input type="file" class="form-control form-height-custom" name="c_image" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="text-center animated wow fadeInUp" data-wow-delay="3.2s"><!-- text-center Begin -->
                               
                               <button type="submit" name="register" class="btn btn-danger" style='font-family:Courgette;'>
                               
                               <i class="fa fa-user-md"></i> Register
                               
                               </button>
                               
                           </div><!-- text-center Finish -->
                           
                       </form><!-- form Finish -->
                       
                   </div><!-- box-header Finish -->
                   
               </div><!-- box Finish -->
               
           </div><!-- col-md-9 Finish -->
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
   <div style="text-align:center;">
   <?php 
    include("includes/footer.php");
    ?>
</div>
    
    <script src="js/jquery-331.min.js"></script>
     <script src="styles/wow.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>
    new WOW().init();
    </script>
    <script src="js/bootstrap-337.min.js"></script>
    <?php 

    include("chat.php");
?>
    
</body>
</html>
<?php 

if(isset($_POST['register'])){
    $c_name = $_POST['c_name'];
    $c_email = $_POST['c_email'];
    $c_pass = $_POST['c_pass'];
    $c_country = $_POST['c_country'];
    $c_city = $_POST['c_city'];
    $c_contact = $_POST['c_contact'];
    $c_address = $_POST['c_address'];
    $c_image = $_FILES['c_image']['name'];
    $c_image_tmp = $_FILES['c_image']['tmp_name'];
    move_uploaded_file($c_image_tmp,"customer/customer_images/$c_image");
     $sql="select * from customers where (customer_email='$c_email');";
        $res=mysqli_query($con,$sql);
        if (mysqli_num_rows($res) > 0) {
        // output data of each row
        $row = mysqli_fetch_assoc($res);
        if ($c_email==$row['customer_email'])
        {
            echo "<script> alert('Sorry,Your email_id already exists')</script>";
        }
        }
   else{
             $insert_customer = "insert into customers (customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_image) values ('$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address','$c_image')";
            $run_customer = mysqli_query($con,$insert_customer);
    if($run_customer){
        /// If register have items in cart ///
        $_SESSION['customer_email']=$c_email;
        echo "<script>alert('You have been Registered Sucessfully')</script>";
        echo "<script>window.open('checkout.php','_self')</script>";
        }
        }
    }
?>