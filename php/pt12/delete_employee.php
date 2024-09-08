<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Employee</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Delete Employee</h1>
        <form action="delete_employee.php" method="post">
            <div class="form-group">
                <label for="id">Employee ID:</label>
                <input type="number" class="form-control" id="id" name="id" required>
            </div>
            <button type="submit" class="btn btn-danger">Delete Employee</button>
            <a href="index.php" class="btn btn-secondary">Back</a>
        </form>
        <?php require_once 'db.php';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id = $_POST['id'];

            // Delete query
            $query = "DELETE FROM emp WHERE id = '$id'";
            
            // Execute query
            if (mysqli_query($conn, $query)) {
                echo "Employee deleted successfully!";
            } else {
                echo "Error deleting employee: ". mysqli_error($conn);
            }
            
            // Close connection
            mysqli_close($conn);
        }
        ?>
    </div>
</body>
</html>