<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get input values from the form
    $length = $_POST['length'];
    $breadth = $_POST['breadth'];
    $height = $_POST['height'];

    // Calculate Surface Area and Volume of the cuboid
    $surface_area = 2 * ($length * $breadth + $breadth * $height + $height * $length);
    $volume = $length * $breadth * $height;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuboid Surface Area and Volume Calculator</title>
</head>
<body>
    <h1>Cuboid Surface Area and Volume Calculator</h1>

    <?php if ($_SERVER["REQUEST_METHOD"] != "POST"): ?>
        <!-- Form to accept length, breadth, and height -->
        <form action="" method="POST">
            <label for="length">Length:</label>
            <input type="number" id="length" name="length" required><br><br>

            <label for="breadth">Breadth:</label>
            <input type="number" id="breadth" name="breadth" required><br><br>

            <label for="height">Height:</label>
            <input type="number" id="height" name="height" required><br><br>

            <input type="submit" value="Calculate">
        </form>
    <?php else: ?>
        <!-- Display the results after form submission -->
        <h2>Results:</h2>
        <p><strong>Length:</strong> <?php echo $length; ?></p>
        <p><strong>Breadth:</strong> <?php echo $breadth; ?></p>
        <p><strong>Height:</strong> <?php echo $height; ?></p>

        <h3>Surface Area: <?php echo $surface_area; ?> square units</h3>
        <h3>Volume: <?php echo $volume; ?> cubic units</h3>

        <br>
        <a href="">Go back to the form</a>
    <?php endif; ?>

</body>
</html>
