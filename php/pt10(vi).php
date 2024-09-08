<?php
session_start();

// Check if the user is logged in, if not redirect to login page
if (!isset($_SESSION['username'])) {
    header("Location: pt10(ii).php");
    exit();
}

$servername = "localhost";
$username = "mydb10";
$password = "";
$dbname = "mydb10";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['change'])) {
    $username = $_SESSION['username'];
    $oldPassword = $_POST['oldPassword'];
    $newPassword = $_POST['newPassword'];

    // Check if old password matches
    $sql = "SELECT * FROM employee WHERE username='$username' AND password='$oldPassword'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // Update password
        $updateSql = "UPDATE employee SET password='$newPassword' WHERE username='$username'";
        if (mysqli_query($conn, $updateSql)) {
            echo '<div class="alert alert-success text-center" role="alert">Password changed successfully</div>';
        } else {
            echo '<div class="alert alert-danger text-center" role="alert">Error updating password: ' . mysqli_error($conn) . '</div>';
        }
    } else {
        echo '<div class="alert alert-danger text-center" role="alert">Incorrect old password</div>';
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Change Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Change Password</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label for="oldPassword">Old Password:</label>
            <input type="password" class="form-control" id="oldPassword" name="oldPassword" required>
        </div>
        <div class="form-group">
            <label for="newPassword">New Password:</label>
            <input type="password" class="form-control" id="newPassword" name="newPassword" required>
        </div>
        <button type="submit" name="change" class="btn btn-primary">Change Password</button>
    </form>
</div>
</body>
</html>
