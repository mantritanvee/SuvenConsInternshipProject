<?php
//session_start();
$con=mysqli_connect("localhost","root","","shopping_cart");

$Cid=$_GET['Cid'];
$sql="delete from cart where Cid='$Cid'";
$result=mysqli_query($con,$sql);
include_once("cart.php");
//header("location:addtocart.php");
?>