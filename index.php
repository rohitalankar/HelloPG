<?php 

    session_start();
    include("includes/db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HelloPG</title>
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="../images/hellopg_178309.png">
</head>
<body>

    <div id="wrapper"><!-- #wrapper begin -->
       
       <?php include("includes/sidebar.php"); ?>
       
        <div id="page-wrapper"><!-- #page-wrapper begin -->
            <div class="container-fluid"><!-- container-fluid begin -->
                
                <?php
                
                    if(isset($_GET['dashboard'])){
                        
                        include("dashboard.php");
                        
                }   if(isset($_GET['insert_product'])){
                        
                        include("insert_product.php");
                        
                }   if(isset($_GET['view_products'])){
                        
                        include("view_products.php");
                        
                } 
                if(isset($_GET['view_owners'])){
                        
                        include("view_owners.php");
                        
                } if(isset($_GET['delete_product'])){
                        
                        include("delete_product.php");
                        
                }  
                if(isset($_GET['delete_owner'])){
                        
                        include("delete_owner.php");
                        
                }  
                if(isset($_GET['delete_category'])){
                        
                        include("delete_category.php");
                        
                }  
                
                if(isset($_GET['view_category'])){
                        
                        include("view_category.php");
                        
                }
                if(isset($_GET['insert_cat'])){
                        
                        include("insert_cat.php");
                        
                }
                if(isset($_GET['view_slide'])){
                        
                        include("view_slide.php");
                        
                }
                if(isset($_GET['delete_slide'])){
                        
                        include("delete_slide.php");
                        
                }
                if(isset($_GET['insert_slide'])){
                        
                        include("insert_slide.php");
                        
                }
        
                ?>
                
            </div><!-- container-fluid finish -->
        </div><!-- #page-wrapper finish -->
    </div><!-- wrapper finish -->

<script src="js/jquery-331.min.js"></script>     
<script src="js/bootstrap-337.min.js"></script>           
</body>
</html>


