<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>pt(ii)</title>
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

    form {
        display: flex;
        flex-direction: column;
    }

    label {
        margin-bottom: 5px;
    }

    input[type="text"], input[type="number"], button {
        padding: 10px;
        margin-bottom: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }

    button {
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
    }

    button:hover {
        background-color: #0056b3;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td ,p {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: center;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
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
<h2><center>Enter Your Marks</center></h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label for="studentName">Enter Your Name:</label>
        <input type="text" id="studentName" name="studentName" required>
        <br>
        <label for="subject1">Enter Marks for AOOP :</label>
        <input type="number" id="subject1" name="subject1" min="0" max="100" required>
        <br>
        <label for="subject2">Enter Marks for CN :</label>
        <input type="number" id="subject2" name="subject2" min="0" max="100" required>
        <br>
        <label for="subject3">Enter Marks for ISE :</label>
        <input type="number" id="subject3" name="subject3" min="0" max="100" required>
        <br>
        <label for="subject4">Enter Marks for IWD :</label>
        <input type="number" id="subject4" name="subject4" min="0" max="100" required>
        <br>
        <button type="submit">Calculate Result</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $studentName = $_POST["studentName"];
        // Get marks for each subject
        $marks1 = $_POST["subject1"];
        $marks2 = $_POST["subject2"];
        $marks3 = $_POST["subject3"];
        $marks4 = $_POST["subject4"];

        // Function to calculate grade based on marks
        function calculateGrade($marks) {
            if ($marks >= 85 && $marks <= 100) {
                return array(true,"AA");
            } elseif ($marks >= 75 && $marks <= 84) {
                return array(true,"AB");
            } elseif ($marks >= 65 && $marks <= 74) {
                return array(true,"BB");
            } elseif ($marks >= 55 && $marks <= 64) {
                return array(true,"BC");
            } elseif ($marks >= 45 && $marks <= 54) {
                return array(true,"CC");
            } elseif ($marks >= 40 && $marks <= 44) {
                return array(true,"CD");
            } elseif ($marks >= 35 && $marks <= 39) {
                return array(true,"DD");
            } else {
                return array(false,"FF (FAIL)");
            }
        }

        // Calculate grades for each subject
        $grade1 = calculateGrade($marks1);
        $grade2 = calculateGrade($marks2);
        $grade3 = calculateGrade($marks3);
        $grade4 = calculateGrade($marks4);

        // Display results in a table
        echo "<h2>Subject Results for $studentName</h2>";
        echo "<table>";
        echo "<tr><th>Subject</th><th>Marks</th><th>Grade</th></tr>";
        echo "<tr><td>AOOP</td><td>$marks1</td><td>$grade1[1]</td></tr>";
        echo "<tr><td>CN</td><td>$marks2</td><td>$grade2[1]</td></tr>";
        echo "<tr><td>ISE</td><td>$marks3</td><td>$grade3[1]</td></tr>";
        echo "<tr><td>IWD</td><td>$marks4</td><td>$grade4[1]</td></tr>";
        echo "</table>";
            if(!$grade1[0]||!$grade2[0]||!$grade3[0]||!$grade4[0]){
                echo "<p>Overall you are fail, better luck next time...</p>";
            }
            else{
                echo "<p>Congratulations you passed successfully.</p>";
            }
        }
    ?>
</div>

</body>
</html>
