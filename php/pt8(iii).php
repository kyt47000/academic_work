<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL GET Method Demo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<?php
if(isset($_GET['name'])) { // Check if name is passed in the URL
    $name = $_GET['name'];
    echo '<div class="container">';
    echo '<h2>Welcome, ' . $name . '!</h2>';
    echo '<p>This is the welcome page.</p>';
    echo '</div>';
} else { // Display form to submit name
    ?>
    <div class="container">
        <h2>Enter Your Name</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <?php
}
?>

</body>
</html>
