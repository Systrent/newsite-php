    <?php
        $title = 'Functions';
        include 'includes/header.php';
        
        echo '<h1>' . $title . '</h1>';

        //Defining a function
        function writeMessage(){
            echo '<p>You are a really nice person, have a nice time!</p>';
        }

        //Defining a function
        writeMessage();
        echo '<hr/>';
        writeMessage();

        //Function with parameters
        function addFunction($num1, $num2){
            $sum = $num1 + $num2;
            echo '<p>The sum of ' . $num1 . ' + ' . $num2 . ' = ' . $sum . '</p>';
        }

        function changeNum(&$num){
            $num += 25;
        }
        
        function returnProduct($num1, $num2){
            $prod = $num1 * $num2;
            return $prod;
        }

        echo '<hr/>';
        $num = 400;
        addFunction(15, 35);
        addFunction(30, $num);
        addFunction('10', "5");

        echo '<hr/>';
        changeNum($num);
        echo '<p>Num is now: ' . $num . '</p>';

        echo '<hr/>';
        $return_value = returnProduct(10, 300);
        echo '<p>Product: ' . $return_value . '</p>';
    ?>
    
</body>
</html>
<?php
    require 'includes/footer.php';
?>