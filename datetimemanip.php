    <?php
        $title = 'Date/Time Manipulation';
        include 'includes/header.php';
        
        echo '<h1>' . $title . '</h1>';

        date_default_timezone_set('America/Costa_Rica');

        $datenow = getdate();
        echo '<p>Day: ' . $datenow['mday'] . '</p>';
        echo '<p>Month: ' . $datenow['mon'] . '</p>';
        echo '<p>Year: ' . $datenow['year'] . '</p>';

        echo '<p>Today is: ' . $datenow['mday'] . '/' . $datenow['mon'] . '/' . $datenow['year'] . '</p>';
        echo '<hr/>';

        echo time();
        //Date pre-formatted
        print '<p>COMPLETE DATE: ' . date('l, d/M/Y h:i:sa e', time()) . '</p>';
    ?>
</body>
</html>
<?php
    require 'includes/footer.php';
?>