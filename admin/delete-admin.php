<?php
include('../config/constants.php');
$id=$_GET['id'];
$sql="DELETE FROM tbl_admin WHERE id=$id";
$res=mysqli_query($conn,$sql);
//check whether query executed successfully 
if($res==true){
 //echo"DELETED";
 $_SESSION['delete']='<div class="success">Admin deleted successfully!!!</div>';
 header("location:".SITEURL.'admin/manage-admin.php');
}
else{
 // echo "FAILED";
 $_SESSION['delete']='<div class="failure">Failed to delete admin!!!</div>';
 header("location:".SITEURL.'admin/manage-admin.php');
}

?>