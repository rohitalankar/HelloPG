<?php
$active='Shop';
 include('includes/header.php');
?>
   <div id="content"><!--content start-->
       <div class="container-fluid">
           <div class="col-md-12">
               <ul class="breadcrumb animated wow fadeInUp">
                   <li style='font-family: Nova Script;'><a href="index.php">Home</a></li>
                   <li style='font-family: Nova Script;'>
                       Categories
                   </li>
               </ul>
           </div>
           <div class="col-md-3">
              <?php 
    include("includes/sidebar.php");
    ?>
 </div>
      <div class="col-md-9"><!--colo-md-9 begin-->
         
          <div class="row">
             <?php
              if(isset($_GET['search'])){
                  $search_user=$_GET['user_query'];
                $per_page = 6;
                  if(isset($_GET['page'])){
                      $page = $_GET['page'];
                  }
                  else{
                      $page =1;
                  }
                  $start_from = ($page-1)*$per_page;
                  $get_products = "select * from products where product_location like '%$search_user%' OR product_title like '%$search_user%'";
                  $run_products = mysqli_query($con,$get_products);
                   $count = mysqli_num_rows($run_products);
         if($count==0){
             echo"<div class='box'> <h1 align='center'style='color:#FF4C4C;'>NO,Such Result Found! </h1></div>";
         }
                  else{   mysqli_query($con,"update products set view = view +1");
                  while($row_products = mysqli_fetch_array($run_products)){
                    $pg_id = $row_products['product_id'];
                    $pg_title = $row_products['product_title'];
                    $pg_price = $row_products['product_price'];
                    $pg_image1 = $row_products['product_img1'];
                    $pg_location = $row_products['product_location'];
                    $pg_view = $row_products['view'];
                      
                      echo"<div class='col-md-3 col-sm-6 center-responsive text-center animated wow fadeInRight'>
                            <div class='product-card'>
		<div class='badge' style='font-family:Courgette;'>$pg_view views</div>
		<div class='product-tumb'>
			<a href='details.php?pro_id=$pg_id'><img src='customer/pg_images/$pg_image1' alt=''></a>
		</div>
		<div class='product-details' style='height:230px;'>
			<span class='product-location' style='font-family:Courgette;'>$pg_location</span>
			<h4 style='font-family: Nova Script;'><a href='details.php?pro_id=$pg_id'>$pg_title</a></h4>
			<div class='product-price' style='font-family:Courgette;'>Rs $pg_price </div>
			<div class='product-bottom-details'>
				<a href='details.php?pro_id=$pg_id' class='btn btn-danger' style='width:100%;font-family: Nova Script;'>View Details</a>
                    </div>
		      </div>
	       </div>
        </div> ";
                  }}?>
          </div>
         <?php } ?>
              <?php 
              getcatpro();
              ?>
          </div>
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
