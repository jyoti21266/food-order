<?php include("partials/menu.php");?>
<div class="main-content">
    <div class="wrapper">
        <h1 class="banner">Update Password</h1>
        <br>
        <?php
        if(isset($_GET['id'])){
            $id=$_GET['id'];
        }
        ?>
        <form action="" method="POST">
      <table class="width-30">
          <tr>
              <td>Current Password:</td>
               
                  <td><input type="password" name="cur_pw" placeholder="current password"></td>
          </tr>
          <tr>
              <td>New Password:</td>
               
                  <td><input type="password" name="new_pw" placeholder="enter new password"></td>
          </tr>
          <tr>
              <td>Confirm Password:</td>
               
                  <td><input type="password" name="confirm_pw" placeholder="enter password again"></td>
          </tr>
          <tr>
          <td colspan="2">
          <input type="hidden" name="id" value="<?php echo $id;?>">
                   <input type="submit"  name="submit"  class="up-btn">
                </td>
          </tr>
      </table>
        </form>
    </div>
</div>
<?php
if(isset($_POST['submit'])){
 $id=$_POST['id'];
 $curpassword=md5($_POST['cur_pw']);
 $newpassword=md5($_POST['new_pw']);
 $confirm=md5($_POST['confirm_pw']);

 $sql="SELECT * FROM tbl_admin WHERE id=$id AND password='$curpassword'";
$res=mysqli_query($conn,$sql);

     if($res==true){
  $count=mysqli_num_rows($res);
  if($count==1){
      if($newpassword==$confirm){
        $sql2="UPDATE tbl_admin SET password='$newpassword'
        WHERE id=$id ";
        $res2=mysqli_query($conn,$sql2);
       if($res2==true){
         $_SESSION['pwd_changed']='<div class="success">Password Changed!!!</div>';
         header("location:".SITEURL.'admin/manage-admin.php');
    }
     else{
         $_SESSION['pwd_unchanged']='<div class="failure">Failed to change password!!!</div>';
         header("location:".SITEURL.'admin/manage-admin.php');
     }
}  
   else{
       $_SESSION['user_not_found']='<div class="failure">New password did not match with confirm password!!!</div>';
       header("location:".SITEURL.'admin/manage-admin.php');
   }
 }

 else{
     $_SESSION['id_not_found']='<div class="failure">Wrong ID!!!</div>';
     header("location:".SITEURL.'admin/manage-admin.php');
  }
 }
 else{
     $_SESSION['id_not_found']='<div class="failure">Wrong ID!!!</div>';
     header("location:".SITEURL.'admin/manage-admin.php');
  }

}


?>
</body>
</html>