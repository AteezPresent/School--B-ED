<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<?php
$link=mysqli_connect ("localhost", "root", "", "alphonsus");
if ($link=== false) {
 
     die ("connection failed: ");
}
?>
 
<?php
if(isset($_POST['submit'])) {
    $username= $_POST['username'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $cdt= date("Y-m-d H:i:s");
 
    $query= "INSERT into users (username,email,PASSWORD,cdt)
    VALUES('$username', '$email','" . md5($password) ."', '$cdt')" ;
    $result = mysqli_query($link,$query);
    if ($result){
        echo "<div class='form'>
                <h3>You are registered successfully.</h3><br/>
                <p class='link'>Click here to <a href='Login.php'>Login</a></p>
                </div>";
            }else{
                echo "<div class='form'>
                <h3>Required feilds are missing.</h3><br/>
                <p class='link'>Click here to <a href='Registration.php'>Registration</a></p>
                </div>";
            }
        } else {
        
?>
 
 
 
 
    <title>REGISTRATION FORM</title>
</head>
<div class="b">
<img src="Images/St Alphonsus -logo 1.jpeg" alt="Logo" class="img-rounded" width="200" height="200" class="Logo">
  </div>
  <div class="c">
<p><h1><b>REGISTRATION FORM</b></h1></p>
</div>

 
<style>
   body {background-image: url(images/back.jpg);}
   div.c {background-color: rgb(62, 62, 201);
              text-align: center;
              font-family: "Lucida Console", "Courier New", monospace;}
    div.b {text-align: center;}   
       
</style>
 
<BODY>
<b>
<form class="form" method="post" action="Registration.php" onsubmit="return validateForm()">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <i class="fa fa-user"></i> <label for="username" placeholder="username">Username :</label>
    <input type="text" name="username" id="username">
    <br>
    <br>
    <i class="fa fa-envelope"></i> <label for="email" palceholder = "email">Email :</label>
    <input type="text" name="email" id="email">
    <br>
    <br>
    <i class="fa fa-lock"></i> <label for="password">Password:</label>
    <input type="password" name="password" id="password" palceholder = "password">
    <br>
        <br>
    
        
    <input id="submit" type="submit" value="submit" name="submit">
    </form>
 
    <?php
}
?>
 
</b>
</BODY>
</html>