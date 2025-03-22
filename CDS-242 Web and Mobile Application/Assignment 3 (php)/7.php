<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the 'username' field is set and not empty
    if (isset($_POST['username']) && !empty($_POST['username'])) {
        $username = htmlspecialchars($_POST['username']); // sanitize the input
        echo "<h1>Welcome, $username!</h1>";
    } else {
        echo "<p>Please enter a valid username.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Username Form</title>
</head>
<body>
    <h2>Enter Your Name</h2>
    <form action="index.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
