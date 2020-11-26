<?php include ('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float:right ;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
 body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color:green;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color:blue;
}
* {
  box-sizing: border-box;
}

</style>
</head>
<body>
<div class="topnav" id="my Topnav">
<a href="homepagee.html" >homepage</a>
  <a href="gallery.html">gallery</a>
  <a href="bookiing.php">booking</a>
  <a href="about us.html">about us</a>
   <a href="Adminlogin.php">Admin</a>
  <a href="javascript:void(0);"class ="icon" onClick="myFunction()">
    <i class="fa fa-bars"><i>
  </a>
  </div>
	<title>Administrator registration System</title>
</head>
<body>
<div class="header">
	<h2>  Admin Login</h2>
</div>
<form method="post" action="Adminlogin.php">
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password">
	</div>
	<div class="input-group">
		<input type="submit" id="btn" name="login" value="Login" class="final"/>  
</div>
</form>
</form>
</body>
</html>
                     
