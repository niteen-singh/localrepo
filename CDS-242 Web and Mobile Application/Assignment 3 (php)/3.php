<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armstrong Number Checker</title>
</head>
<body>
    <h2>Armstrong Number Checker</h2>

    <!-- Form to accept the number input -->
    <form action="index.php" method="POST">
        <label for="num">Enter a number:</label>
        <input type="number" id="num" name="num" required>
        <input type="submit" value="Check">
    </form>

    <?php
    // Define a function to check if the number is an Armstrong number
    function isArmstrong($num) {
        // Handle negative numbers
        if ($num < 0) {
            return false;
        }

        // Calculate the number of digits
        $num_of_digits = strlen((string)$num);

        // Initialize variable to hold the sum of the digits raised to the power of the number of digits
        $sum = 0;
        $temp = $num;

        // Loop through each digit of the number
        while ($temp != 0) {
            $digit = $temp % 10;
            $sum += pow($digit, $num_of_digits);
            $temp = (int)($temp / 10);
        }

        // Check if the sum equals the original number
        return $sum == $num;
    }

    // Handle the form submission and check if the number is Armstrong
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['num']) && $_POST['num'] !== '') {
        $num = $_POST['num'];

        // Validate the input to ensure it is a valid number
        if (!is_numeric($num)) {
            $result = "Please enter a valid number.";
        } else {
            $result = isArmstrong($num) ? "$num is an Armstrong number." : "$num is NOT an Armstrong number.";
        }
    } else {
        $result = '';
    }

    // Display result if there's a submission
    if ($result != '') {
        echo "<h3>$result</h3>";
    }
    ?>

</body>
</html>
