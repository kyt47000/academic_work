<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>pt5(ii)</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h2 class="text-center">Sorting an Indexed Array (String Array)</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label for="inputArray">Enter Array Elements (comma-separated):</label>
        <input type="text" id="inputArray" name="inputArray" class="form-control" required><br>
        <button type="submit" class="btn btn-primary mt-3">Sort Array</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve input array
        $inputArray = explode(",", $_POST["inputArray"]);

        // Sorting algorithm (Bubble Sort)
        $length = count($inputArray);
        for ($i = 0; $i < $length - 1; $i++) {
            for ($j = 0; $j < $length - $i - 1; $j++) {
                // Compare adjacent elements and swap if necessary
                if ($inputArray[$j] > $inputArray[$j + 1]) {
                    $temp = $inputArray[$j];
                    $inputArray[$j] = $inputArray[$j + 1];
                    $inputArray[$j + 1] = $temp;
                }
            }
        }

        // Display sorted array
        echo "<p>Original string : $inputString";
        echo "<h4 class='mt-4'>Sorted Array:</h4>";
        echo "<ul>";
        foreach ($inputArray as $element) {
            echo "<li>$element</li>";
        }
        echo "</ul>";
    }
    ?>
</div>
</body>
</html>
