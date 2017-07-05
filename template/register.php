<?php
	define('TITLE', 'Register');
	include('templates/header.html');

	print '<h2>Registration Form</h2><br><p>Register so that you can take advantage of certain features like this, that, and the other thing.</p>';
	//Check if the form has been submitted:
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		$problem = false; // no problems so far.
		//check for each value
		if (empty($_POST['first_name'])){
			$problem = true;
			print '<p class="text--error">Please enter your first name!</p>';
		}

		if (empty($_POST['last_name'])){
			$problem = true;
			print '<p>You forget to enter your last name!</p>';
		}

		if (empty($_POST['email']) || (substr_count($_POST['email'],'@' != 1 ))) {
			$problem = true;
			print '<p>Please enter your email address!</p>';
		}

		if(empty($_POST['password1'])){
			$problem = true;
			print '<p class="text--error">Please enter a password!</p>';
		}

		if($_POST['password1'] != $_POST['password2']){
			$problem = true;
			print '<p class="text--error">Your password did not match your confirmed password!</p>';
		}

		if(!$problem){
			// print a message:
			print '<p class="text-success">You are now registered!<br>Okay, you are not really registered but...</p>';
			// Send the email:
			$body = "Thank you,{$_POST['first_name']},for registering with the J.D.Salinger fan club!.";
			mail($_POST['email'], 'Registration Confirmation', $body,'From: admin@example.com');
			// Clear the posted values:
			$_POST = [];
		} else{
			// Forgot a field
			print '<p class="text--error"> Please try again!</p>';
		}
	}
?>

<form action="register.php" method="post" class="form-horizontal">
	<div class="form-group">
		<p>
			<label for="first_name" class="col-sm-2 control-label">First Name:</label>
			<div class="col-sm-10">
				<input type="text" name="first_name" size="20" value="
				<?php if(isset($_POST['first_name']))
					{ print htmlspecialchars($_POST['first_name']); } ?>">
			</div>
		</p>
	</div>
	<div class="form-group">
		<p>
			<label for="last_name" class="col-sm-2 control-label">Last Name:</label>
			<div class="col-sm-10">
				<input type="text" name="last_name" size="20" value="
					<?php if(isset($_POST['last_name']))
						{ print htmlspecialchars($_POST['last_name']); }
					?>">
			</div>
		</p>
	</div>
	<div class="form-group">
		<p>
			<label for="email" class="col-sm-2 control-label">Email</label>
			<div class="col-sm-10"> 
				<input type="email" name="email" size="20" value="
					<?php if(isset($_POST['email']))
						{ print htmlspecialchars($_POST['email']); }
					?>">
			</div>
		</p>
	</div>
	<div class="form-group">

		<p>
			<label for="password1" class="col-sm-2 control-label">Password</label>
			<div class="col-sm-10">
				<input type="password" name="password1"  value="
					<?php if(isset($_POST['password1']))
						{ print htmlspecialchars($_POST['password1']); }
					?>">
			</div>
		</p>
	</div>

	<div class="form-group">
		<p>
			<label for="password2" class="col-sm-2 control-label">Confirm Password:</label>
			<div class="col-sm-10">
				<input type="password" name="password2"   value="
					<?php if(isset($_POST['password2']))
						{ print htmlspecialchars($_POST['password2']); }
					?>">
			</div>
		</p>
	</div>

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-primary">Register!</button>
		</div>	
	</div>

</form>
<?php 
include('templates/footer.html');
?>