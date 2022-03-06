<?php
  if(!isset($_SESSION['users'])){
      $_SESSION['logout']="<div class='failure'>Log in to access Admin Panel!!</div>";
      header("location:".SITEURL.'admin/login.php');
  }
?>