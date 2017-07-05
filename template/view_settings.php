<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>View Your Settings.</title>
	<style type="text/css">
		body{
			<?php 
			// Check for a font size value:
			if (isset($_COOKIE['font_size']))
			{
				print "\t\tfont-size: ".htmlentities($_COOKIE['font-size']) . ";\n";
			}
			else
			{
				print "\t\tfont-size: medium;";
			}
			// Check for a font_color value:
			if(isset($_COOKIE['font_color']))
			{
				print "\t\tcolor: #" . htmlentites($_COOKIE['font_color']) .";\n";
			}
			else
			{
				print "\t\tcolor: #000;";
			}
			?>
		}

	</style>

</head>
<body>
	<p><a href="customize.php">Customize Your  Settings.</a></p>
	<p><a href="reset.php">Reset Your Settings</a></p>
	<p>Yadda Yadda Yadda Yadda Yadda Yadda Yadda Yadda Yadda Yadda Yadda Yadda Yadda Yadda Yadda</p>
</body>
</html>