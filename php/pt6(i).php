<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>pt6(i)</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <h2 class="text-center">Money Denomination Calculator</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
      <label for="amount">Enter Amount:</label>
      <input type="number" id="amount" name="amount" class="form-control" required>
      <button type="submit" class="btn btn-primary mt-3">Calculate</button>
    </form>

    <?php
    $denominations = array(1, 2, 5, 10, 20, 50, 100); // Define $denominations globally

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        function computeNotes($amount) {
            $notes = array(0, 0, 0, 0, 0, 0, 0); 

            for ($i = 6; $i >= 0; $i--) {
                global $denominations; // Access $denominations globally
                if ($amount >= $denominations[$i]) {
                    $notes[$i] = floor($amount / $denominations[$i]);
                    $amount -= $denominations[$i] * $notes[$i];
                }
            }

            return $notes;
        }

        $amount = $_POST["amount"];
        $smallestNotes = computeNotes($amount);
        $sum = array_sum($smallestNotes); // Fix: Calculate sum using array_sum function
        echo "<h3>Denominations for Rs. $amount:</h3>";
        echo "<ul>";
        
        for ($i = 6; $i >= 0; $i--) {
            echo "<li>Rs. " . $denominations[$i] . ": " . $smallestNotes[$i] . "</li>";
        }
        echo "<li>Total Notes :".$sum." Required...</li>";
        echo "</ul>";

    }
    ?>
  </div>
</body>
</html>
