<?php

$Aname = $_REQUEST['a_name'];
$Apwd = $_REQUEST['a_pwd'];

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'shopping_cart');
 
 
 $sql="SELECT * FROM admin where Aname='$Aname' && Apwd='$Apwd'";
 $result=mysqli_query($con,$sql); //or die(mysqli_error());
 
 if(mysqli_num_rows($result)>0)
 {
	 $row = mysqli_fetch_array($result);
	 session_start();
	 
	 $_SESSION['admin_status']='logged_in';
	 $_SESSION['admin_name']=$row['Aname'];
	 
	 echo $_SESSION['admin_name'];
	echo "Welcome";
	header('location:index.php');
	
	 
	 //echo "<h4>Session variables have been set</h4>";
	 echo "Welcome".$_SESSION['admin_name']."<br/>";
	 //echo "<a href='logout.php'>Logout</a>";
	 mysqli_close($con);
 }
 else
 {
	 echo "<h2>Admin not found</h2>You might have entered invalid information";
	 
 }
?>