<?php

$Pid=$_REQUEST['Pid'];
$Pname=$_REQUEST['Pname'];
$Ptype = $_REQUEST['Ptype'];
$Pbrand = $_REQUEST['Pbrand'];
$Pimage = $_FILES['Pimage']["name"];
$Pcost = $_REQUEST['Pcost'];
$Pdesc = $_REQUEST['Pdesc'];


//connect database
$con=mysqli_connect('localhost','root','');// or die(mysqli_error());
mysqli_select_db($con,"shopping_cart"); //or die(mysqli_error()) ;  
//Note : we have allready created database called product

session_start();

move_uploaded_file($_FILES["Pimage"]["tmp_name"], "uploads/" .$_FILES["Pimage"]["name"]);

	$sql="INSERT INTO product(Pid ,Pname,Pbrand, Ptype,Pcost, Pdesc,Pimage) VALUES($Pid,'$Pname','$Pbrand','$Ptype',$Pcost,'$Pdesc','$Pimage')";
	
	if(mysqli_query($con,$sql))
	{
		//echo "Record saved in Database , Please check";
		header('location:add_product.html');
	}
	else{
		echo "eroor".mysqli_error($con);
		}
	mysqli_close($con);
		
?>