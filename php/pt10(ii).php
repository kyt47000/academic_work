<?php
session_start();
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
    $pwd = $_POST['password'];

    $sql = "SELECT * FROM employee WHERE username='$username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if ($pwd == $row['password']) {
            $_SESSION['username'] = $username;
            header("Location: pt10(iv).php");
            exit();
        } else {
            echo '<div class="alert alert-success text-center" role="alert">Invalid password.</div>';
        }
    } else {
        echo '<div class="alert alert-success text-center" role="alert">No user found with that username.</div>';
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Employee Login</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" target="_blank">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>
</body>
</html>
