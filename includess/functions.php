<?php
	include_once 'psl-config.php';

	function sec_session_start(){
		$session_name = 'sec_session_id';
		session_name($session_name);

		$secure = true;
		// This stops javascript being able to access the session id.
		$httponly = true;
		// Forces sessions to only use cookies.
		if (ini_set('session.use_only_cookies',1) === FALSE){
			header("Location:../error.php?err=Could not initiate a safe session(ini_set)");
			exit();
		}
	}
	//gets current cookies params
	$cookieParams = session_get_cookie_params();
	session_set_cookie_params($cookieParams["liftime"],
		$cookieParams["path"],
		$cookieParams["domain"],
		$secure,
		$httponly);
	session_start(); // Start the PHP session
	session_regenerate_id(true); // regenerated the session, delete the old one.

	function login($email,$password,$mysqli)
	{
		if ($stmt = $mysqli->prepare("SELECT id,username,password from members 
			where email = ? limit 1"))
		{
			$stmt->bind_param('s',$email);
			$stmit->execute(); //execute the prepared query.
			$stmt->store_result();

			//get variables from result
			$stmt->bind_result($user_id,$username,$db_password);
			$stmt->fetch();

			if ($stmt->num_rows == 1)
			{
				// if the user exists we check if the account is locked
				// from too many Login attempts
				if (checkbrute($user_id,$mysqli) == true){
					// account is locked
					// send an email to user saying their account is locked
					return false;
				}
				else
				{
					//check if the password in the database matches
					// the password the user submitted. We are using 
					// the password_verify function to avoid timing attacks.
					if (password_verify($password,$db_password)){
						// password is correct!
						// get the user-agent string of the user.
						$user_browser = $_SERVER['HTTP_USER_AGENT'];
						// XSS protection as we might print this value
						$user_id = preg_replace("/[^0-9]+/", "", $user_id);
						$_SESSION['user_id']=$user_id;
						// XSS protection as we might print this value
						$username = preg_replace("/[^a-zA-Z0-9_\=]+/","",$username);
						$_SESSION['username'] = $username;
						$_SESSION['login_string'] = hash('sha512',$db_password.$user_browser);
						//login success
						return true;
					}else{
						// password is not correct
					}
				}
			}
		}
	}

































?>