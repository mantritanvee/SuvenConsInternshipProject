<?php
$Aname = $_POST['a_name'];
$Apwd = $_POST['a_pwd'];

//connect database
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,"shopping_cart");//die(mysqli_error()) ;  
//Note : we have allready created database called user

$aid=rand(1,100);
session_start();

	$sql="INSERT INTO admin(Aname,Apwd) VALUES('$Aname','$Apwd')";
	if(mysqli_query($con,$sql))
	{
		echo "Record saved in Database , Please check";
		header('location:add_product.html');
	}
	else{
		echo "eroor".mysqli_error($con);
		}

?>