<?php
	
	// Constants
	define('TITLE', 'Multi-Dimensional Arrays');
	
	// Custom Variables
    $lesson_num = 8;
    $this_year = date('Y');
    $my_name = 'Sunny';
	
	// Moustache Multi-Dimensional Array
    $moustache = array(
        array(
            'name' => 'Handlebar',
            'creep_factor' => 'High',
            'avg_growth_days' => 14
        ),
        array(
            'name' => 'Salvador Dali',
            'creep_factor' => 'Extreme',
            'avg_growth_days' => 62
        ),
        array(
            'name' => 'Fu Manchu',
            'creep_factor' => 'Very High',
            'avg_growth_days' => 58
        )
    );

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
				<h2>The <?php echo $moustache[0]['name']; ?> Moustache!</h2>
				<p>This moustache is quite the dirt squirrel! It boasts a creep factor of
                    <strong><?php echo $moustache[0]['creep_factor']; ?></strong> and takes
                    <strong><?php echo $moustache[0]['avg_growth_days']; ?> days</strong> to grow on average.
                </p>

                <h2>The <?php echo $moustache[1]['name']; ?> Moustache!</h2>
                <p>This moustache is quite the dirt squirrel! It boasts a creep factor of
                    <strong><?php echo $moustache[1]['creep_factor']; ?></strong> and takes
                    <strong><?php echo $moustache[1]['avg_growth_days']; ?> days</strong> to grow on average.
                </p>

                <h2>The <?php echo $moustache[2]['name']; ?> Moustache!</h2>
                <p>This moustache is quite the dirt squirrel! It boasts a creep factor of
                    <strong><?php echo $moustache[2]['creep_factor']; ?></strong> and takes
                    <strong><?php echo $moustache[2]['avg_growth_days']; ?> days</strong> to grow on average.
                </p>

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
