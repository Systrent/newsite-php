    <?php
        $title = 'Index';
        include 'includes/header.php';
    ?>
    <!-- Basic HTML -->
    <h1>Hi, my name nickname is Systrent</h1>
    <?php
        //Printing to HTML using echo
        echo 'Hello my friend';
        echo '<br/>';
        echo 'Hope you have a nice day!';
        echo '<br/>';
    ?>

    <?php
        //Declare variable
        $name = 'Juan Pablo Mora';
        $age = 21;
        //Echo variable
        echo $name;
        //Display content
        echo '<h2>My name is: ' . $name . '</h2>';
        echo '<h2>My age is: ' . $age . '</h2>';
        //Echo using double quotes and interpolation
        echo "<h2>My name is: $name </h2>";
    ?>
    
    <?php
        require 'includes/footer.php';
    ?>