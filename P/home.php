<?php
	ob_start();
	session_start();
	require_once 'dbconnect.php';
	
	// if session is not set this will redirect to login page
	if( !isset($_SESSION['user']) ) {
		header("Location: index.php");
		exit;
	}
	// select loggedin users detail
	$res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
	$userRow=mysql_fetch_array($res);
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - <?php echo $userRow['userEmail']; ?></title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css"  />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="script/style.css">
<link rel="stylesheet" href="style.css" type="text/css" />
<script type="text/javascript" src="script/script.js"></script>

<audio>
  <source src="http://www.myinstants.com/media/sounds/alert-hq.mp3"></source>
</audio>
</head>

<body>

	<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="home.php">Pomodoro Timer</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="profile.php">Profile</a></li>
            <li><a href="todo.php">To-Do List</a></li>
            <li><a href="project.php">Project</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
			  <span class="glyphicon glyphicon-user"></span>&nbsp;Hi' <?php echo $userRow['userEmail']; ?>&nbsp;<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav> 

	<div id="wrapper">

	<div class="container">
    
    	<div class="page-header">
    	<h3>Set Your Activity Time</h3>
    	</div>
        
        <div class="row">
        <div class="col-lg-12">
         <h3>Pomodoro Clock</h3>
    <div class='timers'>
      <div class='break'>
        <p>Break Length</p>
        <div>
          <button class='in' id='minusBreak'>-</button>
          <p class='in' id='break'>5</p>
          <button class='in' id='plusBreak'>+</button>
        </div>
      </div>
      <div class='session'>
        <p>Session Length</p>
        <div>
          <button class='in' id='minusCount'>-</button>
          <p class='in' id='count'> 25 </p>
          <button class='in' id='plusCount'>+</button>
        </div>
      </div>
    </div>
    <div class='clock' id='grad'>
      <p class='title'>Session</p>
      <p class='timer'>25</p>
    </div>
    <p>To start the countdown click the clock!</p>
    <p>Pause and unpause by tapping the clock!</p>
    <p>To reset the clock, choose your new times when the clock is paused and then click the clock!</p>
        </div>
        </div>
    
    </div>
    
    </div>
    
    <script src="assets/jquery-1.11.3-jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    
</body>
</html>
<?php ob_end_flush(); ?>