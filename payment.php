<?php
session_start();
if(isset($_SESSION["user_name"]));
{
	//include_once("index.php");
}
?>
<html>

<head>
<link rel="stylesheet" type="text/css" href="over_style.css">
</head>

<body body class=back_img>
<div class="header">
<h1><b><font size="24">WELCOME TO MYNTRA</font></b></h1>
</div>

<!--<div class="coll">

</div>
-->
<div id="nav">
<br><br>


<div class="main">
<form action="submit.php" name="pay_form" method="get" onsubmit="validator()">
      <table cellspacing="2" cellpadding="2" border="0">
        
		<tr>
          <td align="right">
            Card Type 
          </td>
          <td>
            <select name="card_type">
            <option value="008">AXIS</option>
            <option value="012">Master Card</option>
            <option value="016">Visa</option>
            <option value="020">Paypal</option>
  
			</select>
          </td>
        </tr>
		
		
		<tr>
          <td align="right">
            Card Number
          </td>
          <td>
            <input type="text" name="card_num" />
          </td>
        </tr>
        <tr>
          <td align="right">
             CVV
          </td>
          <td>
            <input type="text" name="cvv" />
          </td>
        </tr>
		
		<tr>
          <td align="right">
            Expiry Date
          </td>
          <td>
            <input type="date" name="exp_date" />
          </td>
        </tr>
		
		<tr>
          <td align="right">
            Cardholder Name
          </td>
          <td>
            <input type="text" name="card_hol_name" />
          </td>
        </tr>
		
		<tr>
          <td align="right">
            Enter Code
          </td>
          <td>
            <input type="text" name="code" />
          </td>
        </tr>
		
		<tr>
          <td align="right">
            Captcha:
          </td>
          
			<td >
			<img src="captcha.php" ></td>
		</tr>
			
		<tr>
			<td> </td>
			<td><input type="submit" name="pay_now" id="pay_now" value="Pay Now"  />
			</td>
		</tr>
			
        <!--<tr>
          <td align="right"></td>
          <td>
            <input type="submit" value="Pay Now" />
          </td>
        </tr>-->
      </table>
    </form>
	
	<script >


function validator()
{
var y=document.forms["pay_form"]["cvv"].value;
var x=document.forms["pay_form"]["card_num"].value;
//alert(x);
//alert(y);
if (y.length!=3)
{
  alert("Maximum length of the cvv is 3");
  
}  
else{
alert("length is 3");
}


	if (x.length!=16)
	{
		alert("length of Card Number should be 16");
		
	} 
	else{
	alert("Perfect 16");
	}

}	
</script>

</body>
</html>


