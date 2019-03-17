<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / View Categories
                
            </li><!-- active finish -->
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row no: 3 begin -->
    <div class="col-lg-12"><!-- col-lg-8 begin -->
        <div class="panel panel-primary"><!-- panel panel-primary begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->
                    
                    <i class="fa fa-tags fa-fw"></i> View Categories
                    
                </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->
           
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-hover table-striped table-bordered"><!-- table table-hover table-striped table-bordered begin -->
                        
                        <thead><!-- thead begin -->
                          
                            <tr><!-- th begin -->
                           
                                <th> category Id </th>
                                <th> category Name : </th>
                                <th> Delete Category </th>
                         </tr><!-- th finish -->
                            
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                           <?php 
                            
                            $query= mysqli_query($con,"select * from products_category");
                            while($get_info= mysqli_fetch_array($query)){
                                $cat_id = $get_info['p_cat_id'];
                                $cat_name = $get_info['p_cat_title'];
                               
                                echo"<tr>
                                <td align='center'> $cat_id </td>
                                
                                <td align='center'> $cat_name </td>
                                
                                
                                <td align='center'> 
                                     
                                     <a href='index.php?delete_category= $cat_id'>
                                     
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