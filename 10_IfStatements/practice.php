<?php

	// Constants
    define('TITLE', 'Arrays');

    // Custom Variables
    $lesson_num = 10;
    $this_year = date('Y');
    $my_name = 'Sunny';

    $a = 20;
    $b = 50;

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>PHP <?php echo TITLE; ?></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial <?php echo $lesson_num; ?>: <small><?php echo TITLE; ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
			    <?php
                    if ($a < $b) {
                        echo 'Yep! $a is certainly less than $b!';
                    };
                ?>
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo $this_year; ?> - <?php echo $my_name; ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
