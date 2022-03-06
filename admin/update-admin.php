<?php include("partials/menu.php");?>

<div class="main-content">
    <div class="wrapper">
        <h1 class="banner">Update Admin</h1>
        <br>
        <?php
$id=$_GET['id'];
$sql="SELECT * FROM tbl_admin WHERE id=$id";
$res=mysqli_query($conn,$sql);
if($res==true){
    $count=mysqli_num_rows($res);
    if($count==1){
        $row=mysqli_fetch_assoc($res);
        $fullname=$row['full_name'];
        $username=$row['user_name'];
    }
    else{
        header("location:".SITEURL.'admin/manage-admin.php');
    }
}
?>
        <form action="" method="POST">
      <table class="width-30">
          <tr>
              <td>Fullname: </td>
               
                  <td><input type="text" name="full_name" value="<?php echo $fullname;?>" placeholder="Full Name"></td>
          </tr>
          <tr>
              <td>Username: </td>
               
                  <td><input type="text" name="user_name" value="<?php echo $username;?>" placeholder="Username"></td>
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
if(isset($_POST['submit']))
{
    $id=$_POST['id'];
    $fullname=$_POST['full_name'];
    $username=$_POST['user_name'];

    $sql="UPDATE tbl_admin SET 
    full_name='$fullname',
    user_name='$username'
    where id='$id'
    ";

$res=mysqli_query($conn,$sql);    
if($res==TRUE){
    $_SESSION['update']="<div class='success'>Admin updated successfully!!!</div>";
    header("location:".SITEURL."admin/manage-admin.php");
} 
else{
    $_SESSION['update']="<div class='failure'>Failed to update admin!!!!</div>";
    header("location:".SITEURL."admin/add-admin.php");
} 
}
?>
</body>
</html>