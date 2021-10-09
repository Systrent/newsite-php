<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Newsite - For Loop</title>
</head>
<body>
    <?php
        echo '<h1>For Loops</h1>';
        //For loop
        for($count = 0; $count < 10; $count++){
            echo '<p>HELLO WORLD!</p>';
        }

        echo '<br/>';

        for($count = 0; $count < 5; $count++){
            echo '<p>The count is: '.$count.'</p>';
        }
    ?>
</body>
</html>