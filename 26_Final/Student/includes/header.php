<?php

    $companyName = 'Franklin\'s Fine Dining';
    $thisYear = date('Y');
    include('includes/arrays.php');

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/styles.css">
</head>
<body id="final-example">
<div class="wrapper">
    <div id="banner">
        <!-- Banner -->
        <a href="<?php echo $navItems[0]['slug']; ?>" title="Return to Home">
            <img src="img/banner.png" alt="Franklin's Fine Dining">
        </a>
    </div>
    <div id="nav">
        <!-- Nav -->
        <?php include('includes/nav.php'); ?>
    </div>
    <div class="content">
