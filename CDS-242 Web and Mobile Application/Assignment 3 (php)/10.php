<?php
function calculateCylinder($radius, $height) {
    $area = 2 * pi() * $radius * ($radius + $height);
    $volume = pi() * pow($radius, 2) * $height;
    return [$area, $volume];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $radius = $_POST['radius'];
    $height = $_POST['height'];

    if ($radius > 0 && $height > 0) {
        list($area, $volume) = calculateCylinder($radius, $height);
        $result = "<h1>Results</h1>
                   <p><strong>Area of the cylinder:</strong> " . round($area, 2) . " square units</p>
                   <p><strong>Volume of the cylinder:</strong> " . round($volume, 2) . " cubic units</p>";
    } else {
        $result = "<p>Please enter valid positive values for radius and height.</p>";
    }
} else {
    $result = '';
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cylinder Area and Volume Calculator</title>
</head>
<body>

    <h1>Cylinder Area and Volume Calculator</h1>

    <form action="" method="post">
        <label for="radius">Radius (r):</label>
        <input type="number" id="radius" name="radius" step="any" required><br><br>

        <label for="height">Height (h):</label>
        <input type="number" id="height" name="height" step="any" required><br><br>

        <input type="submit" value="Calculate">
    </form>

    <?php echo $result; ?>

</body>
</html>
