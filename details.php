<?php
$active='Shop';
 include('includes/header.php');

?>
   <div id="content"><!--content start-->
       <div class="container-fluid">
           <div class="col-sm-12">
               <ul class="breadcrumb">
                   <li style='font-family: Nova Script;'><a href="index.php">Home</a></li>
                   <li style='font-family: Nova Script;'>
                       Details
                   </li>
                   <li>
                       <a href="shop.php?=<?php echo $p_cat_id; ?>"></a>
                   </li>
                   
               </ul>
           </div>
           <div class="col-md-3 animated wow fadeInUp ">
              <?php 
    include("includes/sidebar.php");
    ?>
 </div>
      <div class="col-md-9"><!--col-md-9 start-->
          <div id="productMain" class="row"><!--row start-->
              <div class="col-sm-8">
                  <div id="mainImage" class="animated wow fadeInUp" data-wow-delay="0.2s">
                      <div id="myCarousel" class="carousel slide " data-ride="carousel" style="height:300px;">
                          <ol class="carousel-indicators">
                              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                              <li data-target="#myCarousel" data-slide-to="1"></li>
                              <li data-target="#myCarousel" data-slide-to="2"></li>
                              <li data-target="#myCarousel" data-slide-to="3"></li>
                              <li data-target="#myCarousel" data-slide-to="4"></li>
                          </ol>
                          <div class="carousel-inner animated wow fadeInBottom">
                              <div class="item active">
                                  <center><img class="img-responsive" src="customer/pg_images/<?php echo $pg_img1; ?>" style="height:300px; width:100%;" alt="img-1"></center>
                              </div>
                              <div class="item">
                                  <center><img class="img-responsive" src="customer/pg_images/<?php echo $pg_img2; ?>" style="height:300px; width:100%;;" alt="img-2"></center>
                              </div>
                              <div class="item">
                                  <center><img class="img-responsive" src="customer/pg_images/<?php echo $pg_img3; ?>" style="height:300px; width:100%;"  alt="img-3"></center>
                              </div>
                              <div class="item">
                                  <center><img class="img-responsive" src="customer/pg_images/<?php echo $pg_img4; ?>" style="height:300px; width:100%;" alt="img-4"></center>
                              </div>
                              <div class="item">
                                  <center><img class="img-responsive" src="customer/pg_images/<?php echo $pg_img5; ?>" style="height:300px; width:100%;"  alt="img-5"></center>
                              </div>
                              
                          </div>
                          <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                              <span class="glyphicon glyphicon-chevron-left"></span>
                              <span class="sr-only">Previous</span><!--left control finish-->
                          </a>
                          <a href="#myCarousel" class="right carousel-control" data-slide="prev">
                              <span class="glyphicon glyphicon-chevron-right"></span>
                              <span class="sr-only">Previous</span><!--right control finish-->                        
                               </a>
                      </div>
                  </div>
                        <div class="row" id="thumbs" style="padding:10px;">
                      <div data-target="#myCarousel" data-slide-to="0" class="col-xs-4 animated wow fadeInRight" data-wow-delay="0.4s" style="pading:5px;">
                      <a href="" class="thumb">
                      <img src="customer/pg_images/<?php echo $pg_img1; ?>" alt="pro_1" class="img-responsive" style="height:150px;width:100%;">
                      </a>
                      </div>
                      <div data-target="#myCarousel" data-slide-to="1"  class="col-xs-4 animated wow fadeInRight" data-wow-delay="0.8s"  style="pading:5px;">
                      <a href="" class="thumb">
                      <img src="customer/pg_images/<?php echo $pg_img2; ?>" alt="pro_2" class="img-responsive" style="height:150px;width:100%;">
                      </a>
                      </div>
                       <div data-target="#myCarousel" data-slide-to="2"  class="col-xs-4 animated wow fadeInRight" data-wow-delay="1.2s"  style="pading:5px;">
                      <a href="" class="thumb">
                      <img src="customer/pg_images/<?php echo $pg_img3; ?>" alt="pro_3" class="img-responsive" style="height:150px;width:100%;">
                      </a>
                      </div>
                      <div data-target="#myCarousel" data-slide-to="3"  class="col-xs-4 animated wow fadeInRight" data-wow-delay="1.6s"  style="margin-top:5px;">
                      <a href="" class="thumb">
                      <img src="customer/pg_images/<?php echo $pg_img4; ?>" alt="pro_4" class="img-responsive" style="height:150px;width:100%;">
                      </a>
                      </div>
                      <div data-target="#myCarousel" data-slide-to="4"  class="col-xs-4 animated wow fadeInRight" data-wow-delay="2.0s"  style="margin-top:5px;">
                      <a href="" class="thumb">
                      <img src="customer/pg_images/<?php echo $pg_img5; ?>" alt="pro_5" class="img-responsive" style="height:150px;width:100%;">
                      </a>
                      </div>
                 </div>
              </div>
              <div class="col-sm-4">
                  <div class="box animated wow fadeInRight">
                      <p class=" newarrival text-center blink" style='font-family: Nova Script;'> New </p>
                      <h3 class="text-center animated wow fadeInUp" style="color:#555;text-transform: uppercase;text-transform: uppercase;font-family: Nova Script;" data-wow-delay="0.4s"><?php echo $pg_title; ?></h3><hr>
                      
                      <p style='font-family:Courgette;' class="animated wow fadeInUp" data-wow-delay="0.8s" ><b style='font-family: Nova Script;'> Condition:</b> <?php echo $pg_condition; ?>  </p><hr>
                      <p style='font-family:Courgette;' class="animated wow fadeInUp" data-wow-delay="1.2s"><b style='font-family: Nova Script;'> Meals Included:</b> <?php echo $pg_meal; ?>  </p><hr>
                      <p style='font-family:Courgette;'><b class="blink" style="color:#FF4C4C;font-family: Nova Script;">Interested In this?</b></p> <p class="animated wow fadeInUp" data-wow-delay="1.6s"><small style="text-transform: uppercase;font-family: Nova Script;">&nbsp;call to the Owner!</small></p>
                      <p align="center" style='font-family:Courgette;' class="animated wow fadeInUp" data-wow-delay="2.0s"><i class="glyphicon glyphicon-earphone"></i>&nbsp; <?php echo $pg_ph_no; ?></p><hr>
                      <p class="price animated wow fadeInUp" data-wow-delay="2.4s" style="color:#FE970F; font-family:arial;font-family:Courgette;">Rs <?php echo $pg_price; ?>  </p>
                      <hr>
                     
                  </div>
                 
              </div>
          </div><!--row finish-->
          <div class="box animated wow fadeInRight" id="details">
              <h4 style="text-transform: uppercase;font-family: Nova Script;"><b style="font-family:arial; color:#14A1E6;stext-transform: uppercase;font-family: Nova Script;"  class="price animated wow fadeInUp" data-wow-delay="0.4s"><?php echo $pg_category; ?> DETAILS</b></h4><hr>
              <p style='font-family:Courgette;'  ><h5 style="text-transform: uppercase;font-family:Courgette;" class="price animated wow fadeInUp" data-wow-delay="0.8s"><b style="color:#FE4B4B;font-family:Courgette;" >Name:</b> <?php echo $pg_title; ?></h5>
            <hr>
              <h5 style="text-transform: uppercase;font-family:Nova Script;" class="price animated wow fadeInUp" data-wow-delay="1.2s"><b style="color:#FE4B4B;font-family: Nova Script;">Location:</b> <?php echo $pg_location; ?></h5><hr>
              <h5 style="text-transform: uppercase;font-family: Nova Script;" class="price animated wow fadeInUp" data-wow-delay="1.6s"><b style="color:#FE4B4B;">Address:</b></h5><p style='font-family:Courgette;' class=" animated wow fadeInUp" data-wow-delay="1.6s"><?php echo $pg_add; ?> </p><hr>
              <h5 style="text-transform: uppercase;font-family: Nova Script;"><b style="color:#FE4B4B;" class="price animated wow fadeInUp" data-wow-delay="2s">Descripton:</b></h5><p style="font-family:arial;font-family:Courgette;" class="animated wow fadeInUp" data-wow-delay="2s"><?php echo $pg_desc; ?> </p><hr>
              <h5 style="text-transform: uppercase;font-family: Nova Script;" class="price animated wow fadeInUp" data-wow-delay="2.4s"><b style="color:#FE4B4B;">Features:</b></h5>
              <ul style="margin-left:5%;"class="price animated wow fadeInUp" data-wow-delay="2.8s">
                  <p style="font-family:arial;font-family:Courgette;"><?php echo $pg_features; ?></p>
                  
                  <p style="font-family:arial;font-family:Courgette;"><?php echo $pg_feature2; ?></p>
                  
                  <p style="font-family:arial;font-family:Courgette;"><?php echo $pg_feature3; ?></p>
                  
                  <p style="font-family:arial; font-family:Courgette;"><?php echo $pg_feature4; ?></p>
                  <p style="font-family:arial;font-family:Courgette;"><?php echo $pg_feature5; ?></p>
                  
              </ul>
              <hr>
          </div>
          <div id="row same-height-row">
              <div class="col-md-3 col-sm-6">
                  <div class="box same-height headline animated wow fadeInRight" data-wow-delay="0.4s">
                      <h4 class="text-center" style="padding-top:100px;text-transform: uppercase;font-family: Nova Script;"><b style="color:#FF4C4C;">You May Be Like</b></h4>
                  </div>
              </div>
            
                
                 <?php 
              
              $get_pg = "select * from products order by rand()  LIMIT 0,3";
              $run_pg = mysqli_query($con,$get_pg);
              mysqli_query($con,"update products set view = view +1");
              while($row_pg  = mysqli_fetch_array($run_pg)){
                  $pg_id = $row_pg['product_id'];
                  $pg_title = $row_pg['product_title'];
                  $pg_img1 = $row_pg['product_img1'];
                  $pg_price = $row_pg['product_price'];
                  $pg_view = $row_pg['view'];
                  
                  echo"<a href='details.php?pro_id=$pg_id'><div class='col-md-3 col-sm-6 center-responsive text-center animated wow fadeInRight' data-wow-delay='0.8'>
                  <a href='details.php?pro_id=$pg_id'><div class='product same-height' style='height:100%;margin-top:10px;margin-bottom:10px;'><a href='details.php?pro_id=$pg_id'>
                  <div class='badge' style='font-family:Courgette;'>$pg_view views</div>
                  <img class='img-responsive' src='customer/pg_images/$pg_img1'style='height:170px;width:100%;'>
                  </a><div style='background:#ffffff;margin-top:-10px;height:150px;'>
                  <div class='text'><h4 style='text-transform: uppercase;background:#ffffff;padding-top:10px;padding-left:10px;'><a href='details.php?pro_id=$pg_id'style='text-decoration:none; font-size:14px;text-transform: uppercase;font-family: Nova Script;' >$pg_title</a></h4>
                      <div class='product-price' style='padding-left:10px;font-family:Courgette;'>Rs $pg_price </div>
                  </div>
                  <div style='margin-top:5px;padding-left:10px;'>
                  <a href='details.php?pro_id=$pg_id' class='btn btn-danger' style='text-transform: uppercase;font-family: Nova Script;'>View Details</a>
                  </div>
                  </div>
                  </a>
                  </div>
              </div></a>";
              }
              
              ?>
          </div>
      </div><!--col-md-9 finish-->
       </div>
   </div><!--content finish-->
   <div style="text-align:center">
   <?php 
    include("includes/footer.php");
       ?></div>
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
