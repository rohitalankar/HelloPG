<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / insert Slides For Home Page
                
            </li><!-- active finish -->
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row no: 3 begin -->
    <div class="col-lg-12"><!-- col-lg-8 begin -->
        <div class="panel panel-primary"><!-- panel panel-primary begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->
                    
                    <i class="fa fa-tags fa-fw"></i> insert Slides For Home Page
                    
                </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->
           
            <form   method="post" enctype="multipart/form-data">
      
      
      <table  class="table table-hover table-bordered"  border=2>
                   <tr  align="middle">
                       <td colspan="6" style="background-color:#FF4C4C;"><h3> Add New Slide</h3></td>
                   </tr>
                   <tr>
                       <td align="middle"><b>Slide Name:</b> </td>
                       <td><input type="text" name="pg_name" size="30"></td>
                   </tr>
                   <tr>
                       <tr>
                       <td align="middle"><b>slide Image:</b> </td>
                       <td><input type="file" name="pg_image" size="30"></td>
                   </tr>
                   <tr>
                        
                       <td  align="middle" colspan="8"><button type="submit"  name="insert_slide" class="btn btn-primary">Add Category</button></td>
                   </tr>
                    
                    
            </table>
      
      
 </form>
 <?php 

if(isset($_POST['insert_slide'])){
    $pg_name = mysqli_real_escape_string($con,$_REQUEST['pg_name']);
    $pg_image = mysqli_real_escape_string($con,$_FILES['pg_image']['name']);
        $temp_name1 = $_FILES['pg_image']['tmp_name'];
    move_uploaded_file($temp_name1,"../images/$pg_image");
        $insert = mysqli_query($con,"insert into slider (slide_name,slide_image) values('$pg_name','$pg_image')");
        if($insert){
            echo"<script>alert('You have added new slide successfully')</script>";
            echo"<script>window.open('index.php?insert_slide','_self')</script>";
        }
    
}

?>
            
        </div><!-- panel panel-primary finish -->
    </div><!-- col-lg-8 finish -->
    
</div><!-- row no: 3 finish -->

<?php } ?>