<?php include('../config/constants.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        *{
            font-family:sans-serif;
        }
           .wrapper{
               border:1px solid rgba(0,0,0,.12);
               width:30%;
               text-align:center;
               margin:5% auto;
                background-color:rgba(0,0,0,0.5);
               box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
           }
           body{
            background-image:url("../images/log1.jpg");
               background-size:cover;
               background-repeat: no-repeat;
           }
           form{
               align-items:center;
           }
           td{
               font-size:larger;
               margin-left:10px;
           }
          input{
              padding:15px;
              font-size:20px;
              margin-bottom:30px;
              margin-top:10px;
          }
          input[type=text]:focus {
           background-color: lightblue;
          }
          .up-btn{
              background-color:#942cf5;
              padding:9pxpx 10px 9px 10px;
              margin-left:50px;
              color:white;
              cursor:pointer;
          }
          .up-btn:hover{
              background-color:#5c0eab;
          }
          .success{
    padding:2%;
    margin: 10px 10px 10px 10px;
    color: limegreen;
    font-size: larger;
    text-align: center;
}

.failure{
    padding:2% 1% 2% 1%;
    margin: 10px 10px 10px 10px;
    color: rgb(245, 24, 8);
    font-size: larger;
    text-align: center;
}
.white{
    color:white;
}
    </style>
</head>
<body>
<div class="wrapper">
        <h1 class="white">Login</h1>
        <?php
         if(isset($_SESSION['wrong'])){
            echo $_SESSION['wrong'];
            unset($_SESSION['wrong']);
         }
         if(isset($_SESSION['logout'])){
             echo $_SESSION['logout'];
             unset($_SESSION['logout']);
         }
        ?>
        <br>
        <form action="" method="POST">
      <table>
          <tr>
              <td colspan='2' class="white">Username:</td>
               
                  <td><input type="username" name="user_name" placeholder="enter username"></td>
          </tr>
          
          <tr>
              <td colspan='2' class="white">Password:</td>
               
                  <td><input type="password" name="password" placeholder="enter password"></td>
          </tr>
         
          <tr>
                 <td colspan='2'>  <input type="submit"  name="submit"  class="up-btn">
                </td>
          </tr>
      </table>
        </form>
</div>
<?php
if(isset($_POST['submit']))
{
   $username=$_POST['user_name'];
   $password=md5($_POST['password']);
   $sql="SELECT * FROM tbl_admin WHERE password='$password'AND user_name='$username'";
   $res=mysqli_query($conn,$sql);
   $row=mysqli_fetch_assoc($res);
   $full=$row['full_name'];
   if($res==true){
       $count=mysqli_num_rows($res);
       if($count==1){
           $_SESSION['users']=$full;
        $_SESSION['login']="<div class='success'>Loged in successfully!!!</div>";
        header("location:".SITEURL."admin/");
       }
       else{
        $_SESSION['wrong']="<div class='failure'>Wrong username!!!</div>";
        header("location:".SITEURL."admin/login.php");
       }
   }
}


?>
</body>
</html>