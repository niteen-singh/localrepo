<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
</head>
<body>

<?php
    $num1 = 10
    echo "Multiplication Table of $num1 <br>";
    
    for ($i = 1; $i <= 10; $i++) {
        echo "$num1 X $i = " . ($num1 * $i) . "<br>";
    }    
?>

</body>
</html>
