<?php include('config/constants.php');?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Website</title>
    <style>
       img{
           height:8rem;
           width:9rem;
       }
       .head{
           display: flex;
           text-align: center;
           margin-left: 14rem;
       }
       
       .body{
        text-align: center;
           margin-left: 2rem;
           padding-bottom: 2%;
           font-size: larger;
       }
       .team{
           margin-bottom: 20px;
       }
       .uvce-title{
           margin-top: 50px;
       }
       .project{
           margin-bottom: 40px;
       }
       .click{
           padding: 1%;
           background-color: blueviolet;
           color: white;
           border: none;
           border-radius: 0.5rem;
           cursor:pointer;
       }

    </style>
</head>
<body>
    <div class="head">
    <img src="images/Uvce_logo.jpg" alt="uvce" class="uvce">
    <h1 class="uvce-title">UNIVERSITY VISVESVERAYA COLLEGE OF ENGINEERING</h1>
    </div>
    <div class="body">
    <h2 class="project">Food Ordering Management System</h2>
    <h3 class="team">Team Members</h3>
    <div class="head1">
    <li class="jyoti">Jyoti Kumari
        <p>19GANSE020</p>
    </li>
    <li class="bhumika">Bhumika
        <p>19GANSE008</p>
    </li>
    </div>
    <a href="http://localhost/food_order/user_login.php"><button class="click">Click to View Project</button></a>
    </div>

</body>
</html>
