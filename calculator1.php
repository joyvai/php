<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Cost Calculator</title>
</head>
<body>
	<?php // calculator1.php script
	// global var
		$tax = 8.75;

		
		function calculate_total($quantity,$price)
		{
			global $tax;
			$total = $quantity * $price; // calculation
			$taxrate = ($tax / 100) + 1;
			$total = $total * $taxrate;
			$total = number_format($total, 2);// formating

			return $total; // Return the value

		} //End of function
		// Check for a form submission
		// $_SERVER['REQUEST_METHOD'] =>	
		// Returns the request method used to access the page (such as POST)
		// if the server request method is post then it gives you the access to 
		// use this page. 
		if ($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			// check for values
			if(is_numeric($_POST['quantity']) AND is_numeric($_POST['price']))
			{
				// call the function and print the results:
				$total = calculate_total($_POST['quantity'],$_POST['price']);
				print "<p>Your total comes to $<span style=\"font-weight: bold;\">$total</span>,including the $tax percent tax rate.</p>";
			}
			else
			{
				// inappropriate values entered 
				print '<p style="color: red;">Please enter a valid quantity and price!</p>';
			}
		}
	?> 
	<!-- end php -->
	<!-- start form -->
	<form action="" method="post">
		<p>Quantity:<input type="text" name="quantity" size="3"></p>
		<p>Price: <input type="text" name="price" size="5"></p>
		<input type="submit" name="submit" value="Calculate!">
	</form>
</body>
</html>