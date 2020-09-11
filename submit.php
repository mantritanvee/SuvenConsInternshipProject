
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
<?php
 session_start();
 $code=$_REQUEST['code'];
 if($_SESSION['vercode']==$code)
 {
	 if(isset($_REQUEST['card_num']))
	 { if(isset($_REQUEST['cvv']))
		{
			if(isset($_REQUEST['exp_date']))
			{
				if(isset($_REQUEST['card_hold_name']))
				{
	 ?>

     <div class="main">
      <h2> Your Payment has been done successfully</h2>
      <ul>
      <li> <a href="logout.php" target="blank"> LOGOUT </a> </li><br>
      </ul>
     </div>

<?php
	 }
			}
		}
	 }
 }
 else
 {
?>
<h2> Your Payment has been denied.</h2>
<ul>
  <li> <a href="logout.php" target="blank"> LOGOUT </a> </li><br>
  
  </ul>
</div>
<?php
 }
 ?>

</div>
</body>
</html>
