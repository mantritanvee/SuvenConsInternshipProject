<?php
$Uemail = $_REQUEST['u_eml'];
$UPassword = $_REQUEST['u_pwd'];

$con=mysqli_connect('localhost','root','');
 mysqli_select_db($con,'shopping_cart');

 $sql="SELECT*FROM user where Uemail='$Uemail' and UPassword='$UPassword'";
 $result=mysqli_query($con,$sql) or die(mysqli_error($con));
 
 if(mysqli_num_rows($result)>0)
 {
	 $row = mysqli_fetch_array($result);
	 session_start();
	$_SESSION['user_status']='logged_in';
	 $_SESSION['user_name']=$row['Uid'];
	 echo $_SESSION['user_name'];
	echo "Welcome";
	header('location:index.php');
	 
	 
	 
	 //echo "<h4>Session variables have been set</h4>";
	 echo "Welcome".$_SESSION['user_name']."<br/>";
	 //echo "<a href='logout.php'>Logout</a>";
	 mysqli_close($con);
 }
 else
 {
	 echo "<h2>User not found</h2>You might have entered invalid information";
	 
 }
?>