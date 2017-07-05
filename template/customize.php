<?php
	//Handle the form if has been submitted
	if (isset($_POST['font_size'],$_POST['font_color'])){
		//send the cookies:
		setcookie('font_size',$_POST['font_size']);
		setcookie('font_color',$_POST['font_color']);

		// Message to be printed later:
		$msg = '<p>Your settings have been entered! Now see them <a href="view_settings.php">in action.</a></p>';
		
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Customize Your Settings</title>
</head>
<body>
<?php
	if (isset($msg))
	{
		print $msg;
	}
?>
<p>Use this form to set your preferences:</p>
<form action="customize.php" method="post">
	<select name="font_size">
		<option value="">Font Size</option>
		<option value="xx-small">xx-small</option>
		<option value="x-small">x-small</option>
		<option value="small">small</option>
		<option value="medium">medium</option>
		<option value="large">large</option>
	</select>
	<select name="font_color">
		<option value="">Font color</option>
		<option value="999">Gray</option>
		<option value="0c0">Green</option>
		<option value="00f">Blue</option>
		<option value="c00">Red</option>
		<option value="000">Black</option>
	</select>
	<input type="submit" name="submit" value="Set My preferences">
</form>


</body>
</html>