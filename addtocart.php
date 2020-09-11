<html>

<head>
<link rel="stylesheet" type="text/css" href="over_style.css">
</head>

<body>
<div class="header">
<h1><b><font size="24">WELCOME TO MYNTRA</font></b></h1>
</div><br><br>

</body>
</html>

<?php
session_start();
if(isset($_SESSION["user_name"])){
	//include_once("welcome_cart.html");
	header('location:cart.php');
}
else{
	echo "<h1> LOGIN FIRST </h1>";
	header('location:user_login.html');
}

if(isset($_SESSION["user_name"])){
	echo $_SESSION["user_name"];
	
$Pid=$_SESSION["Pid"];
$_SESSION["prod_name"]=$_SESSION["Pid"];
$Uid=$_SESSION["user_name"];
//$email=$_REQUEST["email"];
$con=mysqli_connect("localhost","root","","shopping_cart");
if(!$con){
	die(mysqli_connect_error($con));
}


 //connect database
$con=mysqli_connect('localhost','root','');// or die(mysqli_error());
mysqli_select_db($con,"shopping_cart"); //or die(mysqli_error()) ; 

$sql = "INSERT INTO cart(Pid,Uid)VALUES ($Pid,'$Uid') ";
if(mysqli_query($con,$sql)){
	echo "Success";
	echo "$Uid";
	header('location:cart.php');
}
else{
	 echo "Failed to select database".mysqli_error($con);
	//
}
}

/*else{
	echo "<h1> LOGIN FIRST </h1>";
	header('location:Login.html');
}
*/

?>