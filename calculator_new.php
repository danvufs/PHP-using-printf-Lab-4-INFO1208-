<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Product Cost Calculator</title>
	<!-- CSS -->
	<link href="calculate.css" rel="stylesheet" type="text/css" />
  </head>
  
  <body>
<h2 class="headings">Welcome to d_vu's Orders</h2>
<?php
echo "You are currently connecting from <b>" . $_SERVER['REMOTE_ADDR'] . "</b>";
?>
<p>
Please fill out this form in order to calculate the total cost:
</p>
<form action="calculate.php" method="post">
<table bgcolor='#E8E8E8' width='400px' border='0'>
<tr><td>
<b>Price: </b>
</td><td>
<input type="text" class="formsmall" name="price" size="10">
</td></tr><tr><td>
<b>Quantity: </b>
</td><td>
<input type="number" class="formsmall" name="quantity" size="10" min="1" value="1">
</td></tr><tr><td>
<b>Discount: </b>
</td><td>
<input type="text" class="formsmall" name="discount" size="10">
</td></tr><tr><td>
<b>Tax: </b>
</td><td>
<input type="text" class="formsmall"name="tax" size="10">(%)
</td></tr>
</table>
<table bgcolor='#E8E8E8' width='400px' border='0'>
<tr><td>
<b>Shipping method: </b>
</td><td>
<select name="shipping" class="formsmall">
<option value="5.00">Take it easy</option>
<option value="8.95">Step on it</option>
<option value="19.36">I need it yesterday!</option>
</select>
</td></tr><tr><td>
<b>Number of payments: </b>
</td><td>
<input type="number" class="formsmall" name="payments" size="10" min="1" value="1">
</td></tr>
</table>
<br />
<input type="image" src="/d_vu/w04/calc_button.png" id="calc_button" alt="" />
</form>
  </body>
</html>