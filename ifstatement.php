<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Newsite - If Statement</title>
</head>
<body>
    <?php
        //An If statement that will carry out an action based on the value on the variable
        echo "<h1>If Statement</h1>";

        $grade = 30;

        if($grade >= 70){
            echo '<h2 style="color: #6D9F6C">You have passed</h2>';
        }
        else{
            echo '<h2 style="color: #B00048">You have failed</h2>';
        }

        $grade = "A";

        if($grade == "A"){
            echo '<h2 style="color: #6D9F6C">YOU ARE A SUPERSTAR</h2>';
        }
        elseif($grade == "B"){
            echo '<h2 style="color: #006EE6">YOU DID WELL</h2>';
        }
        else{
            echo '<h2 style="color: #B00048">YOU HAVE FAILED</h2>';
        }
    ?>
</body>
</html>