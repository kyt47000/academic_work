<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>pt6(iii)c</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
<h2 class="text-center">Calculating Trigonometric Functions</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
    <label for="angle">Enter Angle in Degrees:</label>
    <input type="number" id="angle" name="angle" class="form-control" required><br>
    <button type="submit" class="btn btn-primary mt-3">Calculate Trigonometric Functions</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $angle = $_POST["angle"];
    $angleRad = deg2rad($angle);
    $sinValue = sin($angleRad);
    $cosValue = cos($angleRad);
    $tanValue = tan($angleRad);
    echo "For angle $angle degrees:<br>";
    echo "Sine: $sinValue<br>";
    echo "Cosine: $cosValue<br>";
    echo "Tangent: $tanValue";
}
?>
</div>
</body>
</html>