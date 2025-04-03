<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Comparison Form</title>
</head>
<body>
    <h2>String Comparison Form</h2>
    <form method="post">
        <label for="big_string">Enter the large string: </label><br>
        <input type="text" id="big_string" name="big_string" required><br><br>

        <label for="small_string">Enter the small string: </label><br>
        <input type="text" id="small_string" name="small_string" required><br><br>

        <label for="n_chars">Enter the number of characters to compare (n): </label><br>
        <input type="number" id="n_chars" name="n_chars" min="1" required><br><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Getting input from the form
        $bigString = $_POST['big_string'];
        $smallString = $_POST['small_string'];
        $nChars = $_POST['n_chars'];

        // a. Check if the small string appears at the start of the big string
        if (strpos($bigString, $smallString) === 0) {
            echo "<p>The small string appears at the start of the large string.</p>";
        } else {
            echo "<p>The small string does not appear at the start of the large string.</p>";
        }

        // b. Find the position of the small string in the big string
        $position = strpos($bigString, $smallString);
        if ($position !== false) {
            echo "<p>The position of the small string in the large string is: $position</p>";
        } else {
            echo "<p>The small string was not found in the large string.</p>";
        }

        // c. Compare the first n characters of both strings (case-insensitive)
        $bigStringSubstring = substr($bigString, 0, $nChars);
        $smallStringSubstring = substr($smallString, 0, $nChars);

        if (strcasecmp($bigStringSubstring, $smallStringSubstring) === 0) {
            echo "<p>The first $nChars characters of both strings are the same (case-insensitive comparison).</p>";
        } else {
            echo "<p>The first $nChars characters of both strings are not the same (case-insensitive comparison).</p>";
        }
    }
    ?>
</body>
</html>
