<html>
<head>
    <title>String Operations Form</title>
</head>
<body>

<h2>String Operations</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input values
    $string1 = $_POST['string1'];
    $string2 = $_POST['string2'];
    $operation = $_POST['operation'];

    // Initialize result variable
    $result = "";

    // Perform the selected operation
    switch ($operation) {
        case 'compare':
            if ($string1 === $string2) {
                $result = "The strings are equal.";
            } else {
                $result = "The strings are not equal.";
            }
            break;
        case 'uppercase':
            $result = strtoupper($string1);
            break;
        case 'lowercase':
            $result = strtolower($string1);
            break;
        default:
            $result = "Invalid operation.";
    }

    // Display the result
    echo "<h2>Result:</h2>";
    echo "<p><strong>Input String 1:</strong> " . htmlspecialchars($string1) . "</p>";
    echo "<p><strong>Input String 2:</strong> " . htmlspecialchars($string2) . "</p>";
    echo "<p><strong>Operation:</strong> " . htmlspecialchars($operation) . "</p>";
    echo "<p><strong>Output:</strong> " . htmlspecialchars($result) . "</p>";
} else {
?>

<form action="" method="post">
    <label for="string1">Enter First String:</label><br>
    <input type="text" id="string1" name="string1" required><br><br>
    
    <label for="string2">Enter Second String:</label><br>
    <input type="text" id="string2" name="string2" required><br><br>
    
    <label>Choose an operation:</label><br>
    <input type="radio" id="compare" name="operation" value="compare" required>
    <label for="compare">Compare Two Strings</label><br>
    <input type="radio" id="uppercase" name="operation" value="uppercase">
    <label for="uppercase">Convert First String to Uppercase</label><br>
    <input type="radio" id="lowercase" name="operation" value="lowercase">
    <label for="lowercase">Convert First String to Lowercase</label><br><br>
    
    <button type="submit">Submit</button>
</form>

<?php
}
?>

</body>
</html>