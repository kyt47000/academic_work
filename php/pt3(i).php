<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>pt3(i)</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
    .calculator {
        width: 300px;
        margin: 50px auto;
        padding: 20px;
        border: 2px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
        text-align: center;
    }

    .calculator h2 {
        margin-bottom: 20px;
    }

    input[type="text"], select {
        width: 100%;
        margin-bottom: 10px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    button {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 3px;
        background-color: #4CAF50;
        color: white;
        cursor: pointer;
    }

    button:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="calculator">
                <h2>Simple Calculator</h2>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                    <input type="text" name="num1" placeholder="Enter first number" required>
                    <input type="text" name="num2" placeholder="Enter second number" required>
                    <select name="operator" required>
                        <option value="">Select Operator</option>
                        <option value="+">Addition (+)</option>
                        <option value="-">Subtraction (-)</option>
                        <option value="*">Multiplication (*)</option>
                        <option value="/">Division (/)</option>
                        <option value="%">Modulus (%)</option>
                        <option value="**">Exponentiation (**) </option>
                        <option value="&">Bitwise AND (&)</option>
                        <option value="|">Bitwise OR (|)</option>
                    </select>
                    <button type="submit">Calculate</button>
                </form>

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $num1 = $_POST["num1"];
                    $num2 = $_POST["num2"];
                    $operator = $_POST["operator"];

                    switch ($operator) {
                        case "+":
                            $result = $num1 + $num2;
                            break;
                        case "-":
                            $result = $num1 - $num2;
                            break;
                        case "*":
                            $result = $num1 * $num2;
                            break;
                        case "/":
                            if ($num2 == 0) {
                                echo "<p>Error: Division by zero</p>";
                            } else {
                                $result = $num1 / $num2;
                            }
                            break;
                        case "%":
                            $result = $num1 % $num2;
                            break;
                        case "**":
                            $result = $num1 ** $num2;
                            break;
                        case "&":
                            $result = $num1 & $num2;
                            break;
                        case "|":
                            $result = $num1 | $num2;
                            break;
                        default:
                            echo "<p>Error: Invalid operator</p>";
                    }

                    if (isset($result)) {
                        echo "<p>Result: $result</p>";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>

</body>
</html>
