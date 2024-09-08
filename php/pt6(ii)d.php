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
<h2 class="text-center">Replacing Characters in a String...</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
<label for="str">Enter String:</label>
<input type="text" id="text" name="text" class="form-control" required>
<label for="wordToReplace">Word to Replace:</label>
<input type="text" id="wordToReplace" name="wordToReplace" class="form-control" required>
<label for="newWord">New Word:</label>
<input type="text" id="newWord" name="newWord" class="form-control" required>
<button type="submit" class="btn btn-primary mt-3">Replace</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputString = $_POST["text"];
    $wordToReplace = $_POST["wordToReplace"];
    $newWord = $_POST["newWord"];
    $outputString = str_replace($wordToReplace, $newWord, $inputString);
    echo "<p>Original String: $inputString</p>";
    echo "<p>Replaced String: $outputString</p>";
}
?>
</div>
</body>
</html>
