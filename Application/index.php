<?php
	include_once 'header.php';
?>

<section class="main-container">
	<div class="main-wrapper">
		<h2>PRODUCTIVITY TIMER</h2>
	</div>
	<?php
		if (isset($_SESSION['u_id'])) {
			echo "You are logged in!";
		}
	?>
	
</section>

<?php
	include_once 'footer.php';
?>
