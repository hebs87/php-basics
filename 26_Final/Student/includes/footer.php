<?php

?>

<div id="footer" class="cf">
    <div class="column three">
        <strong>Phone</strong>
        07700 123 1234
    </div>
    <div class="column three">
        <strong>Location</strong>
        129 Sherwoods Lane
        <br>
        Liverpool
        <br>
        L10 1NB
    </div>
    <div class="column three last">
        <strong>Hours</strong>
        <em>Tuesday - Thursday</em>
        <br>
        1:00pm - 9:00pm
        <br>
        <br>
        <em>Friday - Saturday</em>
        <br>
        4:00pm - 11:00pm
        <br>
        <br>
        <em>Sunday - Monday</em>
        <br>
        Closed
        <br>

        <?php include('includes/store-hours.php') ?>

    </div>
</div>
<small>&copy;<?php echo $thisYear . ' ' . $companyName; ?></small>
</div>
</div>
<div class="copyright-info">
    <?php include('../../assets/includes/copyright.php') ?>
</div>
</body>
</html>
