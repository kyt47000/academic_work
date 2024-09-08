<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>pt6(ii)a</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <h2 class="text-center">Check The Given String Is Lowercase Or Not </h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
      <label for="amount">Enter String:</label>
      <input type="text" id="text" name="text" class="form-control" required>
      <button type="submit" class="btn btn-primary mt-3">Check</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        function check($str) {
            if($str==strtolower($str)) return 'The string is lowercase.';
            else return 'The string is not lowercase.';
        }

        $text = $_POST["text"];
        echo "Original String : ".$text. "<br>";
        echo check($text);

    }
    ?>
  </div>
</body>
</html>
