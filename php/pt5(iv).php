<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>pt5(iv)</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h2 class="text-center">Morse Code Encoder</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label for="inputMessage">Enter Message:</label>
        <input type="text" id="inputMessage" name="inputMessage" class="form-control" required><br>
        <button type="submit" class="btn btn-primary">Encode to Morse Code</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Morse code dictionary
        $morseCode = array(
            'A' => '.-', 'B' => '-...', 'C' => '-.-.', 'D' => '-..', 'E' => '.', 'F' => '..-.', 'G' => '--.', 'H' => '....', 'I' => '..', 'J' => '.---',
            'K' => '-.-', 'L' => '.-..', 'M' => '--', 'N' => '-.', 'O' => '---', 'P' => '.--.', 'Q' => '--.-', 'R' => '.-.', 'S' => '...', 'T' => '-',
            'U' => '..-', 'V' => '...-', 'W' => '.--', 'X' => '-..-', 'Y' => '-.--', 'Z' => '--..',
            '0' => '-----', '1' => '.----', '2' => '..---', '3' => '...--', '4' => '....-', '5' => '.....', '6' => '-....', '7' => '--...', '8' => '---..', '9' => '----.',
            ' ' => '/'
        );

        // Get input message and convert to uppercase
        $inputMessage = strtoupper($_POST["inputMessage"]);

        // Encode message to Morse code
        $encodedMessage = '';
        for ($i = 0; $i < strlen($inputMessage); $i++) {
            $char = $inputMessage[$i];
            if (array_key_exists($char, $morseCode)) {
                $encodedMessage .= $morseCode[$char] . ' ';
            } else {
                $encodedMessage .= $char; // If character is not in the dictionary, keep it as is
            }
        }

        // Display encoded message
        echo "<p>Original Message : $inputMessage";
        echo "<h4 class='mt-4'>Encoded Message:</h4>";
        echo "<p>$encodedMessage</p>";
    }
    ?>
</div>
</body>
</html>
