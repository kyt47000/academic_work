<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>pt4(iv)</title>
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
    <h2>Multiplication Table</h2>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label for="terms">Enter Number of Terms:</label>
        <input type="number" id="terms" name="terms" required>
        <button type="submit">Generate Table</button>
    </form>
    <?php
    function generateTable($numTerms) {
        for($i=1; $i<=10; $i++){
            echo "<ul>";
            echo "<li>$numTerms  x $i = ". ($numTerms * $i). "</li>";
            echo "</ul>";
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $terms = $_POST["terms"];
        echo "<h3>Multiplication Table Of $terms :</h3>";
        generateTable($terms);
    }
    ?>
</div>
</body>
</html>
