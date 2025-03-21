<?php
// Function to validate PAN number
function validatePAN($pan) {
    // Regular Expression for PAN: 
    // - First 5 characters must be uppercase alphabets (A-Z)
    // - Next 4 characters must be digits (0-9)
    // - Last character must be an uppercase letter (A-Z)
    $pattern = "/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/";

    // Check if PAN matches the pattern
    if (preg_match($pattern, $pan)) {
        return true; // PAN is valid
    } else {
        return false; // PAN is invalid
    }
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get PAN number from the user input
    $pan = $_POST['pan'];

    // Validate PAN number
    if (validatePAN($pan)) {
        echo "The entered PAN number is valid.";
    } else {
        echo "The entered PAN number is invalid.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAN Number Validation</title>
</head>
<body>
    <h2>Enter your PAN Number</h2>
    <form method="post" action="">
        <label for="pan">PAN Number:</label>
        <input type="text" id="pan" name="pan" required pattern="[A-Z]{5}[0-9]{4}[A-Z]{1}">
        <button type="submit">Validate</button>
    </form>
</body>
</html>
