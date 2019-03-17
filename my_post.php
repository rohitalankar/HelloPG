<center><!--  center Begin  -->
    
    <h1 class="animated wow fadeInUp" data-wow-delay="0.8s" style="background:#FF4C4C; padding-top:1%;"> My Posts </h1>
    
</center><!--  center Finish  -->


<hr>


<div class="table-responsive"><!--  table-responsive Begin  -->
    
    <table class="table table-bordered table-hover"><!--  table table-bordered table-hover Begin  -->
        
        <thead style="background:#14A0E7;"><!--  thead Begin  -->
            
            <tr align='center'><!--  tr Begin  -->
                
                <th align="center"> No:</th>
                <th align="center"> TITLE </th>
                <th align="center"> CATEGORY  </th>
                <th align='center'>IMAGE </th>
                <th align='center'>LOCATION </th>
                <th align='center'> OWNER Mob.No </th>
                <th align='center'> PRICE</th>
                <th align='center'> VISITORS</th>
                <th align='center'> VIEW</th>
                <th align='center'> EDIT </th>
                <th align='center'> DELETE</th>
                
            </tr><!--  tr Finish  -->
            
        </thead><!--  thead Finish  -->
        
        <tbody><!--  tbody Begin  -->
           
           <?php 
            
          $user = $_SESSION["customer_email"];
 $query = mysqli_query($con,"select customer_id from customers where customer_email ='$user'");
$row = mysqli_fetch_array($query);
 $id = $row["customer_id"];
            
            $get_orders = "select * from products where p_cat_id='$id'";
            
            $run_orders = mysqli_query($con,$get_orders);
            $i = 1;
            
            
            
            while($row_orders = mysqli_fetch_array($run_orders)){
                $pg_id = $row_orders['product_id'];
                $pg_title = $row_orders['product_title'];
                
                $pg_image = $row_orders['product_img1'];
                
                $pg_location = $row_orders['product_location'];
                $pg_category = $row_orders['product_category'];
                
                $pg_Ph_no = $row_orders['product_ph_no'];
                $pg_price = $row_orders['product_price'];
                $pg_view = $row_orders['view'];
                
                echo"<div class='text-center'><tr><!--  tr Begin  -->
                
                <td align='center' style='padding-top:20px;'> $i </td>
                <td align='center' style='padding-top:20px;'> $pg_title </td>
                <td align='center' style='padding-top:20px;'> $pg_category </td>
                <td align='center'> <img src='pg_images/$pg_image' style='height:50px; width:50px;' </td>
                <td align='center' style='padding-top:20px;'> $pg_location</td>
                <td align='center' style='padding-top:20px;'> $pg_Ph_no </td>
                <td align='center' style='padding-top:20px; '> $pg_price</td>
                <td align='center' style='padding-top:20px; '>$pg_view</td>
                <td align='center' style='padding-top:20px; color:blue '><a href='../details.php?pro_id=$pg_id'><i class='fa fa-eye'></i></a></td>
                <td align='middle' style='padding-top:20px;color:#FF4C4C;'><a href='my_account.php?edit_post=$pg_id'><i class='fa fa-pencil'></i></a> </td>
                <td align='middle' style='padding-top:20px;color:#FF4C4C;'><a href='my_account.php?delete_post=$pg_id'><i class='fa fa-trash-o'></i></a></td>
                
                
            </tr></div><!--  tr Finish  -->";
                    
                $i++;    
                }
            
            ?>
            
            
            
            
        </tbody><!--  tbody Finish  -->
        
    </table><!--  table table-bordered table-hover Finish  -->
    
</div><!--  table-responsive Finish  -->