<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>pt6(ii)c</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
<h2 class="text-center">Removing White Spaces From String...</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
<label for="str">Enter String:</label>
<input type="text" id="text" name="text" class="form-control" required>
<button type="submit" class="btn btn-primary mt-3">Check</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$text = $_POST["text"];
$text2 = str_replace(' ', '', $text); // Remove white spaces from the string
echo "Original String : ".$text. "<br>";
echo "Resulting String : ".$text2."<br>";

}
?>
</div>
</body>
</html>
