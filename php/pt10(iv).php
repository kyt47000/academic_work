<?php
session_start();

// Logout logic
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: pt10(ii).php");
    exit();
}

// Check if the user is logged in, if not redirect to login page
if (!isset($_SESSION['username'])) {
    header("Location: pt10(ii).php");
    exit();
}

// Retrieve basic employee information from the database
$servername = "localhost";
$username = "mydb10";
$password = "";
$dbname = "mydb10";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$username = $_SESSION['username'];
$sql = "SELECT * FROM employee WHERE username='$username'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome, <?php echo $row['username']; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Welcome, <?php echo $row['username']; ?></h2>
    <p><strong>Date of Join:</strong> <?php echo $row['dateofjoin']; ?></p>
    <p><strong>Position:</strong> <?php echo $row['position']; ?></p>
    <p><strong>Salary:</strong> <?php echo $row['salary']; ?></p>
    <a href="?logout" class="btn btn-primary">Logout</a>
</div>
</body>
</html>
