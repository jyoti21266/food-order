<?php include("partials/menu.php"); ?>

<div class="wrapper">
    <h1 class="banner">ADD ADMIN</h1>
    <form action="" method="POST">

       <table class="width-30">
           <tr>
               <td>Full Name:</td>
               <td>
                   <input type="text" name="fullname" placeholder="Enter Full Name">
                </td>
           <tr>
           <tr>
               <td>Username:</td>
               <td>
                   <input type="text" placeholder="Enter UserName" name="username">
                </td>
           <tr>
           <tr>
               <td>Password:</td>
               <td>
                   <input type="password" name="password" placeholder="password">
                </td>
           <tr>
           <tr>
               
               <td colspan="2">
                   <input type="submit" placeholder="Enter Full Name" name="submit" class="up-btn">
                </td>
           <tr>
       </table>

    </form>


</body>
</html>
<?php 
  if(isset($_POST['submit'])){
      $fullname=$_POST['fullname'];
      $username=$_POST['username'];
      $password=md5($_POST['password']);

      $sql = "INSERT INTO tbl_admin SET 
             full_name='$fullname',
             user_name='$username',
             password='$password'
             ";

       $res=mysqli_query($conn,$sql) or die(mysqli_error());    
       if($res==TRUE){
           $_SESSION['add']="<div class='success'>Admin added successfully</div>";
           header("location:".SITEURL."admin/manage-admin.php");
       }  
       else{
        $_SESSION['add']="<div class='failure'>Failed to add admin</div>";
        header("location:".SITEURL."admin/add-admin.php");
       }
             
  }
 