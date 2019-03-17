<?php 
include("includes/db.php");

 ?>
  
 
<form   method="post" enctype="multipart/form-data">
      
      <h3 align="center" style="background:#FF4C4C; height:50px; padding-top:1%;">Insert Post</h3><hr>
     <div class="form-group">
        <label>PG Or Tiffin title:</label>
        <input type="text" class="form-control" name="pg_title" id="inputEmail" placeholder="PG Or Tiffin title:">
    </div>
    <div class="form-group">
        <label >Choose category:</label>
        <select name="pg_cat" class="form-control" required>
                           <option>Select Category</option>
                           <?php 
                                   $get_p_cats = "select * from products_category";
                                   $run_p_cats = mysqli_query($con,$get_p_cats);
                                   while($row_p_cats=mysqli_fetch_array($run_p_cats )){
                                       $p_cat_id = $row_p_cats['p_cat_id'];
                                       $p_cat_title = $row_p_cats['p_cat_title'];
                                       echo"<option>$p_cat_title</option>";
                                   }
                                   ?>
                       </select> <b>Note:</b> if you did'nt get category name  from option then you can insert new category  by yourself from insert category option.
    </div>
    <div class="form-group">
        <label>choose PG Or Tiffin image 1:</label>
        <input type="file" class="form-control" name="pg_img_1" id="inputEmail" placeholder="PG Or Tiffin title:" required>
    </div>
    <div class="form-group">
        <label>choose PG Or Tiffin image 2:</label>
        <input type="file" class="form-control" name="pg_img_2" id="inputEmail" placeholder="PG Or Tiffin title:" required>
    </div>
    <div class="form-group">
        <label>choose PG Or Tiffin image 3:</label>
        <input type="file" class="form-control" name="pg_img_3" id="inputEmail" placeholder="PG Or Tiffin title:">
    </div>
    <div class="form-group">
        <label>choose PG Or Tiffin image 4:</label>
        <input type="file" class="form-control" name="pg_img_4" id="inputEmail" placeholder="PG Or Tiffin title:" required>
    </div>
    <div class="form-group">
        <label>choose PG Or Tiffin image 5:</label>
        <input type="file" class="form-control" name="pg_img_5" id="inputEmail" placeholder="PG Or Tiffin title:" required>
    </div>
     <div class="form-group">
        <label>PG Or Tiffin Price:</label>
        <input type="text" class="form-control" name="pg_price" id="inputEmail" placeholder="PG Or Tiffin Price:" required>
    </div>
    <div class="form-group">
        <label>Meal included:</label>
        <select name="pg_meal" class="form-control"><option>Yes</option>
          <option>NO</option>
    </select>
    </div>
    <div class="form-group">
        <label>PG Or Tiffin Loaction:</label>
        <input type="text" class="form-control" name="pg_location" id="inputEmail" placeholder="PG Or Tiffin location:" required>
    </div>
    <div class="form-group">
        <label>PG Or Tiffin Address:</label>
        <textarea type="text" name="pg_add" class="form-control rounded-0" id="exampleFormControlTextarea2" rows="5"  style="border-color:black;" required></textarea>
    </div>
    <div class="form-group">
        <label>PG Or Tiffin Description:</label>
        <textarea type="text" name="pg_desc" class="form-control rounded-0" id="exampleFormControlTextarea2" rows="5"  style="border-color:black;" required></textarea>
    </div>
    <div class="form-group">
        <label>PG Or Tiffin Feature 1:</label>
        <textarea type="text" name="pg_features" class="form-control rounded-0" id="exampleFormControlTextarea2" rows="5"  style="border-color:black;" required></textarea>
    </div>
    <div class="form-group">
        <label>PG Or Tiffin Feature 2:</label>
        <textarea type="text" name="pg_feature2" class="form-control rounded-0" id="exampleFormControlTextarea2" rows="5"  style="border-color:black;" required></textarea>
    </div>
    <div class="form-group">
        <label>PG Or Tiffin Feature 3:</label>
        <textarea type="text" name="pg_feature3" class="form-control rounded-0" id="exampleFormControlTextarea2" rows="5"  style="border-color:black;" required></textarea>
    </div>
    <div class="form-group">
        <label>PG Or Tiffin Feature 4:</label>
        <textarea type="text" name="pg_feature4" class="form-control rounded-0" id="exampleFormControlTextarea2" rows="5"  style="border-color:black;"></textarea>
    </div>
    <div class="form-group">
        <label>PG Or Tiffin Feature 5:</label>
        <textarea type="text" name="pg_feature5" class="form-control rounded-0" id="exampleFormControlTextarea2" rows="5"  style="border-color:black;" ></textarea>
    </div>
    <div class="form-group">
        <label>PG Or Tiffin Condition:</label>
        <input type="text" class="form-control" name="pg_condition" id="inputEmail" placeholder="PG Or Tiffin Condition:" required>
    </div>
    <div class="form-group">
        <label>Owners No:</label>
        <input type="text" class="form-control" name="pg_no" id="inputEmail" placeholder="Owners No:" required>
    </div>
    
    <div align="center"><button type="submit" class="btn btn-primary" name="insert_post">Add Post</button>
    </div>
      
      
  </form>
 <?php 
 $user = $_SESSION["customer_email"];
 $query = mysqli_query($con,"select customer_id from customers where customer_email ='$user'");
$row = mysqli_fetch_array($query);
 $id = $row["customer_id"];
if (isset($_POST["insert_post"])) {
    $pg_cat = mysqli_real_escape_string($con,$_REQUEST["pg_cat"]);
    $pg_title = mysqli_real_escape_string($con,$_REQUEST["pg_title"]);
    $pg_img_1 = mysqli_real_escape_string($con,$_FILES["pg_img_1"]["name"]);
    $pg_img_2 = mysqli_real_escape_string($con,$_FILES["pg_img_2"]["name"]);
    $pg_img_3 = mysqli_real_escape_string($con,$_FILES["pg_img_3"]["name"]);
    $pg_img_4 = mysqli_real_escape_string($con,$_FILES["pg_img_4"]["name"]);
    $pg_img_5 = mysqli_real_escape_string($con,$_FILES["pg_img_5"]["name"]);
    $temp_name1 = $_FILES["pg_img_1"]["tmp_name"];
    $temp_name2 = $_FILES["pg_img_2"]["tmp_name"];
    $temp_name3 = $_FILES["pg_img_3"]["tmp_name"];
    $temp_name4 = $_FILES["pg_img_4"]["tmp_name"];
    $temp_name5 = $_FILES["pg_img_5"]["tmp_name"];
    $pg_price = mysqli_real_escape_string($con,$_REQUEST["pg_price"]);
        $pg_location = mysqli_real_escape_string($con,$_REQUEST["pg_location"]);
        $pg_address = mysqli_real_escape_string($con,$_REQUEST["pg_add"]);
        $pg_desc = mysqli_real_escape_string($con,$_REQUEST["pg_desc"]);
        $pg_features = mysqli_real_escape_string($con,$_REQUEST["pg_features"]);
        $pg_feature_2 = mysqli_real_escape_string($con,$_REQUEST["pg_feature2"]);
        $pg_feature_3 = mysqli_real_escape_string($con,$_REQUEST["pg_feature3"]);
        $pg_feature_4 = mysqli_real_escape_string($con,$_REQUEST["pg_feature4"]);
        $pg_feature_5 = mysqli_real_escape_string($con,$_REQUEST["pg_feature5"]);
        $pg_condition = mysqli_real_escape_string($con,$_REQUEST["pg_condition"]);
        $pg_no = mysqli_real_escape_string($con,$_REQUEST["pg_no"]);
        $pg_meal = mysqli_real_escape_string($con,$_REQUEST["pg_meal"]);
     
    move_uploaded_file($temp_name1,"pg_images/$pg_img_1");
    move_uploaded_file($temp_name2,"pg_images/$pg_img_2");
    move_uploaded_file($temp_name3,"pg_images/$pg_img_3");
    move_uploaded_file($temp_name4,"pg_images/$pg_img_4");
    move_uploaded_file($temp_name5,"pg_images/$pg_img_5");
     
 $insert_pg = "INSERT INTO products(p_cat_id,product_title,product_category,product_img1,product_img2,product_img3,product_price,product_location,product_desc,product_features,product_condition,product_ph_no,product_meal,product_feature1,product_feature2,product_feature3,product_feature4,product_img4,product_img5,product_address) VALUES ('$id','$pg_title','$pg_cat','$pg_img_1','$pg_img_2','$pg_img_3','$pg_price','$pg_location','$pg_desc','$pg_features','$pg_condition','$pg_no','$pg_meal','$pg_feature_2','$pg_feature_3','$pg_feature_4','$pg_feature_5','$pg_img_4','$pg_img_5','$pg_address')";
 $insert_pro = mysqli_query($con, $insert_pg );
    
if($insert_pro){
echo "<script> alert('inserted successfully') </script>" ;
echo "<script> window.open('my_account.php?my_post','_self') </script>" ;

} 
}

?>


