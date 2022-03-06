<?php include('config/constants.php'); 
     include('log-check.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/24b0f6dee0.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="<?php echo SITEURL;?>" title="Cook's Treat">
                    <img src="images/logo.jpg" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="<?php echo SITEURL ?>">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL ?>categories.php">Categories</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL ?>foods.php">Foods</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>shopping-cart.php" title="Shopping cart"><i class="fas fa-shopping-cart"></i>  My cart</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>logout_user.php" title="Log out"><i class="fas fa-user-alt"></i>  <?php 
                        if(isset($_SESSION['user'])){
                            echo $_SESSION['user'];
                            
                        }
                        
                        
                        ?>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->