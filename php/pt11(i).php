<?php
require_once('tcpdf/tcpdf.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $employeeName = $_POST['employeeName'];
    $employeeID = $_POST['employeeID'];
    $month = $_POST['month'];
    $basicSalary = $_POST['basicSalary'];
    $allowances = $_POST['allowances'];
    $deductions = $_POST['deductions'];

    // Create a new PDF instance
    $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

    // Set document information
    $pdf->SetCreator('Your Company');
    $pdf->SetAuthor($employeeName);
    $pdf->SetTitle('Salary Slip');
    $pdf->SetSubject('Salary Slip');
    $pdf->SetKeywords('Salary, Slip, Employee');

    // Add a page
    $pdf->AddPage();

    // Set font
    $pdf->SetFont('helvetica', 'B', 16);

    // Title
    $pdf->Cell(0, 10, 'Salary Slip', 0, 1, 'C');

    // Set font
    $pdf->SetFont('helvetica', '', 12);

    // Employee details
    $pdf->Cell(0, 10, 'Employee Name: ' . $employeeName, 0, 1);
    $pdf->Cell(0, 10, 'Employee ID: ' . $employeeID, 0, 1);
    $pdf->Cell(0, 10, 'Month: ' . $month, 0, 1);
    $pdf->Cell(0, 10, '-------------------------------------------', 0, 1);

    // Salary details
    $pdf->Cell(0, 10, 'Basic Salary: $' . $basicSalary, 0, 1);
    $pdf->Cell(0, 10, 'Allowances: $' . $allowances, 0, 1);
    $pdf->Cell(0, 10, 'Deductions: $' . $deductions, 0, 1);
    $netSalary = $basicSalary + $allowances - $deductions;
    $pdf->Cell(0, 10, '-------------------------------------------', 0, 1);
    $pdf->Cell(0, 10, 'Net Salary: $' . $netSalary, 0, 1);

    // Output the PDF
    $pdf->Output('salary_slip.pdf', 'I');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Generate Salary Slip</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Generate Salary Slip</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label for="employeeName">Employee Name:</label>
            <input type="text" class="form-control" id="employeeName" name="employeeName" required>
        </div>
        <div class="form-group">
            <label for="employeeID">Employee ID:</label>
            <input type="text" class="form-control" id="employeeID" name="employeeID" required>
        </div>
        <div class="form-group">
            <label for="month">Month:</label>
            <input type="text" class="form-control" id="month" name="month" required>
        </div>
        <div class="form-group">
            <label for="basicSalary">Basic Salary:</label>
            <input type="number" step="0.01" class="form-control" id="basicSalary" name="basicSalary" required>
        </div>
        <div class="form-group">
            <label for="allowances">Allowances:</label>
            <input type="number" step="0.01" class="form-control" id="allowances" name="allowances" required>
        </div>
        <div class="form-group">
            <label for="deductions">Deductions:</label>
            <input type="number" step="0.01" class="form-control" id="deductions" name="deductions" required>
        </div>
        <button type="submit" class="btn btn-primary">Generate Salary Slip</button>
    </form>
</div>
</body>
</html>
