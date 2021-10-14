    <?php
        $title = 'For Loops';
        include 'includes/header.php';
        
        echo '<h1>' . $title . '</h1>';
        //For loop
        for($count = 0; $count < 10; $count++){
            echo '<p>HELLO WORLD!</p>';
        }

        echo '<br/>';

        for($count = 0; $count < 5; $count++){
            echo '<p>The count is: ' . $count . '</p>';
        }
    ?>
</body>
</html>
<?php
    require 'includes/footer.php';
?>