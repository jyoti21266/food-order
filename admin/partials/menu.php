
 <?php 
 
 include('../config/constants.php'); 
 include('login-check.php');
 ?>
<html>
    <head>
        <title>Food order home page</title>
        <link rel="stylesheet" href="admin.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/24b0f6dee0.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    </head>

    <body>
        <!--menu section -->
        <div class="menu text-center">
           <div class="wrapper">
               <ul>
                   <li><a href="index.php">Home</a></li>
                   <li><a href="manage-category.php">Category</a></li>
                   <li><a href="manage-food.php">Food</a></li>
                   <li><a href="manage-admin.php">Admin</a></li>
                   <li><a href="manage-order.php">Orders</a></li>
                   <li><a href="<?php echo SITEURL; ?>logout_user.php"><i class="fas fa-sign-out-alt"></i>
                <?php
                 if(isset($_SESSION['users'])){
                    echo $_SESSION['users'];
                    
                }
                ?>
                </a>
                </li>
                </ul>
           </div>
        </div>
        <script>
  AOS.init();
</script>
    
        <!--menu section ends -->