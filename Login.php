<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN FORM</title>
    
<?php
    $link=mysqli_connect ("localhost", "root", "", "alphonsus");
    if ($link=== false) {
 
        die ("connection failed: ");
    }
    ?>
     
     <?php
 
     if(isset($_POST['username'])){
 
     $username = $_POST['username'];
     $password = $_POST['password'];
     $query = "SELECT * FROM  users WHERE username='$username'
     AND password = '" . md5($password) . "'";
     $result = mysqli_query($link,$query);
     $rows = mysqli_num_rows($result);
     if ($rows==1) {
        echo "Login is successful; Click to see the <a href='school.html.html'>Home</a> Page";
        
     }else{
      echo "<div class='form>
      <h3>Incorrect username/password.</h3><br/>
      <p class='link'>Click here to <a href='Login.php'>Login</a> again.</p>
      </div>";
     }
       
 
     
   
   
     }
?>
 
</head>
<body>
<div class="b">
<img src="Images/St Alphonsus -logo 1.jpeg" alt="Logo" class="img-rounded" width="200" height="200" class="Logo">
  </div>
  <div class="c">
<p><h1><b>LOGIN FORM</b></h1></p>
</div>

 
<style>
   body {background-image: url(images/back.jpg);}
   div.c {background-color: rgb(62, 62, 201);
              text-align: center;
              font-family: "Lucida Console", "Courier New", monospace;}
    div.b {text-align: center;}   
       
</style>
<body>
<form name="form" method="post" action="Login.php" onsubmit="return validateForm()">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <i class="fa fa-user"></i> <label for="username">Username:</label>
    <input type="text" name="username" id="username">
    <br>
    <br>
    <form name="form" method="post" action="Login.php" onsubmit="return validateForm()">
        <i class="fa fa-lock"></i>  <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        <br>
        <br>
      <input type="submit" value="Login">
    </div>
    <br><br>
    </body>
 
    <?php
    
    
   
    ?>  
    </html>