<?php
$active='Shop';
 include('includes/header.php');
?>
   <div id="content"><!--content start-->
       <div class="container-fluid">
           <div class="col-md-12">
               <ul class="breadcrumb animated wow fadeInUp">
                   <li style='font-family:Courgette;'><a href="index.php">Home</a></li>
                   <li style='font-family:Courgette;'>
                       Categories
                   </li>
               </ul>
           </div>
           <div class="col-md-3  animated wow fadeInUp">
              <?php 
    include("includes/sidebar.php");
    ?>
 </div>
      <div class="col-md-9"><!--colo-md-9 begin-->
         
          <div class="row">
             <?php
              if(!isset($_GET['p_cat'])){
                   if(!isset($_GET['loc'])){
                  
                $per_page = 6;
                  if(isset($_GET['page'])){
                      $page = $_GET['page'];
                  }
                  else{
                      $page =1;
                  }
                  $start_from = ($page-1)*$per_page;
                  $get_products = "select * from products order by 1 DESC LIMIT $start_from,$per_page";
                  $run_products = mysqli_query($con,$get_products);
                  mysqli_query($con,"update products set view = view +1");
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
		<div class='product-details'>
			<span class='product-location' style='font-family:Courgette;'>$pg_location</span>
			<h4 style='font-family: Nova Script;'><a href='details.php?pro_id=$pg_id'>$pg_title</a></h4>
			<div class='product-price' style='font-family:Courgette;'>Rs $pg_price </div>
			<div class='product-bottom-details'>
				<a href='details.php?pro_id=$pg_id' class='btn btn-danger' style='width:100%; font-family:Nova Script;'>View Details</a>
				
			</div>
		</div>
	</div>  </div> ";
                  }
                  ?>
          </div>
          <center>
              <ul class="pagination animated wow fadeInUp" data-wow-delay="0.4s">
                  <?php
                             
                    $query = "select * from products";
                             
                    $result = mysqli_query($con,$query);
                             
                    $total_records = mysqli_num_rows($result);
                             
                    $total_pages = ceil($total_records / $per_page);
                             echo "<li style='font-family:Courgette;'>
                            <a href='shop.php?page=1'> ".'First Page'." </a>
                            </li>";
                            for($i=1; $i<=$total_pages; $i++){
                              echo "<li style='font-family:Courgette;'>
                            <a href='shop.php?page=".$i."'> ".$i." </a>
                            </li>";  
                     };
                             echo "<li style='font-family:Courgette;' class=' animated wow fadeInUp'>
                            <a href='shop.php?page=$total_pages'> ".'Last Page'." </a>
                            </li>";
                    }
                }
				?> 
              </ul>
          </center>
          <?php 
              getcatpro();
              getlocpro();
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
include("chat.php");
?>
    </body>
</html>
