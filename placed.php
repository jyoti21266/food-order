<?php include('config/constants.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .container{
            padding:2%;
            border:1px solid #d1c9c9;
            width: 30%;
            margin-left: 500px;
            font-family: sans-serif;
            font-size:larger;
            box-shadow: 2px 2px 2px 2px #d1c9c9;
        }
        .text-center{
            text-align:center;
            margin-top: 200px;
        }
        img{
            height:100px;
        }
        .buttons{
            padding:2%;
            color:white;
            background-color:blue;
            border:none;
            cursor: pointer;
            text-decoration:none;
        }
        .cancel{
            padding:2%;
            color:white;
            background-color:red;
            border:none;
            cursor: pointer;
            text-decoration:none;
        }
        
    </style>
    <title>Document</title>
</head>
<body>
    <div class="container text-center">
      <div class="head">Thankyou For Your Purchase</div>
      <br>
      <div class="order">Order Placed!</div>
      <div class="order">Your Order will be delivered within 5 days</div>
      
      <br>
      <img src="images/tick.jpg" alt="success">
      <br>
      <br>
      <div class="order">Visit Again <span>&#128522</span></div>
      <br>
      
      <div>
          <a href="<?php echo SITEURL;?>" class="buttons">OK</a>
          
      </div>
    </div>
</body>
</html>