<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_category'])){
        
        $delete_id = $_GET['delete_category'];
        
        $delete_pro = "delete from products_category where p_cat_id='$delete_id'";
        
        $run_delete = mysqli_query($con,$delete_pro);
        
        if($run_delete){
            
            echo "<script>alert('One of yours category has been Deleted')</script>";
            
            echo "<script>window.open('index.php?view_category','_self')</script>";
            
        }
        
    }

?>

<?php } ?>