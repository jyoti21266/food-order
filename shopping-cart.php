<?php include('partials-front/menu.php'); ?>

<h1 class="food-cart">My Shopping Cart</h1>
<?php
if(isset($_SESSION['remove'])){
    echo $_SESSION['remove'];
    unset($_SESSION['remove']);
}
if(isset($_SESSION['update1'])){
  echo $_SESSION['update1'];
  unset($_SESSION['update1']);
}

?>
        
<div class="container1">
    <div class="first">
    <form action=""  method="POST">

      <table>
          
          <tr>
              <th>Sno</th>
              <th>Food Name</th>
              <th>Food Price</th>
              <th>Quantity</th>
              
              
        </tr>
        
        <?php 
        if(isset($_GET['food_id'])){
          $id=$_GET['food_id'];
          $sql="SELECT * FROM tbl_food WHERE id=$id";
          $res=mysqli_query($conn,$sql);
          if($res==true){
              $count=mysqli_num_rows($res);
              if($count==1){
                  $row=mysqli_fetch_assoc($res);
                  $food_name=$row['title'];
                  $price=$row['price'];
                  
              }
             
            }
          $user=$_SESSION['ids'];
          $sql3="SELECT * FROM shopping_cart WHERE food_id=$id AND user_id=$user";
          $res3=mysqli_query($conn,$sql3);
          $row1=mysqli_num_rows($res3);
          
          if($row1==0){
          $sql1="INSERT INTO shopping_cart SET
           user_id=$user,
           food_id=$id,
           food_name='$food_name',
           price=$price
          ";
          $res1=mysqli_query($conn,$sql1);
          if($res1){
              $_SESSION['cart']="<div class='success'>$food_name added</div>";
          }
          else{
            $_SESSION['cart']="<div class='failure'>$food_name cannot be added</div>";
          }
        }
        else{
            $_SESSION['exist']="<div class='failure'>Already in shopping cart!</div>";
            header("location:".SITEURL."foods.php");
        }
    }
    
          ?>

          <?php
          $user=$_SESSION['ids'];
          $sql2="SELECT * FROM shopping_cart WHERE user_id=$user";
          $res2=mysqli_query($conn,$sql2);
          $total=0;
          if($res2){
            $row3=mysqli_num_rows($res2);
            $idx=1;
            
            if($row3>0){
              while($row3=mysqli_fetch_assoc($res2)){
                  $food_name=$row3['food_name'];
                  $price=$row3['price'];
                  $id=$row3['food_id'];
                  $uid=$row3['user_id'];
                  $q=$row3['quantity'];
                  
            ?>
          <tr>
             <td><?php echo $idx++?></td>
              <td><?php echo $food_name?></td>
              <td><?php echo $price;
              ?>
            <input type="hidden" value='<?php echo $price;?>' class='price'> 
            </td>
              <?php $total=$total+$price;?>
              
              <td><a href="<?php echo SITEURL;?>update.php?id1=<?php echo $id;?>&user1=<?php echo $uid;?>" class="update">Update</a> <?php echo $q;?></td>
              <td><a href="<?php echo SITEURL;?>del-food.php?id1=<?php echo $id;?>&user1=<?php echo $uid;?>" class="del">Remove</a></td>
         </tr> 
         
         <?php
              }
            }
        }
      
        ?> 
    
    <?php
        $sql0="UPDATE shopping_cart SET
         total=$total
        where user_id=$user";
        $res0=mysqli_query($conn,$sql0);
        ?>       
</table>
     
   </form>
   </div>
   <div class="second">
       <h1>Grand Total</h1>
       <h3 class="total">
        <?php echo $total?></h3>
       <a href="<?php echo SITEURL;?>order.php?uid=<?php echo $uid;?>&total=<?php echo $total;?>" style="color:white;" class='order'>ORDER</a>
</div>
</div>


  
  </body>
  </html>

