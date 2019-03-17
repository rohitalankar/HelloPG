<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / View Owners
                
            </li><!-- active finish -->
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row no: 3 begin -->
    <div class="col-lg-12"><!-- col-lg-8 begin -->
        <div class="panel panel-primary"><!-- panel panel-primary begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->
                    
                    <i class="fa fa-money fa-fw"></i> View Owners
                    
                </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->
           
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-hover table-striped table-bordered"><!-- table table-hover table-striped table-bordered begin -->
                        
                        <thead><!-- thead begin -->
                          
                            <tr><!-- th begin -->
                           
                                <th> Owner Id </th>
                                <th> Owner Photo : </th>
                                <th> Owner Name </th>
                                <th> Owner Email </th>
                                <th> Owner Password </th>
                                <th> Owner Contact </th>
                                <th> Owner Adress </th>
                                <th> Delete Account </th>
                            
                            </tr><!-- th finish -->
                            
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                           <?php 
                            
                            $query= mysqli_query($con,"select * from customers");
                            while($get_info= mysqli_fetch_array($query)){
                                $customer_id = $get_info['customer_id'];
                                $customer_name = $get_info['customer_name'];
                                $customer_mob_no = $get_info['customer_contact'];
                                $customer_email = $get_info['customer_email'];
                                $customer_pass = $get_info['customer_pass'];
                                $customer_address = $get_info['customer_address'];
                                $customer_image = $get_info['customer_image'];
                                echo"<tr>
                                <td> $customer_id </td>
                                <td> <img src='../customer/customer_images/$customer_image' style='height:80px; width:80px;'> </td>
                                <td> $customer_name </td>
                                <td> $customer_email </td>
                                <td> $customer_pass </td>
                                <td> $customer_mob_no</td>
                                <td> $customer_address</td>
                                <td> 
                                     
                                     <a href='index.php?delete_owner= $customer_id'>
                                     
                                        <i class='fa fa-trash-o'></i> Delete
                                    
                                     </a> 
                                     
                                </td>
                                </tr>";
                            }
                            
                            ?>
                            
                            </tbody><!-- tbody finish -->
                        
                    </table><!-- table table-hover table-striped table-bordered finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-primary finish -->
    </div><!-- col-lg-8 finish -->
    
</div><!-- row no: 3 finish -->

<?php } ?>