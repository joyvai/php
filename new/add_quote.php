<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Add a Quotation</title>
</head>
<body>
<?php

$file = 'quotes.txt';

// Check for a form submission:
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	if (!empty($_POST['quote']) && ($_POST['quote'] !='Enter your quotation here.'))
		{
			if (is_writable($file))
			{
				file_put_contents($file, $_POST['quote'].PHP_EOL,FILE_APPEND | LOCK_EX);
				// print a message 
				print '<p>Your quotation has been stored.</p>';
			}
			else
			{
				print '<p style="color: red;">Your quotation could not be stored due to a system error.</p>';
			}
		}
	else
		{
			print '<p style="color:red;">Please enter a quotation!</p>';

		}
}
?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
	<textarea name="quote" rows="5" cols="30">Enter your quotation here.</textarea><br>
	<input type="submit" name="submit" value="Add this Quote!">	
</form>

</body>
</html>