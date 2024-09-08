<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>pt3(ii)</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
    .container {
        margin-top: 50px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    table, th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }
</style>
</head>
<body>

<div class="container">
    <h2>Employee Payment Calculation</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <div class="form-group">
            <label for="basicSalary">Enter Basic Salary:</label>
            <input type="number" class="form-control" id="basicSalary" name="basicSalary" required>
        </div>
        <button type="submit" class="btn btn-primary">Calculate</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $basicSalary = $_POST["basicSalary"];

        // Calculate Dearness Allowance (DA), House Rent Allowance (HRA), and Medical
        $DA = 0.5 * $basicSalary;
        $HRA = 0.1 * $basicSalary;
        $Medical = 0.04 * $basicSalary;

        // Calculate Gross Salary
        $grossSalary = $basicSalary + $DA + $HRA + $Medical;

        // Calculate Insurance and Provident Fund (PF)
        $Insurance = 0.07 * $grossSalary;
        $PF = 0.05 * $grossSalary;

        // Calculate Deduction
        $deduction = $Insurance + $PF;

        // Calculate Net Salary
        $netSalary = $grossSalary - $deduction;

        // Display results in a table
        echo "<h3>Payment Details:</h3>";
        echo "<table>";
        echo "<tr><th>Category</th><th>Amount (in Rs.)</th></tr>";
        echo "<tr><td>Gross Salary</td><td>$grossSalary</td></tr>";
        echo "<tr><td>Insurance</td><td>$Insurance</td></tr>";
        echo "<tr><td>PF (Provident Fund)</td><td>$PF</td></tr>";
        echo "<tr><td>Deduction</td><td>$deduction</td></tr>";
        echo "<tr><td>Net Salary</td><td>$netSalary</td></tr>";
        echo "</table>";
    }
    ?>
</div>

</body>
</html>
