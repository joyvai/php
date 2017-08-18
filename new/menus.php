<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Date Menus</title>
</head>
<body>
	<?php
		function make_date_menus()
		{
			// Array to store the month
			$months=[1 => 'January','February','March','April','May','June','July','August','September','October','November','December'];
			// Make the month pull-down menu:
			print '<select name="month">';
			foreach($months as $key => $value)
			{
				print "\n<option value=\"$key\">$value</option>";
			}

			print '</select>';

		// Make the year pull-down menu:
			print '<select name="year">';
			$start_year = date('Y');
			for ($y = $start_year;$y <= ($start_year + 10); $y++){
				print "\n<option value=\"$y\">$y</option>";
			}
			print '</select>';
 		} // End of make_date_menus() function.

 		// Make the form:
 		print '<form action="" method="post">';
 		make_date_menus();
 		print '</form>';
	?>
</body>
</html>