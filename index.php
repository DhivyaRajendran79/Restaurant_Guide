<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<title>Home</title>
<style>
body {
  
background-color:black;

}
h1 {
  text-shadow: 3px 2px blue;
}
</style>
</head>
<body background="food.jpg">
<center>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home1.html">About</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="location.html">Location</a></li>
    </ul>
     <ul class="nav navbar-nav navbar-right">
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> LogOut</a></li>
     
    </ul>
  </div>
</nav>
<h1 style="font-size:60px;color:white;font-family:script;font-type:italic">Welcome to fudstaa!</h1>
</center>
<img src="C:\Users\Ghajaanan\Desktop\food.jpg">
</body>
</html>c