<?php include('partials-front/menu.php'); ?>
<h1 class="food-cart">Update Quantity</h1>

<?php
 if(isset($_GET['id1']) and isset($_GET['user1'])){
     $id=$_GET['id1'];
     $user=$_GET['user1'];
     $sql="SELECT * FROM tbl_food where id=$id";
     $res=mysqli_query($conn,$sql);
     if($res){
         $row=mysqli_fetch_assoc($res);
         $name=$row['title'];
         $price=$row['price'];
     }
     $s="SELECT * from shopping_cart where food_id=$id and user_id=$user";
     $r=mysqli_query($conn,$s);
     $ro=mysqli_fetch_assoc($r);
     $q=$ro['quantity'];
 }

 ?>
 <form action="" method="POST">
<table class="tbl">
    <tr class="td1">
       <td class="td1">Food Name:</td>
       <td><?php echo $name;?></td>
    </tr>
    <tr class="td1">
       <td class="td1">Food Price:</td>
       <td><?php echo $price;?></td>
    </tr>
    <tr class="td1">
       <td class="td1">Quantity:</td>
       <td><input type="text" name="quantity" value="<?php echo $q;?>"></td>
    </tr>
    <tr class="td1">
    <td class="td1"><input type="submit" name="submit" value="Update_cart" class="main-btn"></td>
    </tr>
</table>
</form>

<?php
 if(isset($_POST['submit'])){
     $uid=$_GET['user1'];
     $quantity=$_POST['quantity'];
     $sql1="SELECT * from shopping_cart where user_id=$uid and food_id=$id";
     $res1=mysqli_query($conn,$sql1);
     $row1=mysqli_fetch_assoc($res1);
     if($row1){
         $p=$row1['price'];
         $q=$row1['quantity'];
         $t=$row1['total'];  
     }
   $q=$quantity;
   $ans=$q*$price;
   $t=$t+$ans-($price);
   $sql3="UPDATE shopping_cart set
   total=$t
   where user_id=$uid";
   $res3=mysqli_query($conn,$sql3);
   

  $sql2="UPDATE shopping_cart set
  quantity=$q,
  price=$ans
  where user_id=$uid and food_id=$id";
  $res2=mysqli_query($conn,$sql2);

  if($res2==true && $res3==true)
                {
                    //Updated
                    $_SESSION['update1'] = "<div class='success'>Updated Successfully.</div>";
                    header('location:'.SITEURL.'shopping-cart.php');
                }
   

 }
 
 ?>