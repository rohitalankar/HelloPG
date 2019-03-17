<?php
$active='Contact Us';
 include('includes/header.php');

?>
   <div id="content"><!--content start-->
       <div class="container-fluid">
           <div class="col-md-12">
               <ul class="breadcrumb animated wow fadeInUp">
                   <li><a href="index.php" style='font-family:Courgette;'>Home</a></li>
                   <li style='font-family:Courgette;'>
                       Contact Us
                   </li>
               </ul>
           </div>
           <div class="col-md-3 animated wow fadeInUp">
             
              <?php 
    include("includes/sidebar.php");
    ?>
           </div>
           <div class="col-md-9"><!--col-md-9 start-->
                 <div class="box animated wow fadeInRight" style="font-family:Courgette;"><!--box start-->
                     <div class="box-header" ><!--box-header start-->
                         <center>
                             <h2 style='font-family:Courgette; padding-top:2%; width:auto;'>Feel Free Contact Us</h2>
                             <p class="text-muted" style='font-family:Courgette;'>
                                 If You have any questions,  feel free to contact us.Our Customer Service  work on <strong>24/7</strong>
                             </p>
                         </center>
                         <form action="contact.php" method="post">
                             <div class="form-group animated wow fadeInUp" data-wow-delay="0.4s">
                                 <lable style='font-family:Courgette;'>Name</lable>
                                 <input type="text" class="form-control" name="name" required>
                             </div>
                             <div class="form-group animated wow fadeInUp" data-wow-delay="0.8s" >
                                 <lable>Email</lable>
                                 <input type="email" class="form-control" name="email" required>
                             </div >
                             <div class="form-group animated wow fadeInUp" data-wow-delay="1.2s">
                                 <lable style='font-family:Courgette;'>Subject</lable>
                                 <input type="text" class="form-control" name="subject" required>
                             </div>
                             <div class="form-group animated wow fadeInUp" data-wow-delay="1.6s">
                                 <lable style='font-family:Courgette;'>Message</lable>
                                 <textarea name="message" class="form-control"></textarea>
                             </div>
                             <div class="text-center animated wow fadeInUp" data-wow-delay="2s">
                                 <button class="btn btn-danger" type="submit" name="submit" style='font-family:Courgette;'>
                                     <i class="fa fa-user-md"></i>&nbsp;Send Message
                                 </button>
                             </div>
                         </form>
                         <?php 
                            
                            if(isset($_POST['submit'])){
                                //admin will receive message from this//
                                $sender_name = $_POST['name'];
                                $sender_email = $_POST['email'];
                                $sender_subject = $_POST['subject'];
                                $sender_message = $_POST['message'];
                                $receiver_email = "rohitgharal.rg@gmail.com";
                                mail($receiver_email,$sender_name,$sender_subject,$sender_message,$sender_email);
                                //auto reply by this//
                                $email = $_POST['email'];
                                $subject = "welcome to my website ";
                                $msg = "Thanks for sending your message .ASAP i will reply your message";
                                $from = "rohitgharal.rg@gmail.com";
                                mail($email,$subject,$msg,$from);
                                echo"<script>alert('Your Message has sent successfully')</script>";
                            }
                         ?>
                     </div><!--box-heasder finish-->
                 </div><!--box finsi-->
             </div><!--col-md-9 finish-->
    </div>
   </div><!--content finish-->
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