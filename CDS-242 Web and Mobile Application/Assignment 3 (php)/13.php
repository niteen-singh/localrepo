<?php
// Function to validate email using regex
function validateEmail($email) {
    // Regular expression for a valid email format
    $pattern = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/";
    
    if (preg_match($pattern, $email)) {
        return true; // Email is valid
    } else {
        return false; // Email is invalid
    }
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the email entered by the user
    $email = $_POST['email'];
    
    // Validate the email
    if (validateEmail($email)) {
        echo "The email ID is valid.";
    } else {
        echo "The email ID is invalid.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Email Validation</title>
</head>
<body>

<h2>Email Validation Form</h2>
<form method="post" action="">
    <label for="email">Enter your Email:</label><br>
    <input type="text" id="email" name="email" required><br><br>
    <input type="submit" value="Submit">
</form>

</body>
</html>
