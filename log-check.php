<?php
  if(!isset($_SESSION['user'])){
      $_SESSION['logout']="<div class='failure'>Login or register!!</div>";
      header("location:".SITEURL.'user_login.php');
  }
?>