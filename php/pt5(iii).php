<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>pt5(iii)</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h2 class="text-center">3x3 Matrix Multiplication</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label for="matrixA">Enter Matrix A (3x3, comma-separated):</label>
        <input type="text" id="matrixA" name="matrixA" class="form-control" required><br>
        <label for="matrixB">Enter Matrix B (3x3, comma-separated):</label>
        <input type="text" id="matrixB" name="matrixB" class="form-control" required><br>
        <button type="submit" class="btn btn-primary mt-3">Multiply</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve matrices A and B
        $matrixA = array_map('intval', explode(",", $_POST["matrixA"]));
        $matrixB = array_map('intval', explode(",", $_POST["matrixB"]));

        // Perform matrix multiplication
        $result = array();
        for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j < 3; $j++) {
                $result[$i][$j] = 0;
                for ($k = 0; $k < 3; $k++) {
                    $result[$i][$j] += $matrixA[$i * 3 + $k] * $matrixB[$k * 3 + $j];
                }
            }
        }

        // Display result matrix
        echo "<h4 class='mt-4'>Resultant Matrix (A * B):</h4>";
        echo "<table class='table table-bordered'>";
        for ($i = 0; $i < 3; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 3; $j++) {
                echo "<td>{$result[$i][$j]}</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
</div>
</body>
</html>
