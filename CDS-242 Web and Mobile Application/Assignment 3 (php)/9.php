<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST['number'];

    if (is_numeric($number)) {
        $sum = 0;
        foreach (str_split($number) as $digit) {
            $sum += (int)$digit;  
        }

        echo "<h3>The sum of the digits of $number is: $sum</h3>";
    } else {
        echo "<h3>Please enter a valid number.</h3>";
    }
}
?>

<html>
<head>

    <title>Sum of Digits</title>
</head>
<body>
    <h2>Enter a Number to Calculate Sum of Digits</h2>
    <form action="index.php" method="POST">
        <label for="number">Enter a number:</label>
        <input type="text" id="number" name="number" required>
        <button type="submit">Calculate Sum</button>
    </form>
</body>
</html>
