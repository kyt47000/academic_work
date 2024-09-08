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

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    $username = $_SESSION['username'];
    $sql = "DELETE FROM employee WHERE username='$username'";
    
    if (mysqli_query($conn, $sql)) {
        header("Location: pt10(ii).php");
        exit();
    } else {
        echo '<div class="alert alert-danger text-center" role="alert">Error deleting record: ' . mysqli_error($conn) . '</div>';
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Delete Profile</h2>
    <p>Are you sure you want to delete your profile?</p>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <button type="submit" name="delete" class="btn btn-danger">Delete</button>
        <a href="pt10(iv).php" class="btn btn-primary">Cancel</a>
    </form>
</div>
</body>
</html>
