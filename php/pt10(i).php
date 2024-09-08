<?php
$servername = "localhost";
$username = "mydb10";
$password = "";
$dbname = "mydb10";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password']; // Secure password hashing
    $dateofjoin = $_POST['dateofjoin'];
    $position = $_POST['position'];
    $salary = $_POST['salary'];

    $sql = "INSERT INTO employee (username, password, dateofjoin, position, salary) VALUES ('$username', '$password', '$dateofjoin', '$position', '$salary')";

    if (mysqli_query($conn, $sql)) {
        echo '<div class="alert alert-success text-center" role="alert">New record created successfully</div>';
    } else {
        echo '<div class="alert alert-danger text-center" role="alert">Error: ' . $sql . '<br>' . mysqli_error($conn) . '</div>';
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Employee Registration</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="dateofjoin">Date of Join:</label>
            <input type="date" class="form-control" id="dateofjoin" name="dateofjoin" required>
        </div>
        <div class="form-group">
            <label for="position">Position:</label>
            <input type="text" class="form-control" id="position" name="position" required>
        </div>
        <div class="form-group">
            <label for="salary">Salary:</label>
            <input type="number" step="0.01" class="form-control" id="salary" name="salary" required>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>
</body>
</html>
