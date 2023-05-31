<?php

session_start(); 

if(isset($_SESSION['email'])){



?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
<meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <html lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<style>
    * {
  padding: 0;
  margin: 0;
}

body {
  font-size: 17px;
  font-family: Arial, Helvetica, sans-serif;
}

a {
  text-decoration: none;
}

.navbar {
  height: 65px;
  box-shadow: 0 10px 50px hsl(0, 0%, 90%);
}

.container {
  max-width: 98%;
  margin: 0 auto;
}

.logo a {
  width : 200px;
  float: left;
  padding: 20px;;
}

.menu {
  float: right;
}

.menu li {
  list-style: none;
  display: inline-block;
}

.menu li a {
  padding: 20px 30px;
  color:#000;
  float: left;
  transition: color .3s ease-in-out;
}
.lg{
  margin-top : 0px;
  max-width: 200px;
  margin-bottom : 50px;

}
.logout{
  font-size: .8em;
  font-family: 'Oswald', sans-serif;
	position: relative;
  overflow: hidden;
  border-radius:50px;
  
  background: #6362ad;;
  
}

.menu li a:hover {
  color: blue;
  transition: color .5s ease-in-out;
}
</style>
<body>
<nav class="navbar">
  <div class="container">
    <div class="logo">
      <h1><a href="#">E-comm </a></h1>
    </div>
    <ul class="menu">
      <li><a href="../products">Products</a></li>
      <li><a href="../profile">profile</a></li>
      <li><a href="../contactus">Contact Us</a></li>
      <li><a href="../aboutus">about Us</a></li>

      <li ><a href="../logout" class = "logout">Logout</a></li>
    </ul>
  </div>
</nav>
</body>
</html>
<?php
}else{
    echo' <script>alert("You Are Logged!")
location.href = "/college"
</script>';
exit();
}
?>