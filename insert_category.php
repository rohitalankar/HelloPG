<form   method="post" enctype="multipart/form-data">
      
      
      <table  class="table table-hover table-bordered"  border=2>
                   <tr  align="middle">
                       <td colspan="6" style="background-color:#FF4C4C;"><h3> Add New PG Category</h3></td>
                   </tr>
                   <tr>
                       <td align="middle"><b>Category Name:</b> </td>
                       <td><input type="text" name="pg_category" size="30"></td>
                   </tr>
                   <tr>
                        
                       <td  align="middle" colspan="8"><button type="submit"  name="insert_category" class="btn btn-primary">Add Category</button></td>
                   </tr>
                    
                    
            </table>
      
      
 </form>
 <?php 

if(isset($_POST['insert_category'])){
    $category = $_REQUEST['pg_category'];
        
        $insert = mysqli_query($con,"insert into products_category (p_cat_title) values('$category')");
        if($insert){
            echo"<script>alert('You have added new category successfully')</script>";
            echo"<script>window.open('my_account.php?insert_post','_self')</script>";
        }
    
}

?>