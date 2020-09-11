

<html>

<head>
<link rel="stylesheet" type="text/css" href="over_style.css">
</head>

<body>
<div class="header">
<h1><b><font size="24">WELCOME TO MYNTRA</font></b></h1>
</div>

<div id="nav">
<br><br>


<div class="main">
<ul>
  <li> <a href="user_reg.html" target="blank"> REGISTER AS A USER</a> </li><br>
  <li> <a href="user_login.html" target="blank"> LOGIN AS A USER</a> </li><br>
  <li> <a href="admin_reg.html" target="blank"> REGISTER AS AN ADMIN</a> </li><br>
  <li> <a href="admin_login.html" target="blank">LOGIN AS AN ADMIN</a></li><br>
  </ul>
</div>

</div>
</body>
</html>

<?php
session_start();
unset($_SESSION['email']);
unset($_SESSION['pwd']);

session_destroy();
?>