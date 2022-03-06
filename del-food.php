<?php 

include('config/constants.php');

if(isset($_GET['id1']) AND isset($_GET['user1'])){
    $id=$_GET['id1'];
    $uid=$_GET['user1'];
    $sql="DELETE FROM shopping_cart WHERE food_id=$id AND user_id=$uid ";
    $res=mysqli_query($conn,$sql);
    if($res==TRUE){
        $_SESSION['remove']="<div class='success'>Removed from Cart</div>";
        header("location:".SITEURL."shopping-cart.php");
    }
    else{
        $_SESSION['remove']="<div class='failure'>Cannot remove from Cart</div>";
        header("location:".SITEURL."shopping-cart.php");
    }

}
// else{
//     $_SESSION['remove']="<div class='failure'>Cannot remove from Cart</div>";
//     header("location:".SITEURL."shopping-cart.php");
// }
?>