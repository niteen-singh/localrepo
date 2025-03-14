<?php
// Function to convert each digit to words
function digitToWords($digit) {
    $words = [
        '0' => 'Zero',
        '1' => 'One',
        '2' => 'Two',
        '3' => 'Three',
        '4' => 'Four',
        '5' => 'Five',
        '6' => 'Six',
        '7' => 'Seven',
        '8' => 'Eight',
        '9' => 'Nine'
    ];
    return $words[$digit];
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST['number'];

    // Check if the input is a valid number
    if (is_numeric($number)) {
        $output = "<h2>Number in Words:</h2><p>";
        
        // Loop through each character in the number string
        foreach (str_split($number) as $digit) {
            $output .= digitToWords($digit) . " ";
        }

        $output .= "</p>";
    } else {
        $output = "<p>Please enter a valid number.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number to Words</title>
</head>
<body>
    <h1>Enter a Number</h1>
    <form action="" method="POST">
        <label for="number">Number: </label>
        <input type="text" id="number" name="number" required>
        <button type="submit">Submit</button>
    </form>

    <?php
    // Display the result if any
    if (isset($output)) {
        echo $output;
    }
    ?>
</body>
</html>
