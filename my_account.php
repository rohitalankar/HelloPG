<?php
session_start();
if(!isset($_SESSION['customer_email'])){
    echo"<script>window.open('../checkout.php','_self')</script>";
}
else{
include("includes/db.php");
include("functions/function.php");
?>
<?php 
    if(isset($_GET['pro_id'])){
        $pro_id = $_GET['pro_id'];
        $get_pg = "select * from products where product_id = '$pro_id'";
        $run_pg = mysqli_query($con,$get_pg);
        $row_pg = mysqli_fetch_array($run_pg);
        $p_cat_id = $row_pg['p_cat_id'];
        $pg_title = $row_pg['product_title'];
        $pg_price = $row_pg['product_price'];
        $pg_desc = $row_pg['product_desc'];
        $pg_img1 = $row_pg['product_img1'];
        $pg_img2 = $row_pg['product_img2'];
        $pg_img3 = $row_pg['product_img3'];
        $pg_category = $row_pg['product_category'];
        $pg_location = $row_pg['product_location'];
        $pg_condition = $row_pg['product_condition'];
        $pg_features = $row_pg['product_features'];
        $pg_ph_no = $row_pg['product_ph_no'];
        
        $get_p_cat = "select * from products_category where p_cat_title='$pg_category'";
        $run_p_cat = mysqli_query($con,$get_p_cat);
        $row_p_cat = mysqli_fetch_array($run_p_cat);
        $p_cat_title = $row_p_cat['p_cat_title'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello PG- Say Hello to New PG</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="icon" href="../images/hellopg_178309.png">
     <link rel="stylesheet" href="styles/animate.min.css"> 
    <link href="https://fonts.googleapis.com/css?family=Courgette|Nova+Script" rel="stylesheet"> 
</head>
<body>
   
   <div id="top"><!-- Top Begin -->
       
       <div class="container-fluid"><!-- container Begin -->
           
           <div class="col-md-6 offer" style='font-family:Courgette;'><!-- col-md-6 offer Begin -->
               
               <a href="#" class="btn btn-success btn-sm">
                   <?php 
                   
                   if(!isset($_SESSION['customer_email'])){
                       
                       echo "Welcome: Guest";
                       
                   }else{
                       
                       echo "Welcome: " . $_SESSION['customer_email'] . "";
                       
                   }
                   
                   ?>
                   
               </a>
               
               
           </div><!-- col-md-6 offer Finish -->
           
           <div class="col-md-6"><!-- col-md-6 Begin -->
               
               <ul class="menu" style='font-family:Courgette;'><!-- cmenu Begin -->
                   
                   <li>
                       <a href="../customer_register.php">Register</a>
                   </li>
                   <li>
                       <a href="my_account.php">My Account</a>
                   </li>
                   
                   <li>
                       <a href="../checkout.php">
                           <?php 
                           
                           if(!isset($_SESSION['customer_email'])){
                       
                                echo "<a href='checkout.php'> Login </a>";

                               }else{

                                echo " <a href='logout.php'> Log Out </a> ";

                               }
                           
                           ?>
                           
                       </a>
                   </li>
                   
               </ul><!-- menu Finish -->
               
           </div><!-- col-md-6 Finish -->
           
       </div><!-- container Finish -->
       
   </div><!-- Top Finish -->
   
   <div id="navbar" class="navbar navbar-default"><!-- navbar navbar-default Begin -->
       
       <div class="container-fluid"><!-- container Begin -->
           
           <div class="navbar-header"><!-- navbar-header Begin -->
               
               <a href="../index.php" class="navbar-brand home"><!-- navbar-brand home Begin -->
                   
                   <img src="images/hellopg_178309.png" alt="helloPG Logo" class="hidden-xs">
               </a><!-- navbar-brand home Finish -->
               
               <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                   
                   <span class="sr-only">Toggle Navigation</span>
                   
                   <i class="fa fa-align-justify"></i>
                   
               </button>
               
               <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                   
                   <span class="sr-only">Toggle Search</span>
                   
                   <i class="fa fa-search"></i>
                   
               </button>
               
           </div><!-- navbar-header Finish -->
           
           <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse Begin -->
               
               <div class="padding-nav"><!-- padding-nav Begin -->
                   
                   <ul class="nav navbar-nav left" style='font-family:Courgette;'><!-- nav navbar-nav left Begin -->
                       
                       <li>
                           <a href="../index.php">Home</a>
                       </li>
                       <li>
                           <a href="../index.php#about">About Us</a>
                       </li>
                       <li>
                           <a href="../shop.php">categories</a>
                       </li>
                       <li class="active">
                           <a href="my_account.php">My Account</a>
                       </li>
                       
                       <li>
                           <a href="../contact.php">Contact Us</a>
                       </li>
                       <div style="float:right;">
                        <form method="get" action="../result.php" class="navbar-form"><!-- navbar-form Begin -->
                       
                       <div class="input-group"><!-- input-group Begin -->
                           
                           <input type="text" class="form-control" placeholder="Search location OR PG " name="user_query" required>
                           
                           <span class="input-group-btn"><!-- input-group-btn Begin -->
                           
                           <button type="submit" name="search" value="Search" class="btn btn-primary"><!-- btn btn-primary Begin -->
                               
                               <i class="fa fa-search"></i>
                               
                           </button><!-- btn btn-primary Finish -->
                           
                           </span><!-- input-group-btn Finish -->
                           
                       </div><!-- input-group Finish -->
                       
                   </form><!-- navbar-form Finish -->
                       </div>
                       
                   </ul><!-- nav navbar-nav left Finish -->
                   
               </div><!-- padding-nav Finish -->
               
    </div><!-- navbar-collapse collapse Finish -->
           
       </div><!-- container Finish -->
       
   </div><!-- navbar navbar-default Finish -->
   <div id="content"><!--content start-->
       <div class="container-fluid">
           <div class="col-md-12">
               <ul class="breadcrumb animated wow fadeInUp" style='font-family:Courgette;'>
                   <li><a href="../index.php">Home</a></li>
                   <li>
                       My Account
                   </li>
               </ul>
           </div>
           <div class="col-md-3" style='font-family:Courgette;'>
              <?php 
    include("includes/sidebar.php");
    ?>
 </div>
            <div class="col-md-9"><!-- col-md-9 start-->
                <div class="box animated wow fadeInDown" style='font-family:Courgette;'>
                    <?php 
                        if(isset($_GET['my_post'])){
                            include("my_post.php");
                        }
                    ?>
                    <?php 
                        if(isset($_GET['pay_offline'])){
                            include("pay_offline.php");
                        }
                    ?>
                    
                    <?php 
                        if(isset($_GET['edit_account'])){
                            include("edit_account.php");
                        }
                    ?>
                    <?php 
                        if(isset($_GET['change_pass'])){
                            include("change_pass.php");
                        }
                    ?>
                     <?php 
                        if(isset($_GET['delete_account'])){
                            include("delete_account.php");
                        }
                    ?>
                     <?php 
                        if(isset($_GET['insert_post'])){
                            include("insert_post.php");
                        }
                    ?>
                    <?php 
                        if(isset($_GET['edit_post'])){
                            $ed_id =$_GET['edit_post']; 
                            $get_orders = "select * from products where product_id='$ed_id'";
                            $query= mysqli_query($con,$get_orders);
                            $row_pg = mysqli_fetch_array($query);
                            $p_cat_id = $row_pg['p_cat_id'];
        $pg_title = $row_pg['product_title'];
        $pg_price = $row_pg['product_price'];
        $pg_desc = $row_pg['product_desc'];
        $pg_img1 = $row_pg['product_img1'];
        $pg_img2 = $row_pg['product_img2'];
        $pg_img3 = $row_pg['product_img3'];
        $pg_img4 = $row_pg['product_img4'];
        $pg_img5 = $row_pg['product_img5'];
        $pg_category = $row_pg['product_category'];
        $pg_location = $row_pg['product_location'];
        $pg_condition = $row_pg['product_condition'];
        $pg_features = $row_pg['product_features'];
        $pg_feature_2 = $row_pg['product_feature1'];
        $pg_feature_3 = $row_pg['product_feature2'];
        $pg_feature_4 = $row_pg['product_feature3'];
        $pg_feature_5 = $row_pg['product_feature4'];
        $pg_ph_no = $row_pg['product_ph_no'];
        $pg_meal = $row_pg['product_meal'];
        $pg_address = $row_pg['product_address'];
                         ?>
                         <form   method="post" enctype="multipart/form-data">
      
      <h3 align="center" style="color:#FF4C4C;">Update Post</h3><hr>
    <div class="form-group">
        <label>PG Or Tiffin title:</label>
        <input type="text" class="form-control" name="pg_title" id="inputEmail" value="<?php echo $pg_title; ?>">
    </div><hr>
    <div class="form-group">
        <label >Choose category:</label>
        <select name="pg_cat" class="form-control" required>
                           <option><?php echo $pg_category; ?></option>
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
    </div><hr>
    <div class="form-group">
        <label>choose PG Or Tiffin image 1:</label>
        <input type="file" class="form-control" name="pg_img_1" id="inputEmail" placeholder="PG Or Tiffin title:" required>
        <img src="pg_images/<?php echo $pg_img1; ?>" style=" position:relative; height:80px; width:80px;margin-top:20px;">
    </div><hr>
    <div class="form-group">
        <label>choose PG Or Tiffin image 2:</label>
        <input type="file" class="form-control" name="pg_img_2" id="inputEmail" placeholder="PG Or Tiffin title:" required>
        <img src="pg_images/<?php echo $pg_img2; ?>" style=" position:relative; height:80px; width:80px;margin-top:20px;">
    </div><hr>
    <div class="form-group">
        <label>choose PG Or Tiffin image 3:</label>
        <input type="file" class="form-control" name="pg_img_3" id="inputEmail" placeholder="PG Or Tiffin title:">
        <img src="pg_images/<?php echo $pg_img3; ?>" style=" position:relative; height:80px; width:80px;margin-top:20px;">
    </div><hr>
    <div class="form-group">
        <label>choose PG Or Tiffin image 4:</label>
        <input type="file" class="form-control" name="pg_img_4" id="inputEmail" placeholder="PG Or Tiffin title:" required>
        <img src="pg_images/<?php echo $pg_img4; ?>" style=" position:relative; height:80px; width:80px;margin-top:20px;">
    </div><hr>
    <div class="form-group">
        <label>choose PG Or Tiffin image 5:</label>
        <input type="file" class="form-control" name="pg_img_5" id="inputEmail" placeholder="PG Or Tiffin title:" required>
        <img src="pg_images/<?php echo $pg_img5; ?>" style=" position:relative; height:80px; width:80px;margin-top:20px;">
    </div><hr>
     <div class="form-group">
        <label>PG Or Tiffin Price:</label>
        <input type="text" class="form-control" name="pg_price" id="inputEmail" value="<?php echo $pg_price; ?>" required>
    </div>
    <div class="form-group">
        <label>Meal included:</label>
        <select name="pg_meal" class="form-control"><option><?php echo $pg_meal; ?></option>
          <option>NO</option>
    </select>
    </div>
    <div class="form-group">
        <label>PG Or Tiffin Loaction:</label>
        <input type="text" class="form-control" name="pg_location" id="inputEmail" value="<?php echo $pg_location; ?>" required>
    </div>
    <div class="form-group">
        <label>PG Or Tiffin Address:</label>
        <textarea type="text" name="pg_address" class="form-control rounded-0" id="exampleFormControlTextarea2" rows="5"  style="border-color:black;" required><?php echo $pg_address; ?></textarea>
    </div>
    <div class="form-group">
        <label>PG Or Tiffin Description:</label>
        <textarea type="text" name="pg_desc" class="form-control rounded-0" id="exampleFormControlTextarea2" rows="5"  style="border-color:black;" required><?php echo $pg_desc; ?></textarea>
    </div>
    <div class="form-group">
        <label>PG Or Tiffin Feature 1:</label>
        <textarea type="text" name="pg_features" class="form-control rounded-0" id="exampleFormControlTextarea2" rows="5"  style="border-color:black;" required><?php echo $pg_features; ?></textarea>
    </div>
    <div class="form-group">
        <label>PG Or Tiffin Feature 2:</label>
        <textarea type="text" name="pg_feature2" class="form-control rounded-0" id="exampleFormControlTextarea2" rows="5"  style="border-color:black;" required><?php echo $pg_feature_2; ?></textarea>
    </div>
    <div class="form-group">
        <label>PG Or Tiffin Feature 3:</label>
        <textarea type="text" name="pg_feature3" class="form-control rounded-0" id="exampleFormControlTextarea2" rows="5"  style="border-color:black;" required><?php echo $pg_feature_3; ?></textarea>
    </div>
    <div class="form-group">
        <label>PG Or Tiffin Feature 4:</label>
        <textarea type="text" name="pg_feature4" class="form-control rounded-0" id="exampleFormControlTextarea2" rows="5"  style="border-color:black;"><?php echo $pg_feature_4; ?></textarea>
    </div>
    <div class="form-group">
        <label>PG Or Tiffin Feature 5:</label>
        <textarea type="text" name="pg_feature5" class="form-control rounded-0" id="exampleFormControlTextarea2" rows="5"  style="border-color:black;" required><?php echo $pg_feature_5; ?></textarea>
    </div>
    <div class="form-group">
        <label>PG Or Tiffin Condition:</label>
        <input type="text" class="form-control" name="pg_condition" id="inputEmail" value="<?php echo $pg_condition; ?>" required>
    </div>
    <div class="form-group">
        <label>Owners No:</label>
        <input type="text" class="form-control" name="pg_no" id="inputEmail" value="<?php echo $pg_ph_no; ?>" required>
    </div>
        <div align="center"><button type="submit" class="btn btn-primary" name="insert_post">Update Post</button>
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
        $pg_desc = mysqli_real_escape_string($con,$_REQUEST["pg_desc"]);
        $pg_features = mysqli_real_escape_string($con,$_REQUEST["pg_features"]);
        $pg_feature_2 = mysqli_real_escape_string($con,$_REQUEST["pg_feature2"]);
        $pg_feature_3 = mysqli_real_escape_string($con,$_REQUEST["pg_feature3"]);
        $pg_feature_4 = mysqli_real_escape_string($con,$_REQUEST["pg_feature4"]);
        $pg_feature_5 = mysqli_real_escape_string($con,$_REQUEST["pg_feature5"]);
        $pg_condition = mysqli_real_escape_string($con,$_REQUEST["pg_condition"]);
        $pg_no = mysqli_real_escape_string($con,$_REQUEST["pg_no"]);
        $pg_meal = mysqli_real_escape_string($con,$_REQUEST["pg_meal"]);
        $pg_address = mysqli_real_escape_string($con,$_REQUEST["pg_address"]);
     
     
    move_uploaded_file($temp_name1,"pg_images/$pg_img_1");
    move_uploaded_file($temp_name2,"pg_images/$pg_img_2");
    move_uploaded_file($temp_name3,"pg_images/$pg_img_3");
    move_uploaded_file($temp_name4,"pg_images/$pg_img_4");
    move_uploaded_file($temp_name5,"pg_images/$pg_img_5");
     
 $insert_pg = "UPDATE products SET product_title='$pg_title',product_img1='$pg_img_1',product_img2='$pg_img_2',product_img3='$pg_img_3',product_price='$pg_price',product_desc='$pg_desc',product_location='$pg_location',product_condition='$pg_condition',product_features='$pg_features',product_ph_no='$pg_ph_no',product_category='$pg_cat',product_meal='$pg_meal',product_feature1='$pg_feature_2',product_feature2='$pg_feature_3',product_feature3='$pg_feature_4',product_feature4='$pg_feature_5',product_img4='$pg_img_4',product_img5='$pg_img_5',product_address='$pg_address' WHERE product_id='$ed_id'";
 $insert_pro = mysqli_query($con, $insert_pg );
if($insert_pro){
echo "<script> alert('You have updated successfully') </script>" ;
echo "<script> window.open('my_account.php?my_post','_self') </script>" ;
} }
 ?>
<?php }?>
           <?php 
                        if(isset($_GET['delete_post'])){
                            $delete_id =$_GET['delete_post']; 
                    ?>       
                    <center><!-- center Begin -->
    
    <h1> Do You Realy Want To Delete This Post? </h1>
    
    <form action="" method="post"><!-- form Begin -->
        
       <input type="submit" name="Yes" value="Yes, I Want To Delete" class="btn btn-danger"> 
        
       <input type="submit" name="No" value="No, I Dont Want To Delete" class="btn btn-primary"> 
        
    </form><!-- form Finish -->
    
</center><!-- center Finish -->
<?php 
    if(isset($_POST['Yes'])){
    
    $delete_pg = "delete from products where product_id='$delete_id'";
    
    $run_delete_customer = mysqli_query($con,$delete_pg);
    
    if($run_delete_customer){
        echo "<script>alert('Successfully delete your post, feel sorry about this. Add more Post')</script>";
        echo "<script>window.open('my_account.php?my_post','_self')</script>";
        }
}
if(isset($_POST['No'])){
    echo "<script>window.open('my_account.php?my_orders','_self')</script>";
}
?>     
<?php } ?>
         <?php  
                if(!isset($_GET['insert_category'])){
                        if(!isset($_GET['edit_post'])){
                        if(!isset($_GET['edit_post'])){
                            if(!isset($_GET['insert_post'])){
                                if(!isset($_GET['delete_account'])){
                                    if(!isset($_GET['change_pass'])){
                                        if(!isset($_GET['edit_account'])){
                                            if(!isset($_GET['my_post'])){
                                              if(!isset($_GET['delete_post'])){
                                                  if(!isset($_GET['category'])){
                ?>
                <?php  
                   $user = $_SESSION["customer_email"];
 $query = mysqli_query($con,"select customer_id from customers where customer_email ='$user'");
                                                  $get_id = mysqli_fetch_array($query);
                                                  $c_id =$get_id['customer_id'] ;
                        $get_pg =mysqli_query($con,"select * from products where p_cat_id ='$c_id'");
                        $count = mysqli_num_rows($get_pg);
                $cat = mysqli_query($con,"select * from products_category");
                      $cat_count = mysqli_num_rows($cat);                            
                    ?>
        <h1 class="page-header text-center animated wow fadeInUp" style="background:#FF4C4C; padding-top:2%;"> Dashboard </h1>
        <ol class="breadcrumb animated wow fadeInUp" data-wow-delay="0.4s" ><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->
                <i class="fa fa-dashboard"></i> Dashboard
            </li><!-- active finish -->
        </ol><!-- breadcrumb finish -->
        <div class="row"><!-- row no: 2 begin -->
   
    <div class="col-lg-4 col-md-6"><!-- col-lg-3 col-md-6 begin -->
        <div class="panel panel-primary animated wow fadeInRight"><!-- panel panel-primary begin -->
            
            <div class="panel-heading"><!-- panel-heading begin -->
                <div class="row"><!-- panel-heading row begin -->
                    <div class="col-xs-3"><!-- col-xs-3 begin -->
                       
                        <i class="fa fa-tasks fa-5x"></i>
                        
                    </div><!-- col-xs-3 finish -->
                    
                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right begin -->
                        <div class="huge"><?php echo $count; ?> </div>
                           
                        <div> Posts </div>
                        
                    </div><!-- col-xs-9 text-right finish -->
                    
                </div><!-- panel-heading row finish -->
            </div><!-- panel-heading finish -->
            
            <a href="my_account.php?my_post"><!-- a href begin -->
                <div class="panel-footer"><!-- panel-footer begin -->
                   
                    <span class="pull-left"><!-- pull-left begin -->
                        View Details 
                    </span><!-- pull-left finish -->
                    
                    <span class="pull-right"><!-- pull-right begin --> 
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span><!-- pull-right finish --> 
                    
                    <div class="clearfix"></div>
                    
                </div><!-- panel-footer finish -->
            </a><!-- a href finish -->
            
        </div><!-- panel panel-primary finish -->
    </div><!-- col-lg-3 col-md-6 finish -->
                  <div class="col-lg-4 col-md-6"><!-- col-lg-3 col-md-6 begin -->
        <div class="panel panel-red animated wow fadeInRight" data-wow-delay="0.4s"><!-- panel panel-red begin -->
            
            <div class="panel-heading"><!-- panel-heading begin -->
                <div class="row"><!-- panel-heading row begin -->
                    <div class="col-xs-3"><!-- col-xs-3 begin -->
                       
                        <i class="fa fa-clipboard fa-5x"></i>
                        
                    </div><!-- col-xs-3 finish -->
                    
                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right begin -->   
                        <div> Insert Post </div>
                        
                    </div><!-- col-xs-9 text-right finish -->
                    
                </div><!-- panel-heading row finish -->
            </div><!-- panel-heading finish -->
            
            <a href="my_account.php?insert_post"><!-- a href begin -->
                <div class="panel-footer"><!-- panel-footer begin -->
                   
                    <span class="pull-left"><!-- pull-left begin -->
                        Insert Post from here 
                    </span><!-- pull-left finish -->
                    
                    <span class="pull-right"><!-- pull-right begin --> 
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span><!-- pull-right finish --> 
                    
                    <div class="clearfix"></div>
                    
                </div><!-- panel-footer finish -->
            </a><!-- a href finish -->
            
        </div><!-- panel panel-red finish -->
    </div><!-- col-lg-3 col-md-6 finish -->
                  <div class="col-lg-4 col-md-6"><!-- col-lg-3 col-md-6 begin -->
        <div class="panel panel-orange animated wow fadeInRight" data-wow-delay="0.8s" ><!-- panel panel-yellow begin -->
            
            <div class="panel-heading"><!-- panel-heading begin -->
                <div class="row"><!-- panel-heading row begin -->
                    <div class="col-xs-3"><!-- col-xs-3 begin -->
                       
                        <i class="fa fa-tags fa-5x"></i>
                        
                    </div><!-- col-xs-3 finish -->
                    
                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right begin -->
                        <div class="huge"> <?php echo $cat_count; ?> </div>
                           
                        <div>Categories </div>
                        
                    </div><!-- col-xs-9 text-right finish -->
                    
                </div><!-- panel-heading row finish -->
            </div><!-- panel-heading finish -->
            <a href="my_account.php?insert_category"><!-- a href begin -->
                <div class="panel-footer"><!-- panel-footer begin -->
                   
                    <span class="pull-left"><!-- pull-left begin -->
                        Add Category 
                    </span><!-- pull-left finish -->
                    
                    <span class="pull-right"><!-- pull-right begin --> 
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span><!-- pull-right finish --> 
                <div class="clearfix"></div>
                </div><!-- panel-footer finish -->
            </a><!-- a href finish -->
        </div><!-- panel panel-yellow finish -->
    </div><!-- col-lg-3 col-md-6 finish -->
</div>
                    <h3 class="animated wow fadeInUp" data-wow-delay="0.4s"> Instruction for You</h3>
                    <ol>
                        <li class="animated wow fadeInUp" data-wow-delay="0.8s">when You will insert details of PG or Tiffin Services try to add more details using insert post option</li>
                        <li class="animated wow fadeInUp" data-wow-delay="1.2s">when You must insert atleast 5 images of PG or Tiffin Services </li>
                        <li class="animated wow fadeInUp" data-wow-delay="1.6s">when You must insert atleast 3 features of PG or Tiffin Services </li>
                    </ol>
    <?php }}}}}}}}}}?> 
                         <?php 
                        if(isset($_GET['insert_category'])){
                            include("insert_category.php");
                        }
                    ?>
                     </div>                
</div><!-- col-md-9 finish-->
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
    <?php 
        include("../chat.php");
    ?>
    </body>
</html>
<?php }?>