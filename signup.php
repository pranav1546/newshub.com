<?php
session_start();

include("db.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
  $Name = $_POST['Name'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  if(!empty($password) && !empty($username) && !empty($Name))
  {
      
        $query = "insert into form (Name,username,password) values ('$Name','$username','$password')";

        mysqli_query($con, $query);

        echo "<script type='text/javascript'>alert('Successfully Signup')</script>";
  }
   else
  {
      echo "<script type='text/javascript'>alert('please inter some valid infarmation')</script>";
  } 
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login-style.css">
</head>
<body>
    <form class="signupform" method="POST">
        <div class="logo">
          <div id="loginnewshub"><div id="loginnes">News</div>
          <div id="HUB">HUB</div></div>
          
        <span id="login">Signup</span>
      </div>
      <div class="field1">
        <label>Name</label>
        <input type="text" name="Name" autocomplete="off">
      </div>
      <div class="field1">
        <label>create Username</label>
        <input type="text" name="username" autocomplete="off">
      </div>
      <div class="field1">
        <label>create Password</label>
        <input type="password" name="password">
      </div>
     
     
      <a href="login.html"><input type="submit" name="create Profil" ></a>
      
    </form>
    </body>
   
</body>
</html>