<html>
<head>
    <title>pt6(iv)</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>Current Date and Time</h1>
    <?php
        // Get current date and time
        $currentDateTime = date("Y-m-d H:i:s");

        // Display in different formats
        echo "<p>Current Date and Time (YYYY-MM-DD HH:MM:SS): $currentDateTime</p>";
        echo "<p>Current Date (MM/DD/YYYY): " . date("m/d/Y") . "</p>";
        echo "<p>Current Time (HH:MM:SS): " . date("H:i:s") . "</p>";
        echo "<p>Day of the Week: " . date("l") . "</p>";
        echo "<p>Month: " . date("F") . "</p>";
        echo "<p>Day of the Month: " . date("d") . "</p>";
        echo "<p>Year (YY): " . date("y") . "</p>";
        echo "<p>AM/PM: " . date("A") . "</p>";
        echo "<p>Time in 12-hour format: " . date("h:i:s A") . "</p>";
        echo "<p>Week Number: " . date("W") . "</p>";
        echo "<p>Day of the Year: " . date("z") . "</p>";
        echo "<p>ISO-8601 date: " . date("c") . "</p>";
        echo "<p>Unix Timestamp: " . time() . "</p>";
    ?>
</div>
</body>
</html>
