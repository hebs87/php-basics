<?php

	// Constants
    define('TITLE', 'Arrays');

	// Variables
    $this_year = date('Y');
	$my_name = 'Sunny';

	// Arrays
    $age_group = array('adult', 'teenager', 'child');
    $moustache = array(
        array(
            'name' => 'Handlebar',
            'colour' => 'black',
        ),
        array(
            'name' => 'Fu Manchu',
            'colour' => 'brown',
        ),
        array(
            'name' => 'Salvador Dali',
            'colour' => 'blonde',
        ),
    );
	$person = array(
	    array(
	        'name' => 'Carter',
            'country' => 'Canada',
            'moustache_name' => $moustache[0]['name'],
            'moustache_colour' => $moustache[0]['colour'],
            'age_group' => $age_group[0],
        ),
	    array(
	        'name' => 'Rodrigo',
            'country' => 'Uruguay',
            'moustache_name' => $moustache[0]['name'],
            'moustache_colour' => $moustache[0]['colour'],
            'age_group' => $age_group[0],
        ),
	    array(
	        'name' => 'Giovanni',
            'country' => 'Italy',
            'moustache_name' => $moustache[0]['name'],
            'moustache_colour' => $moustache[0]['colour'],
            'age_group' => $age_group[0],
        ),
    );

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Get Your Hands Dirty: <?php echo TITLE; ?></title>
		<link href="../assets/styles.css" rel="stylesheet">
		<script type="text/javascript" src="../assets/syntaxhighlighter/scripts/shCore.js"></script>
		<script type="text/javascript" src="../assets/syntaxhighlighter/scripts/shBrushPhp.js"></script>
		<link type="text/css" rel="stylesheet" href="../assets/syntaxhighlighter/styles/shCoreDefault.css"/>
		<script type="text/javascript">SyntaxHighlighter.all();</script>
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Get Your Hands Dirty: <small><?php echo TITLE; ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				
				<h3><?php echo $person[0]['name']; ?> from <?php echo $person[0]['country']; ?></h3>
                <p>
                    <strong><?php echo $person[0]['name']; ?></strong> is quite the
                    <strong><?php echo $person[0]['age_group']; ?></strong>! He sports a solid
                    <strong><?php echo $person[0]['moustache_name']; ?></strong> Moustache that is
                    <strong><?php echo $person[0]['moustache_colour']; ?></strong> in colour.
                </p>

                <h3><?php echo $person[1]['name']; ?> from <?php echo $person[1]['country']; ?></h3>
                <p>
                    <strong><?php echo $person[1]['name']; ?></strong> is a rather dapper
                    <strong><?php echo $person[1]['age_group']; ?></strong>! He proudly wears a
                    <strong><?php echo $person[1]['moustache_name']; ?></strong> that is coloured a gentle
                    <strong><?php echo $person[1]['moustache_colour']; ?></strong>.
                </p>

                <h3><?php echo $person[2]['name']; ?> from <?php echo $person[2]['country']; ?></h3>
                <p>
                    <strong><?php echo $person[2]['name']; ?></strong> might seem too young for a 'stache because he is a
                    <strong><?php echo $person[2]['age_group']; ?></strong>. But he proudly displays his
                    <strong><?php echo $person[2]['moustache_name']; ?></strong> at school! Although, it's a little hard to see because it's light
                    <strong><?php echo $person[2]['moustache_colour']; ?></strong>.
                </p>

            </div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the final example</a>
			
			<div class="navs cf">
				<a href="" class="button prev">Previous Lecture</a>
				<a href="" class="button next">Next Lecture</a>
			</div><!-- end navs -->
			
			<hr>
			
			<small>&copy;<?php echo $this_year; ?> - <?php echo $my_name; ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
