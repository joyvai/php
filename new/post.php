<!DOCTYPE html>
<html>
<head>
	<title>Post</title>
</head>
<body>
<form method="POST" action="response.php">
	<div>
		<label>Name</label>
		<input type="text" name="name">
	</div>
	<div>
		<label>Email</label>
		<input type="email" name="email">
	</div>
	<div>
		<label>Website</label>
		<input type="text" name="website">
	</div>
	Comment: <textarea name="comment" rows="5" cols="40"></textarea><br>
	<label>Gender</label>
	<input type="radio" name="gender" value="male">male
	<input type="radio" name="gender" value="female">female
	<div>
		<label>Password</label>
		<input type="password" name="password">
	</div>
	<input type="submit" name="submit">
</form>
</body>
</html>