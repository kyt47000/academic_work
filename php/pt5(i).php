<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>pt5(i)</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
<h2 class="text-center">Calculating String Length and Word Count</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
    <label for="inputString">Enter a String:</label>
    <input type="text" id="inputString" name="inputString" class="form-control" required><br>
    <button type="submit" class="btn btn-primary mt-3">Calculate</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputString = $_POST["inputString"];
    $length = 0;
    while (isset($inputString[$length])) {
        $length++;
    }
    $wordCount = 0;
    $isWord = false;
    for ($i = 0; $i < $length; $i++) {
        if ($inputString[$i] != ' ') {
            if (!$isWord) {
                $wordCount++;
                $isWord = true;
            }
        } else {
            $isWord = false;
        }
    }
    echo "<p>Original string : $inputString";
    echo "<p>Length of the string: $length</p>";
    echo "<p>Number of words in the string: $wordCount</p>";
}
?>
</div>
</body>
</html>
