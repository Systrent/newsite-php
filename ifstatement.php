    <?php
        $title = 'If Statement';
        include 'includes/header.php';
        
        //An If statement that will carry out an action based on the value on the variable
        echo '<h1>' . $title . '</h1>';

        $grade = 30;

        //If statement
        if($grade >= 70){
            echo '<h2 style="color: #6D9F6C">You have passed</h2>';
        }
        else{
            echo '<h2 style="color: #B00048">You have failed</h2>';
        }

        $grade = 'A';

        //If statement
        if($grade == 'A'){
            echo '<h2 style="color: #6D9F6C">YOU ARE A SUPERSTAR</h2>';
        }
        elseif($grade == 'B'){
            echo '<h2 style="color: #006EE6">YOU DID WELL</h2>';
        }
        else{
            echo '<h2 style="color: #B00048">YOU HAVE FAILED</h2>';
        }
    ?>
</body>
</html>
<?php
    require 'includes/footer.php';
?>