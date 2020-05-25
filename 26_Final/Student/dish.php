<?php

    define("TITLE", "Menu");

    include('includes/header.php');

    // Strip bad characters function
    // Learn more about preg_replace: http://php.net/manual/en/function.preg-replace.php
    function strip_bad_chars($input) {
        $output = preg_replace("/[^a-zA-Z0-9_-]/", "", $input);
        return $output;
    }

    // If the 'item' value is set, we get the value from the URL
    if (isset($_GET['item'])) {
        $menuItem = strip_bad_chars($_GET['item']);
        // We get the menu item matching the $menuItem variable value from the $menuItems array
        $dish = $menuItems[$menuItem];
    }

    // Calculate suggested tip
    function suggestedTip($price, $tip) {
        $totalTip = $price * $tip;
        echo number_format($totalTip, 2);
    }

?>

<hr>

<div id="dish">

    <h1><?php echo $dish["title"]; ?> <span class="price"><sup>&pound;</sup><?php echo $dish["price"]; ?></span></h1>
    <p><?php echo $dish["blurb"]; ?></p>
    <br>
    <p><strong>Suggested beverage: <?php echo $dish["drink"]; ?></strong></p>
    <p><em>Suggested tip: <sup>&pound;</sup><?php suggestedTip($dish["price"], 0.10); ?></em></p>

</div><!-- dish -->

<hr>

<a href="menu.php" class="button previous">&laquo; Back to Menu</a>

<?php

    include('includes/footer.php');

?>
