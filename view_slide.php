<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / View slides Of Home Page
                
            </li><!-- active finish -->
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row no: 3 begin -->
    <div class="col-lg-12"><!-- col-lg-8 begin -->
        <div class="panel panel-primary"><!-- panel panel-primary begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->
                    
                    <i class="fa fa-tags fa-fw"></i> View slides Of Home Page
                    
                </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->
           
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-hover table-striped table-bordered"><!-- table table-hover table-striped table-bordered begin -->
                        
                        <thead><!-- thead begin -->
                          
                            <tr><!-- th begin -->
                           
                                <th> slide Id </th>
                                <th> slide Name  </th>
                                <th> slide Image  </th>
                                <th> Delete Category </th>
                         </tr><!-- th finish -->
                            
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                           <?php 
                            
                            $query= mysqli_query($con,"select * from slider");
                            while($get_info= mysqli_fetch_array($query)){
                                $slider_id = $get_info['slider_id'];
                                $slide_name = $get_info['slide_name'];
                                $slide_image = $get_info['slide_image'];
                               
                                echo"<tr>
                                <td align='center'>$slider_id </td>
                                
                                <td align='center'> $slide_name</td>
                                <td align='center'> <img src='../images/$slide_image ' style='height:200px;width:200px;'></td>
                                
                                
                                <td align='center'> 
                                     
                                     <a href='index.php?delete_slide= $slider_id'>
                                     
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