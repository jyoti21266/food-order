<?php include('partials-front/menu.php'); ?>

<div class="container cat text-center">
        <form action="" method='POST'>
            <?php
             if(isset($_GET['uid']) && isset($_GET['total'])){
                 $user=$_GET['uid'];
                 $total=$_GET['total'];
                 $sql="SELECT * FROM users WHERE user_id=$user";
                 $res=mysqli_query($conn,$sql);
                 if($res){
                     $row=mysqli_fetch_assoc($res);
                     $username=$row['user_name'];
                     $email=$row['email'];
                 }
             }
            ?>
            <div class="user">Customer Name:
                <input type="text"  name="name" value="<?php echo $username;?>" disabled>
            </div>
            <br>
            <div class="user">Customer Email:
                <input type="email"  name="eamil" value="<?php echo $email;?>" disabled>
            </div>
            
            <br>
            <div class="user text-center">Order Details:<br>
               
               <table style="margin-left:430px;">
                   <tr>
                       <th>Food</th>
                       
                       <th>Price</th>
                       <th>Quantity</th>
                   </tr>
                   <?php
                   $sql1="SELECT * FROM shopping_cart WHERE user_id=$user";
                   $res1=mysqli_query($conn,$sql1);
                   
                   if($res1){
                     $row=mysqli_num_rows($res1);
                     
                     if($row>0){
                         while($row=mysqli_fetch_assoc($res1)){
                             $food=$row['food_name'];
                             $price=$row['price'];
                             $q=$row['quantity'];
                        
                   ?>
                   <tr>
                       <td><?php echo $food; ?></td>
                       
                       <td><?php echo $price;?></td>
                       <td><?php echo $q; ?></td>
                   </tr>
                   <?php
                         }
                        }
                    }
                    ?>
               </table>
            </div>
            <br>
            <div class="user">Total Amount: <i class="fas fa-rupee-sign"></i> <?php echo $total;?>
               
            </div>
            <br>
            <br>
            <div class="user">Phone Number:
                <input type="tel" name="phone">
            </div>
            <br>
            <div class="user">Customer Address:
                <input type="textarea"  placeholder="Address..." name="address">
            </div>
            <br>
            
            <br>
           <input type="submit" class="pay" value="Conform Order" name="submit">
        </form>


</div>

<?php
if(isset($_POST['submit'])){
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $date=date("l jS \of F Y");
    $order='Ordered';
    
    $sql2="INSERT INTO tbl_order SET
    total=$total,
    customer_name='$username',
    customer_contact=$phone,
    customer_email='$email',
    customer_address='$address',
    user_id=$user,
    order_date='$date',
    status='$order'
    ";
    $res=mysqli_query($conn,$sql2);
    
    if($res){
       
        header('location:'.SITEURL.'placed.php');
    }
    else{
        echo "nope";
    }
}

?>
 
   
