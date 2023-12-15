<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php
$link=mysqli_connect ("localhost", "root", "", "alphonsus");
if ($link=== false) {
 
     die ("connection failed: ");
}
?>
 
<?php
if(isset($_POST['submit'])) {
    $fname= $_POST['fname'];
    $lname= $_POST['lname'];
    $email= $_POST['email'];
    $mobile= $_POST['mobile'];
    $cdt= date("Y-m-d H:i:s");
 
    $query= "INSERT into contact (fname,lname,email,mobile,cdt)
    VALUES('$fname', '$lname','$email','$mobile' '$cdt')" ;
    $result = mysqli_query($link,$query);
    if ($rows==1) {
        echo "Your information has been recived, we will be in contact soon; Click to see the <a href='school.html.html'>Home</a> Page";
        
     }else{
      echo "<div class='form>
      <h3>Your information has been recived, we will  be in contact soon.</h3><br/>
      <p class='link'>Click here to <a href='school.html.html'</a> Home.</p>
      </div>";
     }
       
 
     
   
   
     }
?>

    <title>Contact Form</title>
</head>
<div class="b">
<img src="Images/St Alphonsus -logo 1.jpeg" alt="Logo" class="img-rounded" width="200" height="200" class="Logo">
  </div>
  <div class="c">
<p><h1><b>Contact Form</b></h1></p>
</div>

 
<style>
   body {background-image: url(images/back.jpg);}
   div.c {background-color: rgb(62, 62, 201);
              text-align: center;
              font-family: "Lucida Console", "Courier New", monospace;}
    div.b {text-align: center;}   
       
</style>
</body>
<BODY>
<b>
<form class="form" method="post" action="Contact.php" onsubmit="return validateForm()">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <i class="fa fa-user"></i> <label for="fname" placeholder="fname">First Name :</label>
    <input type="text" name="fname" id="fname">
    <br>
    <br>
    <i class="fa fa-user"></i> <label for="lname" palceholder = "lname">Last Name :</label>
    <input type="text" name="lname" id="lname">
    <br>
    <br>
    <i class="fa fa-envelope"></i> <label for="email">Email:</label>
    <input type="text" name="email" id="email" palceholder = "email">
    <br>
    <br>
    <i class="fa fa-phone"></i> <label for="mobile">Phone Number:</label>
    <input type="text" name="mobile" id="mobile" palceholder = "mobile">
    <br>
    <br>
        
    <input id="submit" type="submit" value="submit" name="submit">
    </form>
 
    <?php

?>
 
</b>
</BODY>
</html>