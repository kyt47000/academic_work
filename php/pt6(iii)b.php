<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>pt6(iii)b</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
<h2 class="text-center">Displaying Binary, Octal, and Hexadecimal of a Decimal Number</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
    <label for="decimalNumber">Enter Decimal Number:</label>
    <input type="number" id="decimalNumber" name="decimalNumber" class="form-control" required max="9223372036854775807"><br>
    <button type="submit" class="btn btn-primary mt-3">Convert</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $decimalNumber = $_POST["decimalNumber"];
    $binaryNumber = decbin($decimalNumber);
    $octalNumber = decoct($decimalNumber);
    $hexadecimalNumber = dechex($decimalNumber);
    echo "<p>Decimal Number: $decimalNumber</p>";
    echo "<p>Binary Number: $binaryNumber</p>";
    echo "<p>Octal Number: $octalNumber</p>";
    echo "<p>Hexadecimal Number: $hexadecimalNumber</p>";
}
?>
</div>
</body>
</html>