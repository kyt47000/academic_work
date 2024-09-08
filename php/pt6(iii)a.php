<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>pt6(iii)a</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
<h2 class="text-center">Generating Random Number in a Range</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
    <label for="minValue">Enter Min Value:</label>
    <input type="number" id="minValue" name="minValue" class="form-control" required><br>
    <label for="maxValue">Enter Max Value:</label>
    <input type="number" id="maxValue" name="maxValue" class="form-control" required><br>
    <button type="submit" class="btn btn-primary mt-3">Generate Random Number</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $minValue = $_POST["minValue"];
    $maxValue = $_POST["maxValue"];
    $randomNumber = mt_rand($minValue, $maxValue);
    echo "Random number between $minValue and $maxValue: $randomNumber";
}
?>
</div>
</body>
</html>