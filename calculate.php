<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Product shipping calculator</title>
	<!-- CSS -->
<link href="calculate.css" rel="stylesheet" type="text/css" />
	<style type="text/css">
		.number {
			font-weight: bold;
			color: red;
		}
		</style>
  </head>
  
  <body>
  <?php
/* This script takes values from calculator.html and calculates the total cost and monthly payments */
// Get the values from the $_POST array
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$discount = $_POST['discount'];
$tax = $_POST['tax'];
$shipping = $_POST['shipping'];
$payments = $_POST['payments'];

//Calculate the total
$total = (($price * $quantity) + $shipping) - $discount;

//Determine the tax rate
$taxrate = $tax / 100;
$taxrate++;

//Factor in the tax rate
$total = $total * $taxrate;

//Calculate the monthly payments
$monthly = $total / $payments;

//Calculate the bi-weekly payments
$biweekly = $total / 2;

//Apply formatting to the monthly payment
$total = number_format($total, 2);
$monthly = number_format($monthly, 2);
$biweekly = number_format($biweekly, 2);

//Print out the results
echo "<div class='results'>";

printf ("<p><b>You have selected to purchase:</b></p>");
printf ("<p><span class='number' style=\"color:red\">$quantity </span> widget(s) at $<span class='number' style=\"color:red\">$price </span> each. The shipping cost is $<span class='number' style=\"color:red\">$shipping</span>.</p>");
printf ("<p>You have selected a <span class='number' style=\"color:red\">$tax%%</span> tax rate.</p>");
printf ("<p>After your $<span class='number' style=\"color:red\">$discount </span> discount, the total cost is $<span class='number' style=\"color:red\">$total</span>.</p>");
if ($payments == 1)
{
    printf ("<p> Divided over <span class='number' style='color:red'>monthly</span>  payments, it comes to <span class='number' style='color:red'>%s</span> each month.</p>", $monthly);
}
else 
{
    printf ("<p> Divided over <span class='number' style='color:red'>biweekly</span>  payments, it comes to <span class='number' style='color:red'>%s</span> biweekly.</p>", $biweekly);
}


/*print "<b>You have selected to purchase:</b><br /><br />
<span class=\"number\">$quantity</span> widget(s) at $<span class=\"number\">$price</span> each.
The shipping cost is $<span class=\"number\">$shipping</span>.<br />
You have selected a <span class=\"number\">$tax%</span> tax rate.<br />

After your $<span class=\"number\">$discount</span> discount, the total cost is $<span class=\"number\">$total</span>.<br />

Divided over <span class=\"number\">$payments</span> monthly payments, it comes to $<span class=\"number\">$monthly</span> each month.</p>";
*/
echo "</div>";
echo "<h2 class='headings'>Thank you for shopping with d_vu!</h2>";

?>
<p>Click <a href="calculator_new.php">here</a> to return to the main order page</p>
</body>
</html>