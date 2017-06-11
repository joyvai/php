<!DOCTYPE html>
<html>
<head>
	<title>Product Cost Calculator</title>
	<style type="text/css">
		.number {font-weight: bold;}
	</style>
</head>
<body>
<?php
	//get the values from the $_POST array:
	$price = $_POST['price'];
	$quantity = $_POST['quantity'];
	$discount = $_POST['discount'];
	$tax = $_POST['tax'];
	$shipping = $_POST['shipping'];
	$payments = $_POST['payments'];

	// Calculate the total:
	$total = $price * $quantity;
	$total = $total + $shipping;
	$total = $total - $discount;

	// Determine the tax rate
	$taxrate = $tax / 100;
	$taxrate = $taxrate + 1;

	// Factor in the tax rate:
	$total = $total * $taxrate;
	// Calculate the monthly payments:
	$monthly = $total / $payments;

	print "<p>You have selected to purchase:<br><span class=\"number\">$quantity</span>
	widget(s) at <br>$<span class=\"number\">$price</span>price each plus a <br>
	$<span class=\"number\">$shipping</span>shipping cost and a <br>
	<span class=\"number\">$tax</span>percent tax rate. </p>"
?>
</body>
</html>