<?php include("partials/menu.php");?>

<div class="wrapper">
    <h1 class="banner">MANAGE ADMIN</h1>
    <a href="add-admin.php"><button class="primary-btn">Add Admin</button></a>
     
    <?php
     if(isset($_SESSION['add'])){
         echo $_SESSION['add'];
         unset($_SESSION['add']);
     }
     if(isset($_SESSION['delete'])){
        echo $_SESSION['delete'];
        unset($_SESSION['delete']);
     }
     if(isset($_SESSION['update'])){
        echo $_SESSION['update'];
        unset($_SESSION['update']);
     }
     if(isset($_SESSION['pwd_changed'])){
        echo $_SESSION['pwd_changed'];
        unset($_SESSION['pwd_changed']);
     }
     if(isset($_SESSION['user_not_found'])){
        echo $_SESSION['user_not_found'];
        unset($_SESSION['user_not_found']);
     }
     if(isset($_SESSION['id_not_found'])){
        echo $_SESSION['id_not_found'];
        unset($_SESSION['id_not_found']);
     }
     if(isset($_SESSION['pwd_unchanged'])){
        echo $_SESSION['pwd_unchanged'];
        unset($_SESSION['pwd_unchanged']);
     } 
    ?>
    
       <table>
           <tr>
               <th>Sno</th>
               <th>First Name</th>
               <th>Username</th>
               <th>Actions</th>
           </tr>
           <?php
             $sql="SELECT * FROM tbl_admin";
             $res=mysqli_query($conn,$sql);
             if($res==TRUE){
                 $rows=mysqli_num_rows($res);
                 $id=1;
                 if($rows>0)
                 {
                     while($rows=mysqli_fetch_assoc($res)){
                         $sid=$rows['id'];
                         $full_name=$rows['full_name'];
                         $username=$rows['user_name'];
                         ?>

               <tr>
               <td><?php echo $id++ ?> </td>
               <td><?php echo $full_name?></td>
               <td><?php echo $username?></td>
               <td>
                <a href="<?php echo SITEURL;?>admin/update-password.php?id=<?php echo $sid; ?>"><button class="change-btn">Change Password</button></a>
                <a href="<?php echo SITEURL;?>admin/update-admin.php?id=<?php echo $sid; ?>"><button class="up-btn">update Admin</button></a>
               <a href="<?php echo SITEURL;?>admin/delete-admin.php?id=<?php echo $sid; ?>"><button class="del-btn">Delete Admin</button></a>
               </td>
           </tr>
           <?php
                     }
                 }
                 else{

                 }
             }
           ?>
           
</table>
</div>

<?php include("partials/footer.php");?>
