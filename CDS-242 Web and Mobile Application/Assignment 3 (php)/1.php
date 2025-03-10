<!DOCTYPE html>
<html>
<head>
    <title>Arithmetic Operations</title>
</head>
<body>

<?php
    $num1 = 10;
    $num2 = 5;

    echo "<h3>Results:</h3>";
    echo "First Number: $num1 <br>";
    echo "Second Number: $num2 <br><br>";
    
    echo "Addition: " . ($num1 + $num2) . "<br>";
    echo "Subtraction: " . ($num1 - $num2) . "<br>";
    echo "Multiplication: " . ($num1 * $num2) . "<br>";

    if ($num2 != 0) {
        echo "Division: " . ($num1 / $num2) . "<br>";
        echo "Modulus: " . ($num1 % $num2) . "<br>";
    } else {
        echo "Division and modulus by zero are not allowed.<br>";
    }
?>

</body>
</html>
