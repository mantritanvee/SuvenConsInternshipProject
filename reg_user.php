<?php
$Uname = $_POST['u_name'];
$Uemail = $_POST['u_eml'];
$UPassword = $_POST['u_pwd'];

//connect database
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,"shopping_cart");//die(mysqli_error()) ;  
//Note : we have allready created database called user

$uid=rand(1,100);

session_start();

	$sql="INSERT INTO user(Uname,Uemail,UPassword) VALUES('$Uname','$Uemail','$UPassword')";
	if(mysqli_query($con,$sql))
	{
		echo "Record saved in Database , Please check";
		header('location:user_login.html');
	}
	else{
		echo "eroor".mysqli_error($con);
		}

?>