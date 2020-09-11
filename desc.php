<!DOCTYPE html>
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
$Pid=$_REQUEST['Pid'];
$_SESSION['Pid']=$_REQUEST['Pid'];

 //connect database
$con=mysqli_connect('localhost','root','');// or die(mysqli_error());
mysqli_select_db($con,"shopping_cart"); //or die(mysqli_error()) ;  

if(!$con)
{
 die("Connection failed".mysqli_connect_error());
}

$sql = "select * from product where Pid=$Pid";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

echo '<form action="addtocart.php" method="post">';
echo '<img src="img/'.$row['Pimage'].'">';
echo '<br>';

echo $row['Pname'];
echo '<br>';
echo $row['Pbrand'];
echo '<br>';
echo $row['Ptype'];
echo '<br>';
echo $row['Pcost'];
echo '<br>';
echo $row['Pdesc'];

echo '<input type="hidden" value='.$row['Pid'].' >';
//echo '<a href="addtocart.php?Pid="'.$row['Pid'].'">';
echo '<input type="submit" Value="Add to Cart" />';
echo '</form>';

?>