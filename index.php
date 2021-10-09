<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Newsite</title>
</head>
<body>
    <!-- Basic HTML -->
    <h1>Hi, name nickname is Systrent</h1>
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
        echo '<h2>My name is: '.$name.'</h2>';
        echo '<h2>My age is: '.$age.'</h2>';
        //Echo using double quotes and interpolation
        echo "<h2>My name is: $name </h2>";
    ?>
    
<h1>| Follow each link to the page example |</h1>
    <ul>
        <li><a href="ifstatement.php">Simple If Statement</a></li>
        <li><a href="switchstatement.php">Simple Switch Statement</a></li>
        <li><a href="forloop.php">Simple For Loop</a></li>
        <li><a href="whiledowhileloop.php">Simple While/Do-While Loops</a></li>
        <li><a href="array.php">Simple Array and Printouts</a></li>
    </ul>
</body>
</html>