<html>
<head>
    <title>Base64 Encode and Decode</title>
</head>
<body>
    <h1>Enter a String</h1>
    
    <form action="" method="POST">
        <label for="inputString">String: </label>
        <input type="text" id="inputString" name="inputString" required>
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputString = $_POST['inputString'];
        if (!empty($inputString)) {
            $encodedString = base64_encode($inputString);

            $decodedString = base64_decode($encodedString);

            echo "<h2>Base64 Encoded:</h2><p>" . $encodedString . "</p>";
            echo "<h2>Base64 Decoded:</h2><p>" . $decodedString . "</p>";
        } else {
            echo "<p>Please enter a valid string.</p>";
        }
    }
    ?>
</body>
</html>
