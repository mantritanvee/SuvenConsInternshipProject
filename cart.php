
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
echo $_SESSION['prod_name'];
echo $_SESSION['user_name'];
if(isset($_SESSION["user_name"])){
	//include_once("index.php");
}
$Uid=$_SESSION['user_name'];
$Pid=$_SESSION['prod_name'];

 //connect database
$conn=mysqli_connect('localhost','root','',"shopping_cart");

$sql="select * from product p,cart c where c.Pid=p.Pid AND c.Uid='$Uid'";
$result=mysqli_query($conn,$sql);
$cost=0; 

while($row=mysqli_fetch_assoc($result))
{ 
  $cost=$cost+($row['Pcost']);
  echo '<form action="remove_cart.php" method="get">';
  echo '<div style="margin-left:30px">';
  echo '<img style="margin-top:10px;float:left" width=200 height=150 src="image/'.$row['Pimage'].'"></div>';
  echo '<div style="margin-left:40px">';
  echo 'Model:'.$row['Pname'].'<br><br>';
  echo 'Description:'.$row['Pdesc'].'<br><br>';
  echo 'Product Type:'.$row['Ptype'].'<br><br>';
  echo 'Product Brand:'.$row['Pbrand'].'<br><br>';
  echo 'Cost: Rs.'.$row['Pcost'].'<br><br>';
  echo "<input type='hidden' value='".$row['Cid']."' name='Cid'>";
  echo '<input type="submit" value="Remove from Cart" style="margin-left:15em">';
  echo '</div></form><br><br>';
}
if($cost>0)
{
echo '<h4 style="text-align:center">Total Bill:Rs'.$cost.'</h4>';
echo '<a href="payment.php"><input type="button" value="Make Payment" style="margin-left:46em";margin-bottom:"40px"></a>';
}

else
{
echo "You have Nothing In Cart";
}
?>