<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>pt4(iii)</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f2f2f2;
    }

    .container {
        max-width: 600px;
        margin: 20px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
    }

    ul {
        list-style-type: none;
        padding: 0;
    }

    li {
        margin-bottom: 10px;
    }
    
    @media only screen and (max-width: 600px) {
        .container {
            width: 90%;
            margin: 10px auto;
        }
    }
</style>
</head>
<body>

<div class="container">
    <h2>Fibonacci Sequence</h2>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label for="terms">Enter Number of Terms:</label>
        <input type="number" id="terms" name="terms" min="1" required>
        <button type="submit">Generate Sequence</button>
    </form>

    <?php
    function generateFibonacci($terms) {
        $fibonacciSequence = [];

        $num1 = 0;
        $num2 = 1;

        $fibonacciSequence[] = $num1;
        $fibonacciSequence[] = $num2;

        for ($i = 2; $i < $terms; $i++) {
            $num3 = $num1 + $num2;
            $fibonacciSequence[] = $num3;
            $num1 = $num2;
            $num2 = $num3;
        }

        return $fibonacciSequence;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $terms = $_POST["terms"];

        if ($terms > 0) {
            $fibonacciSequence = generateFibonacci($terms);

            echo "<h3>Fibonacci Sequence up to $terms terms:</h3>";
            echo "<ul>";
            foreach ($fibonacciSequence as $term) {
                echo "<li>$term</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>Please enter a positive integer.</p>";
        }
    }
    ?>
</div>

</body>
</html>
