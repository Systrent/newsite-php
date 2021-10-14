    <?php
        $title = 'String Manipulation';
        include 'includes/header.php';
        
        echo '<h1>' . $title . '</h1>';

        //Concatenation of strings
        $phrase1 = 'Student who come late';
        $phrase2 = 'in class, stand with Rock';

        echo '<p>' . $phrase1 . ', named Tiffany, ' . $phrase2 . '</p>';

        echo '<hr/>';
        //String tranformation
        $name = 'juan pablo mora';
        echo '<p>Uppercase first letter: ' . ucfirst($name) . '</p>';
        echo '<p>Uppercase first letter of each word: ' . ucwords($name) . '</p>';
        echo '<p>Upper case: ' . strtoupper($name) . '</p>';
        echo '<p>Lower case: ' . strtolower('THIS WAS ALL UPPERCASE') . '</p>';
        echo '<hr/>';
        echo '<p>Repeat string: ' . str_repeat('abc ', 5) . '</p>';
        echo '<p>Repeat string: ' . strtoupper(str_repeat('abc ', 5)) . '</p>';
        echo '<p>Get a substring: ' . substr($name, 5, 10) . '</p>';
        echo '<hr/>';
        echo '<p>Get position of string: ' . strpos($name, 'u') . '</p>';
        echo '<p>Find character "J": ' . strchr($name, 'J') . '</p>';
        echo '<p>Find character "n": ' . strchr($name, 'n') . '</p>';
        echo '<p>Find character "b": ' . strchr($name, 'b') . '</p>';
        echo '<p>Find lenght of string: ' . strlen($name) . '</p>';
        echo '<hr/>';
        echo '<p>Without Trim: ' . 'A' . ' B C D ' . 'E' . '</p>';
        echo '<p>Trim spaces in both sides: ' . 'A' . trim(' B C D ') . 'E' . '</p>';
        echo '<p>Trim spaces to the left: ' . 'A' . ltrim(' B C D ') . 'E' . '</p>';
        echo '<p>Trim spaces to the right: ' . 'A' . rtrim(' B C D ') . 'E' . '</p>';
        echo '<hr/>';
        echo '<p>Original string: ' . $phrase2 . '</p>';
        echo '<p>Replace string with another: ' . str_replace('stand', 'sit', $phrase2) . '</p>';
    ?>
</body>
</html>
<?php
    require 'includes/footer.php';
?>