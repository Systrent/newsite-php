    <?php
        $title = 'Switch Statement';
        include 'includes/header.php';
        
        echo '<h1>' . $title . '</h1>';
        $grade = 'A';

        //Switch statement
        switch($grade){
            case 'A':
                echo '<h2 style="color: #6D9F6C">YOU ARE A SUPERSTAR</h2>';
                break;
            case 'B':
                echo '<h2 style="color: #006EE6">YOU DID WELL</h2>';
                break;
            default:
                echo '<h2 style="color: #B00048">YOU HAVE FAILED</h2>';
                break;
        }
    ?>
    
</body>
</html>
<?php
    require 'includes/footer.php';
?>