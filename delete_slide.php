<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_slide'])){
        
        $delete_id = $_GET['delete_slide'];
        
        $delete_pro = "delete from slider where slider_id='$delete_id'";
        
        $run_delete = mysqli_query($con,$delete_pro);
        
        if($run_delete){
            
            echo "<script>alert('One of your slide has been Deleted')</script>";
            
            echo "<script>window.open('index.php?view_slide','_self')</script>";
            
        }
        
    }

?>

<?php } ?>